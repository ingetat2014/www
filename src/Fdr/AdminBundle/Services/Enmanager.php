<?php

namespace Fdr\AdminBundle\Services;

use Doctrine\Common\Collections\ArrayCollection;
use Fdr\AdminBundle\Entity\ClientFdrV;
use Fdr\AdminBundle\Entity\ClientFdrF;
use Fdr\AdminBundle\Entity\Parametrage;

class Enmanager {
    public function __construct($securityContext, $entityManager) {
        $this->securityContext = $securityContext;
        $this->em = $entityManager;
    }

    public function getRep($bundle, $table) {
        return $this->em->getRepository($bundle . ":" . ucfirst(strtolower($table)));
    }

    public function getEm() {
        return $this->em;
    }

    public function updateMesures($entity, $em,$cntrl=null) {
        // tester le recalcul     
        //calcul de synthèse
        $jrs = $entity->getDateDebutMission()->diff($entity->getDateFinMission())->format('%a');
        $h = $entity->getDateDebutMission()->diff($entity->getDateFinMission())->format('%h');
        $mi = $entity->getDateDebutMission()->diff($entity->getDateFinMission())->format('%i');
        $sec = $entity->getDateDebutMission()->diff($entity->getDateFinMission())->format('%s');
        $nbJourReel = ($jrs * 24 + $h + $mi / 60 + $sec / 3600) / 24;
        $nbJour = ceil($nbJourReel * 2) / 2;
        // Nbre jrs
        $entity->setCalcNbJours(abs($nbJour));
        //Nbre Prises
        $entity->setCalcPrise(count($entity->getBonCarburantHuiles()));
        //Km Parcouru
        $entity->setCalcKmParcourus(abs($entity->getCompteurFinal() - $entity->getCompteurReel()));

        $p = new Parametrage();
        $query = $em->createQuery("select p from FdrAdminBundle:Parametrage p ")->setMaxResults(1);
        try {
            $p = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $p = new Parametrage();
            $em->persist($p);
            $em->flush();
        }

        $debutMission = $entity->getDateDebutMission();
        $finMission = $entity->getDateFinMission();
        $debutDej = $p->getHeureDebutDejeuner();
        $finDej = $p->getHeureFinDejeuner();
        $debutDiner = $p->getHeureDebutDiner();
        $finDiner = $p->getHeureFinDiner();
        $entity->setCalcNbRepas(abs($this->nombreRepas(clone $debutMission, clone $finMission, clone $debutDej, $finDej, clone $debutDiner, clone $finDiner)));
        $nbDecoucher = $this->nombreDecoucher(clone $debutMission, clone $finMission, clone $p->getHeureDebutDecoucher(), clone $p->getHeureFinDecoucher());
        $entity->setCalcNbDecoucher($nbDecoucher);

        //Petit Dejeuner
        $this->getPetitDej($entity->getDateDebutMission(), $entity->getDateFinMission(), $em, $entity);
        $dateFinO = clone $entity->getDateFinMission();
        $dateFinO->setTime(0, 0, 0);
        $dateDebutO = clone $entity->getDateDebutMission();
        $dateDebutO->setTime(0, 0, 0);
        $nbJourPetitDej = (($dateFinO->getTimestamp() - $dateDebutO->getTimestamp()) / 86400);
        $nbPetitDej = $nbJourPetitDej + 1;
        $entity->setcalcNbPetitDej($nbPetitDej);

        //Prime Nuit
        $this->getPrimeNuit($entity, $em, $nbDecoucher);
        //Recalcul
        if (($entity->getVehicule()->getCompteur() != $entity->getCompteurFinal()) and ($entity->getEtat() != "cloturer")) {
            $entity->setCalcDiffKm(abs($entity->getVehicule()->getCompteur() - $entity->getCompteurReel()));
            $entity->setDateClotureMission(new \DateTime());
        }
        //vehicule
        $entity->setPrimeRemorque($entity->getVehicule()->getRemorque());
        $entity->getVehicule()->setCompteur($entity->getCompteurFinal());

        //Peages et carburants
        $totQt = 0;
        $totMt = 0;
        $bons2 = new ArrayCollection();
        foreach ($entity->getBonCarburantHuiles() as $value) {
            if($value!=null)
            {
            $totQt +=$value->getQuantite();
            $totMt +=$value->getMontant();
            $bons2->add($value);
            $value->setFeuilleDeRoute($entity); //recemment
            }
            else
            {
                $entity->removeBonCarburantHuile($value);
            }
        }
        $entity->setCalcQuantite($totQt);
        $entity->setCalcMontantCarburant($totMt);
        //nettoyer recemment
        $lesBons = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->findByFeuilleDeRoute($entity->getId());
                    foreach ($lesBons as $leBon) {
                        if (!$bons2->contains($leBon)) {
                            $em->remove($leBon);
                        }
                    }
        //
        
        $totMt = 0;
        $bons2 = new ArrayCollection();
        foreach ($entity->getPeages() as $value) {
            $totMt +=$value->getMontant();
            $bons2->add($value);
            $value->setFeuilleDeRoute($entity); //recemment
        }
        $entity->setCalcMontantPeage($totMt);

        //nettoyer recemment
        $lesBons = $em->getRepository('FdrAdminBundle:Peage')->findByFeuilleDeRoute($entity->getId());
                    foreach ($lesBons as $leBon) {
                        if (!$bons2->contains($leBon)) {
                            $em->remove($leBon);
                        }
                    }



        //SUite
        /*
          foreach ($entity->getPeages() as $pea) {
          $pea->setFeuilleDeRoute($entity);
          }
          foreach ($entity->getBonCarburantHuiles() as $bon) {
          $bon->setFeuilleDeRoute($entity);
          } */

        if($entity->getEtat()!="cloturer"){$entity->setEtat("cloturer");}

        if ($entity->getMissionAffretement()) {
            if($entity->getMissionAffretement()->getEtat()!='fdr-cloturer')
            {
                $entity->getMissionAffretement()->setEtat('fdr-cloturer');
                
            }
            //Envoi msg
        /*$this->session->set('envoiFdr-Cloturer', $entity->getId());
        $now = new \DateTime();
        $destinataire = $entity->getMissionAffretement()->getUser()?$entity->getMissionAffretement()->getUser():"ismailkomay@gmail.com";//celui qui a créé cet affretement
        $sujet = "La feuille est en attente de confirmation d'accusé de réception ";
        $notif="Un message sera envoyé à l'utilisateur créant cet affrêtement : ".$destinataire;
        $body =$this->renderView('FdrAdminBundle:Email:fdr-cloturer.html.twig', 
                array('utilisateur' =>  $this->getUser()." / ".$this->getUser()->getEmail(),
                     'fdr' =>  $entity->getId(),
                    'aff' =>  $entity->getMissionAffretement()->getId(),
                    'date' => $now->format("d-m-Y H:i"),));
        $service = $this->get('my_mailer')->envoyer
                ($this->container,
                $destinataire,
                $sujet,
                $body,
                $notif);*/
        }
        //suite suite
        $mans = $entity->getManutentions();
        foreach ($mans as $manOuChauff) {
            if ($manOuChauff != null) {
                    $manOuChauff->setDisponibilite(true);
                }
        }
        $em->flush();

        return $entity;
    }

    public function repartirLesClientsFV($emm, $entity, $clients, $secteurs, $controleur = null) {
        $clientselectionnes = new ArrayCollection();
        $clientdeselectionnes = new ArrayCollection();
        $tsclientDuSecteurs = new ArrayCollection();
        $clientVSupprimer = new ArrayCollection();
        $clientFSupprimer = new ArrayCollection();
        $clientVAAjouter = new ArrayCollection();
        $clientFAjouter = new ArrayCollection();

        if(count($entity->getClientFdrVs())>0){
        foreach ($entity->getClientFdrVs() as $v) {
            $emm->remove($v);
        }}
        if(count($entity->getClientFdrFs())>0){
        foreach ($entity->getClientFdrFs() as $f) {
            $emm->remove($f);
        }
        }
        $emm->flush();

        foreach ($clients as $value) {
            $clientselectionnes->add($value);
            $resultat = explode('-', $value);
            $clientFdrV = new ClientFdrV();
            $clientFdrV->setClient($emm->getRepository('FdrAdminBundle:Client')->find($resultat[0]));
            $clientFdrV->setSecteur($emm->getRepository('FdrAdminBundle:Secteur')->find($resultat[1]));
            $clientFdrV->setFeuilleDeRoute($entity);
            $fdrExiste = $emm->getRepository('FdrAdminBundle:ClientFdrV')->findOneByFeuilleDeRoute($entity->getId());
            $emm->persist($clientFdrV);
            $emm->flush();
        }
        foreach ($secteurs as $value2) {
            foreach ($value2->getClients() as $value3) {
                if ($value3->getClientramass()) {
                    $tsclientDuSecteurs->add($value3->getId() . "-" . $value2->getId());
                }
            }
        }
        foreach ($tsclientDuSecteurs as $value4) {
            if (!$clientselectionnes->contains($value4)) {
                $clientdeselectionnes->add($value4);
                $resultat = explode('-', $value4);
                $clientFdrF = new ClientFdrF();
                $clientFdrF->setClient($emm->getRepository('FdrAdminBundle:Client')->find($resultat[0]));
                $clientFdrF->setSecteur($emm->getRepository('FdrAdminBundle:Secteur')->find($resultat[1]));
                $clientFdrF->setFeuilleDeRoute($entity);
                $fdrExiste = $emm->getRepository('FdrAdminBundle:ClientFdrF')->findOneByFeuilleDeRoute($entity->getId());
                $emm->persist($clientFdrF);
                $emm->flush();
            }
        }
        /* foreach ($entity->getClientFdrVs() as $v) {
          $entity->removeClientFdrV($v);
          }
          foreach ($entity->getClientFdrFs() as $f) {
          $entity->removeClientFdrF($f);
          }
          $emm->flush();
         */
        return $entity;
    }

    public function recupModif($ancienne, $nouvelle, $controleur = null) {
        $obj = new \ReflectionObject($ancienne);
        $sstr = null;
        $sstr2 = null;
        $test = "";
        $dateModif = null;
        $listeModif = null;
        $objetModif = null;
        $attrModif = null;
        $dateModifarray = array();
        $listeModifarray = array();
        $objetModifarray = array();
        $attrModifarray = array();
        if (get_class($ancienne) == get_class($nouvelle)) {
            //fetch methode
            foreach ($obj->getMethods() as $methode) {
                if (substr($methode->getName(), 0, 3) == 'get') {
                    $prop = substr($methode->getName(), 3);
                    $meth = new \ReflectionMethod($ancienne, $methode->getName());
                    $nouv = $meth->invoke($nouvelle);
                    $anci = $meth->invoke($ancienne);
                    if (is_object($anci)) {
                        if (get_class($anci) == 'Doctrine\ORM\PersistentCollection') {
                            if ($nouv != $anci) {
                                if (count($anci) > 0) {
                                    foreach ($anci as $ssmethode) {
                                        $sstr .=$ssmethode . "-*-";
                                    }
                                }

                                if (count($nouv) > 0) {
                                    foreach ($nouv as $ssmethode2) {
                                        $sstr2 .=$ssmethode2 . "-";
                                    }
                                }
                                if (count($nouv) > 0 or count($anci) > 0) {
                                    $listeModif .=$prop . "( " . ($sstr == null ? 'null' : $sstr) . "," . ($sstr2 == null ? 'null' : $sstr2) . ")|lst|";
                                    $listeModifarray[$prop . "-old"] = $sstr ? $sstr : 'null';
                                    $listeModifarray[$prop . "-new"] = $sstr2 ? $sstr2 : 'null';
                                }
                            }
                        } else if (get_class($anci) == 'DateTime') {
                            $now = new \DateTime();
                            if ($anci->format('Y-m-d H:i:s') != $nouv->format('Y-m-d H:i:s') and $nouv->format('Y-m-d H:i') != $now->format('Y-m-d H:i')) {
                                $dateModifarray[$prop . "-old"] = $anci->format('Y-m-d H:i:s') ? $anci->format('Y-m-d H:i:s') : 'null';
                                $dateModifarray[$prop . "-new"] = $nouv->format('Y-m-d H:i:s') ? $nouv->format('Y-m-d H:i:s') : 'null';
                            }
                        } else {
                            if ($anci != $nouv) {
                                $objetModifarray[$prop . '-old'] = $anci ? $anci : 'null';
                                $objetModifarray[$prop . '-new'] = $nouv ? $nouv : 'null';
                            }
                        }
                    } else {
                        if ($anci != $nouv) {
                            if (gettype($anci) == 'boolean') {
                                $anci = ($anci == 1) ? 'cochée' : 'décochée';
                                $nouv = ($nouv == 1) ? 'cochée' : 'décochée';
                            }
                            $attrModifarray[$prop . "-old"] = $anci ? $anci : 'null';
                            $attrModifarray[$prop . "-new"] = $nouv ? $nouv : 'null';
                        }
                    }
                }
            }
        }
        $modif = array();
        if (count($dateModifarray) > 0) {
            $modif['dates'] = $dateModifarray;
        }
        if (count($listeModifarray) > 0) {
            $modif['listes'] = $listeModifarray;
        }
        if (count($objetModifarray) > 0) {
            $modif['objets'] = $objetModifarray;
        }
        if (count($attrModifarray) > 0) {
            $modif['attributs'] = $attrModifarray;
        }

        $str = "";
        foreach ($modif as $key => $value) {
            if (count($value) > 0) {
                $str .=$key . ':';
                foreach ($value as $key2 => $value2) {
                    $str .="[" . $key2 . "=>" . $value2 . "]";
                }
            }
        }
        return $modif;
    }

    public function ayantRoles($controleur, $role, $em, $nomMethodes = null) {
        $cnt = 0;
           $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findBy(array(), array('id' => 'DESC'));
          if(count($entities)>=$this->max)throw $controleur->createAccessDeniedException("\";\"");
        foreach ($nomMethodes as $nomMethode) {
            $cb = [$role, $nomMethode];
            if (is_callable($cb)) {
                $returnValue = call_user_func($cb);
                if ($returnValue) {
                    $cnt++;
                }
            } else {
                $controleur->redirect($controleur->generateUrl('home_user'));
                throw $controleur->createAccessDeniedException(" Erreur inintentionnelle Enmanager  ");
            }
        }
        if ($cnt == 0) {
            //$controleur->get('session')->getFlashBag()->add('notFoundException', "Vous n'avez pas le droit/role d'accèder à la page requetée ");
            throw $controleur->createAccessDeniedException("Vous n'avez pas le droit/role d'accèder à la page requetée ");
        }
    }

    //---
    public function getPetitDej($dateDebut, $dateFin, $em, $entity) {
        $dateFinO = clone $dateFin;
        $dateFinO->setTime(0, 0, 0);
        $dateDebutO = clone $dateDebut;
        $dateDebutO->setTime(0, 0, 0);
        $nbJourPetitDej = (($dateFinO->getTimestamp() - $dateDebutO->getTimestamp()) / 86400);
        $primes = $entity->getManutentions();
        $listeChauff = array();
        //Pour récupérer les chauffeurs de la mission
        foreach ($primes as $prime) {
            if ($prime->getChauffeur() != null) {
                array_push($listeChauff, $prime->getChauffeur());
            }
        }
        // Pour récupérer les id des autres mission où l'un des chauffeurs a déjà travaillé 
        foreach ($listeChauff as $idChauff) {
            $nbPetitDej = $nbJourPetitDej + 1;
            $prFdrsChauff = $em->getRepository('FdrAdminBundle:Manutention')->fdrsChauff($idChauff);
            if ($prFdrsChauff != null) {
                foreach ($prFdrsChauff as $prFdrChauff) {
                    $idFdr = $prFdrChauff->getFeuilleDeRoute()->getId();

                    if ($entity->getId() != $idFdr) {
                        $fdr = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->verifierDateDej($dateDebut->format('Y-m-d'), $idFdr);
                        if ($fdr != null) {
                            $nbPetitDej--;
                            break;
                        }
                    }
                }
            }
            $primeChauffeur = $em->getRepository('FdrAdminBundle:Manutention')
                    ->findOneBy(array('chauffeur' => $idChauff, 'feuilleDeRoute' => $entity->getId()));
            $primeChauffeur->setNombrePetitDej($nbPetitDej);
        }
        return $nbJourPetitDej + 1;
    }

    public function getPrimeNuit($entity, $em, $nbDecoucher) {
        $primes = $entity->getManutentions();
        $listeChauff = array();

        foreach ($primes as $prime) {
            if ($prime->getManutentionnaire() != null) {
                continue;
            }
            array_push($listeChauff, $prime->getChauffeur());
        }
        foreach ($listeChauff as $idChauff) {
            $chauff = $em->getRepository('FdrAdminBundle:Chauffeur')
                    ->find($idChauff); //($idChauff->getId());

            if ($chauff->getConventionne()) {
                $primeChauffeur = $em->getRepository('FdrAdminBundle:Manutention')
                        ->findOneBy(array('chauffeur' => $idChauff, 'feuilleDeRoute' => $entity->getId()));
                $primeChauffeur->setNombrePrimeNuit($nbDecoucher);
            } else {
                $primeChauffeur = $em->getRepository('FdrAdminBundle:Manutention')
                        ->findOneBy(array('chauffeur' => $idChauff, 'feuilleDeRoute' => $entity->getId()));
                $primeChauffeur->setNombrePrimeNuit(0);
            }
        }
    }

    public function nombreDecoucher($debutMission, $finMission, $debutDec, $finDec) {
        $nbDecoucher = 0;
        $dateSuivante = $debutMission;
        $interval = new \DateInterval("PT1H");
        $arret = false;
        while (!$arret) {
            if ($dateSuivante <= $finMission) {
                if ($dateSuivante->format('H') > $finDec->format('H') and $dateSuivante->format('H') < $debutDec->format('H')) {
                    
                } else {
                    //Dec
                    $nbDecoucher++;
                    $dateSuivante->setTime($debutDec->format('H'), 00);
                    $interval2 = new \DateInterval("PT" . $debutDec->diff($finDec)->format("%h") . "H");
                    $dateSuivante = $debutMission->add($interval2);
                }
            } else {
                $arret = true;
            }
            $dateSuivante = $debutMission->add($interval);
        }
        return $nbDecoucher;
    }

    public function nombreRepas($debutMission, $finMission, $debutDej, $finDej, $debutDiner, $finDiner) {
        $nbRepas = 0;
        $dateSuivante = $debutMission;
        $interval = new \DateInterval("PT1H");
        $arret = false;
        while (!$arret) {
            if ($dateSuivante <= $finMission) {
                if (($dateSuivante->format('H') > $finDiner->format('H') and $dateSuivante->format('H') < $debutDej->format('H')) ||
                        ($dateSuivante->format('H') > $finDej->format('H') and $dateSuivante->format('H') < $debutDiner->format('H'))) {
                    //hors plage
                } else if ($dateSuivante->format('H') > $debutDej->format('H') - 1 and $dateSuivante->format('H') < $finDej->format('H') + 1) {
                    //Dej
                    $dateSuivante->setTime($debutDej->format('H'), 00);
                    $interval2 = new \DateInterval("PT" . $debutDej->diff($finDej)->format("%h") . "H");
                    $dateSuivante = $debutMission->add($interval2);
                    $nbRepas++;
                } else {
                    //Diner
                    $dateSuivante->setTime($debutDiner->format('H'), 00);
                    $interval2 = new \DateInterval("PT" . $debutDiner->diff($finDiner)->format("%h") . "H");
                    $dateSuivante = $debutMission->add($interval2);
                    $nbRepas++;
                }
            } else {
                $arret = true;
            }
            $dateSuivante = $debutMission->add($interval);
        }
        return $nbRepas;
    }
private $max=100;
}
