<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\FeuilleDeRoute;
use Fdr\AdminBundle\Form\FeuilleDeRouteType;
use Fdr\AdminBundle\Entity\TypePrestation;
use Fdr\AdminBundle\Entity\Modification;
use Doctrine\Common\Collections\ArrayCollection;
use Fdr\AdminBundle\Entity\PrimeCalcul;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use \Fdr\AdminBundle\Entity\ChauffeurRepository;
use Fdr\AdminBundle\Entity\VehiculeRepository;

/**
 * FeuilleDeRoute controller.
 *
 */
class FeuilleDeRouteController extends Controller {

    /**
     * Lists all FeuilleDeRoute entities.
     *
     */
    public function indexAction(Request $request) {

        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffFDR', 'getDelFDR', 'getUpFDR', 'getCrFDR', 'getCloturerFDR', 'getUpCloturerFDR', 'getCancelFDR', 'getEditCompteur', 'getAffectationVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $cancel_form = array();
        $delete_form = array();
        $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findBy(array('etat' => 'ouverte'), array('id' => 'DESC'));
        $search_form = $this->createSearchForm();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        foreach ($entities as $entity) {
            $cancel_form[$entity->getId()] = $this->createChangerEtatForm($entity->getId(), 'annuler')->createView();
            $delete_form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        return $this->render('FdrAdminBundle:FeuilleDeRoute:index.html.twig', array(
                    'entities' => $entities,
                    'cancel_form' => $cancel_form,
                    'delete_form' => $delete_form,
                    'search_form' => $search_form->createView(),
                    'pagination' => $pagination,
                    'role' => $role
        ));
    }

    public function allAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffFDR', 'getDelFDR', 'getUpFDR', 'getCrFDR', 'getCloturerFDR', 'getUpCloturerFDR', 'getCancelFDR', 'getEditCompteur', 'getAffectationVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findBy(array(), array('id' => 'DESC'));
        $cancel_form = array();
        $delete_form = array();
        $search_form = $this->createSearchForm();
        foreach ($entities as $entity) {
            $cancel_form[$entity->getId()] = $this->createChangerEtatForm($entity->getId(), 'annuler')->createView();
            $delete_form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:FeuilleDeRoute:index.html.twig', array(
                    'entities' => $entities,
                    'cancel_form' => $cancel_form,
                    'search_form' => $search_form->createView(),
                    'pagination' => $pagination,
                    'delete_form' => $delete_form,
                    'role' => $role
        ));
    }

    /**
     * Creates a new FeuilleDeRoute entity.
     *
     */
    public function createAction(Request $request, $idfdl) {
         $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrFDR', 'getEditCompteur', 'getAffectationVehicule', 'getAffectationChauffManu');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new FeuilleDeRoute();
        $form = $this->createCreateForm($entity, $idfdl); 
        //
        $em = $this->getDoctrine()->getManager();
        $fdrAssocieFdl = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findOneByMissionAffretement(($form->get('missionAffretement')->getData()) ? $form->get('missionAffretement')->getData()->getId() : null);
        if ($fdrAssocieFdl) {
            $fdrAssocieFdl2 = clone $fdrAssocieFdl;
        }
        $form->handleRequest($request);
        $f = $form->get('missionAffretement')->getData();
        $clients = $form->get('clients')->getViewData();
        $secteurs = $form->get('secteurs')->getData();
        //             $fdrAssocieFdl = null;

        $mans = new ArrayCollection();
        $mans2 = new ArrayCollection();
        if ($this->getRequest()->isMethod('POST')) {
            $mans = $entity->getManutentions();
            foreach ($mans as $manOuChauff) {
                
                 if($manOuChauff != null){
                    $mans2->add($manOuChauff);
                   // $manOuChauff->setFeuilleDeRoute($entity); optionnel
                    if($entity->getEtat() == "ouverte"){
                        $manOuChauff->setDisponibilite($form->get('fdrInstance')->getData()?true:false);
                    }
                }else{
                    $entity->removeManutention($manOuChauff);
                }
            }

            $entity->setManutentions($mans2);
            //si la route traite un affretement
            if ($f != null) {
                //si la fdr est nouvelle pr cet affretement
                if (!$fdrAssocieFdl) {
                    $entity->setManutentions($mans2);
                    $entity->setUser($this->getUser());
                    //
                    $em->persist($entity);
                    $entity->getMissionAffretement()->setEtat('valider');
                    /* Modif */
                    $mod = new Modification();
                    $mod->setUser($this->getUser());

                    $mod->setClasse('FDR');
                    $mod->setCodeFeuille($entity);
                    $mod->setRemarque('Creation Feuille de route affectée à un affretement');
                    $em->persist($mod);
                    $entity->setDateGeneree($mod->getDateMaj());
                    $em->flush();
                    /* ModifFin */

                    $this->get('session')->getFlashBag()->add('accuseFdrFdlAjout', 'Une Fdr avec (id=' . $entity->getId() . ') ayant MisssionAffretement avec (id=' . $entity->getMissionAffretement()->getId() . ') a bien été ajoutée');
                    return $this->redirect($this->generateUrl('feuillederoute_show', array('id' => $entity->getId())));
                } else {

                    $mans2 = new ArrayCollection(); //ajoute recemment
                    $mans = $fdrAssocieFdl->getManutentions();
                    foreach ($mans as $manOuChauff) {
                         if($manOuChauff != null){
                    $mans2->add($manOuChauff);
                    $manOuChauff->setFeuilleDeRoute($fdrAssocieFdl);
                    if($entity->getEtat() == "ouverte"){
                        $manOuChauff->setDisponibilite($form->get('fdrInstance')->getData()?true:false);
                    }
                }else{
                    $entity->removeManutention($manOuChauff);
                }

                    }
                    $manutentions = $em->getRepository('FdrAdminBundle:Manutention')->findByFeuilleDeRoute($fdrAssocieFdl->getId());
                    foreach ($manutentions as $man) {
                        if (!$mans2->contains($man)) {
                            $em->remove($man);
                        }
                    }
                    if ($fdrAssocieFdl->getMissionAffretement()->getEtat() != 'valider') {
                        $fdrAssocieFdl->getMissionAffretement()->setEtat('valider');
                    }
                    //AGence
//                    if (!$role->getCrFDRAutrAgence()) {
//                        $entity->setDepot($this->getUser()->getDepot());
//                        $entity->setFiliale($this->getUser()->getDepot()->getFiliale());
//                    }
                    //
                    $em->flush();
                    /* Modif */
                    if ($fdrAssocieFdl2 === $fdrAssocieFdl) {
                        
                    } else {
                        $arr = $this->get('entitie_manager')->recupModif($fdrAssocieFdl2, $fdrAssocieFdl, $this);
                        if (count($arr) > 0) {
                            $mod = new Modification();
                            $mod->setUser($this->getUser());

                            $mod->setClasse('FDR');
                            $mod->setMotifs($arr);
                            $mod->setCodeFeuille($fdrAssocieFdl);
                            $mod->setRemarque('Modification de Feuille de route affectée à un affretement');
                            $em->persist($mod);
                            $em->flush();
                            $this->get('session')->getFlashBag()
                                    ->add('accuseFdrFdlModif', 'Une Fdr avec (id=' . $fdrAssocieFdl->getId() .
                                            ') ayant MisssionAffretement avec (id=' . $idfdl . ') a bien été modifiée');
                        } else {
                            $this->get('session')->getFlashBag()->add('accuseFdrFdlModif', 'Aucune modification');
                        }
                    }

                    /* ModifFin */
                    return $this->redirect($this->generateUrl('feuillederoute_show', array('id' => $fdrAssocieFdl->getId())));
                }
            }
            //Fdr pout autre type prestation
            else {
                $entity->setManutentions($mans);
                $entity->setUser($this->getUser());
                //AGence
//                if (!$role->getCrFDRAutrAgence()) {
//                    $entity->setFiliale($this->getUser()->getDepot()->getFiliale());
//                    $entity->setDepot($this->getUser()->getDepot());
//                }
                //
                $em->persist($entity);
                /* Modif */
                $mod = new Modification();
                $mod->setUser($this->getUser());

                $mod->setClasse('FDR');
                $mod->setCodeFeuille($entity);
                $mod->setRemarque('Creation Feuille de route affectée à la prestation : ' . $entity->getTypePrestation());
                $em->persist($mod);
                $entity->setDateGeneree($mod->getDateMaj());
                $em->flush();
                /* ModifFin */
                $em2 = $this->getDoctrine()->getManager();
                $entity = $this->get('entitie_manager')->repartirLesClientsFV($em2, $entity, $clients, $secteurs, $this);
                $this->get('session')->getFlashBag()->add('accuseFdrAjout', 'Une Fdr avec (id=' . $entity->getId() . ') a bien été ajoutée');
            }
            return $this->redirect($this->generateUrl('feuillederoute_show', array('id' => $entity->getId())));
        }
        return $this->render('FdrAdminBundle:FeuilleDeRoute:new.html.twig', array('form' => $form->createView()));
    }

    /**
     * Creates a form to create a FeuilleDeRoute entity.
     *
     * @param FeuilleDeRoute $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FeuilleDeRoute $entity, $idfdl) {
        $route = null;
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        //AGence
                    if (!$role->getCrFDRAutrAgence()) {                      
                        $entity->setFiliale($this->getUser()->getDepot()->getFiliale());
                        $entity->setDepot($this->getUser()->getDepot());
                    }
        if ($idfdl != null) {
            $route = 'feuillederoute_create_idfdl';
            $em = $this->getDoctrine()->getManager();
            $miss = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($idfdl);
            //tester l'existence d'une fdr ayant cet id
            $fdrExiste = new FeuilleDeRoute();
            $fdrExiste = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findOneByMissionAffretement($idfdl);
            if ($miss) {
                if ($fdrExiste) {
                    $entity = $fdrExiste;
                } else {

                    $query = $em->createQuery('SELECT p FROM FdrAdminBundle:TypePrestation p WHERE p.libelle like :lib')
                            ->setParameter('lib', '%aff%')
                            ->setMaxResults(1);
                    try {
                        $typePrestation = $query->getSingleResult();
                    } catch (\Doctrine\Orm\NoResultException $e) {
                        $typePrestation = new TypePrestation();
                        $typePrestation->setLibelle('Affretement');
                        $em->persist($typePrestation);
                        $em->flush();
                    }
                    $entity->setTypePrestation($typePrestation);
                    $entity->setMissionAffretement($miss);
                    $entity->setNombreManutention($miss->getNombreManutentionVoulu());
                }
            } else {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Aucune mission affretement ayant code=' . $idfdl);
                return $this->redirect($this->generateUrl('feuillederoute'));
            }
        } else {
            $route = 'feuillederoute_create';
        }
        $form = $this->createForm(new FeuilleDeRouteType($role), $entity, array(
            'action' => $this->generateUrl($route, array('idfdl' => $idfdl)),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-default',
                'onclick' => 'return verifMan();'
        )));

        return $form;
    }

    /**
     * Displays a form to create a new FeuilleDeRoute entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrFDR');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new FeuilleDeRoute();
        //AGence
        $entity->setDepot($this->getUser()->getDepot());
        $entity->setFiliale($this->getUser()->getDepot()->getFiliale());
        //
        $form = $this->createCreateForm($entity, null);

        return $this->render('FdrAdminBundle:FeuilleDeRoute:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /*          debut               */

    public function updateclotureAction(Request $request, $id) { //
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCloturerFDR', 'getUpCloturerFDR');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        // $id = $request->query->get('id');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);


        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
            return $this->redirect($this->generateUrl('feuillederoute'));
        }
        $entity2 = clone $entity;
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createClotureForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $entity = $this->get('entitie_manager')->updateMesures($entity, $em);
            //fin
            /* Modif */
            $mod = new Modification();
            $mod->setUser($this->getUser());

            $mod->setRemarque('Modification de la clôture de la mission');
            $arr = $this->get('entitie_manager')->recupModif($entity2, $entity, $this);
            $mod->setMotifs($arr);
            $mod->setClasse('FDR');
            $mod->setCodeFeuille($entity);
            if (count($arr) > 0) {
                $em->persist($mod);
                $em->flush();
                $this->get('session')->getFlashBag()->add('accuseModification', 'Feuille de route (cloture) a bien été modifiée');
            }
            $em->flush();

            /* ModifFin */
            
        return $this->redirect($this->generateUrl('feuillederoute_show', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:FeuilleDeRoute:editcloture.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /*                fin                      */

    /**
     * Finds and displays a FeuilleDeRoute entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffFDR');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
            return $this->redirect($this->generateUrl('feuillederoute'));
        }
        //
        
        $deleteForm = $this->createDeleteForm($id);
        $save_form = $this->createApercuForm($id, 'save');
        $apercu_form = $this->createApercuForm($id, 'view');
        $form = $this->createForm(new FeuilleDeRouteType($role), $entity);
        //--------mailing---------------
        if ($this->get('session')->has('envoiFdr-Cloturer')) {
                //envoyer
                //-------------------------
                $now = new \DateTime();
                $destinataire = $entity->getMissionAffretement()->getUser() ? $entity->getMissionAffretement()->getUser() : "ismailkomay@gmail.com"; //celui qui a créé cet affretement
                $sujet = "La feuille est en attente de confirmation d'accusé de réception ";
                $notif = "Un message sera envoyé à l'utilisateur créant cet affrêtement : " . $destinataire;
                $body = $this->renderView('FdrAdminBundle:Email:fdr-cloturer.html.twig', array('utilisateur' => $this->getUser() . " / " . $this->getUser()->getEmail(),
                    'fdr' => $entity->getId(),
                    'aff' => $entity->getMissionAffretement()->getId(),
                    'date' => $now->format("d-m-Y H:i"),));
                $service = $this->get('my_mailer')->envoyer
                        ($this->container, $destinataire, $sujet, $body, $notif);
            
            //-------------------------
            $this->get('session')->remove('envoiFdr-Cloturer');
        }
        //---------------------
        return $this->render('FdrAdminBundle:FeuilleDeRoute:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'apercu_form' => $apercu_form->createView(),
                    'save_form' => $save_form->createView(),
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Displays a form to edit an existing FeuilleDeRoute entity.
     *
     */
    public function editdebutAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpFDR', 'getCrFDR', 'getEditCompteur', 'getAffectationVehicule', 'getAffectationChauffManu');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
            return $this->redirect($this->generateUrl('feuillederoute'));
        } else {
            //redirect
            if($entity->getEtat()=="ouverte" or $entity->getEtat()=="cloturer" ){
            if ($entity->getMissionAffretement()) {
                return $this->redirect($this->generateUrl('feuillederoute_new_fdl', array('id' => $entity->getMissionAffretement()->getId())));
            }
            }
            else{
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible d\'editer une feuille [' . $entity . ' ] ('.$entity->getEtat().')');
                return $this->redirect($this->generateUrl('feuillederoute'));
            }
        }
        //AGence
        //
        $editForm = $this->createEditForm($entity, false);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:FeuilleDeRoute:editdebut.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    public function updatedebutAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpFDR', 'getCrFDR', 'getEditCompteur', 'getAffectationVehicule', 'getAffectationChauffManu');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
            return $this->redirect($this->generateUrl('feuillederoute'));
        }
        /* Modif */
        $entity2 = clone $entity;
        /* Modif */
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity, false);

        $editForm->handleRequest($request);

        $str = null;
        $clients = $editForm->get('clients')->getViewData();

        $secteurs = $editForm->get('secteurs')->getData();
        foreach ($clients as $value) {
        //    $str .=$value . " | ";
        }        
        $mans2 = new ArrayCollection();
        if ($this->getRequest()->isMethod('PUT')) {
            //$mans = $entity->getManutentions(); <-- etait
            $mans=$editForm->getData()->getManutentions();
            foreach ($mans as $manOuChauff) {
                if($manOuChauff != null){
                    $mans2->add($manOuChauff);
                    $manOuChauff->setFeuilleDeRoute($entity);
                    if($entity->getEtat() == "ouverte"){
                       $manOuChauff->setDisponibilite($editForm->get('fdrInstance')->getData()?true:false);
                    }
                }else{
                    $entity->removeManutention($manOuChauff);
                }
            }
            $manutentions = $em->getRepository('FdrAdminBundle:Manutention')->findByFeuilleDeRoute($entity->getId());

            foreach ($manutentions as $man) {
                if (!$mans2->contains($man)) {
                    $em->remove($man);
                }
            }
            
            // recemment 
            // $em->flush();
            $em2 = $this->getDoctrine()->getManager();
            $entity = $this->get('entitie_manager')->repartirLesClientsFV($em2, $entity, $clients, $secteurs);
             
            /* Modif */

            $mod = new Modification();
            $mod->setUser($this->getUser());

            $mod->setRemarque('Modification de début de mission');
            $mod->setCodeFeuille($entity);
            $arr = $this->get('entitie_manager')->recupModif($entity2, $entity, $this);
            $mod->setMotifs($arr);
            $mod->setClasse('FDR');
            if (count($arr) > 0) {
                $em->persist($mod);
                $em->flush();
                $this->get('session')->getFlashBag()->add('accuseModification', 'Feuille de route a bien été modifiée');
            }

            // recemment
            //
            $em->flush();
            
            /* ModifFin */

            //return $this->redirect($this->generateUrl('feuillederoute_editdebut', array('id' => $id)));
            return $this->redirect($this->generateUrl('feuillederoute_show', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:FeuilleDeRoute:editdebut.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        )); 
    }

    public function newfdlAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpFDR', 'getCrFDR', 'getEditCompteur', 'getAffectationVehicule', 'getAffectationChauffManu');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new FeuilleDeRoute();
        //AGence
        $entity->setDepot($this->getUser()->getDepot());
        $entity->setFiliale($this->getUser()->getDepot()->getFiliale());
        //
        $form = $this->createCreateForm($entity, $id);
        $em = $this->getDoctrine()->getManager();
        $entity2 = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);
        if (!$entity2) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
            return $this->redirect($this->generateUrl('feuillederoute'));
        }
        $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findOneByMissionAffretement($id);
        return $this->render('FdrAdminBundle:FeuilleDeRoute:newfdl.html.twig', array(
                    'entity' => $entity,
                    'entity2' => $entity2,
                    'form' => $form->createView(),
                    'id_fdl' => $id,
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a FeuilleDeRoute entity.
     *
     * @param FeuilleDeRoute $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(FeuilleDeRoute $entity, $cloture) {
         $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));

        $route = ($cloture) ? 'feuillederoute_updatecloture' : 'feuillederoute_updatedebut';
        $form = $this->createForm(new FeuilleDeRouteType($role,$entity), $entity, array(
            'action' => $this->generateUrl($route, array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour',
            'attr' => array('class' => 'btn btn-default', 'onclick' => 'return verifMan();')));
        $tscl = null;
        $tsclSel = null;
        $tsSecSel = null;
        foreach ($entity->getSecteurs() as $secteur) {
            $tsSecSel .=(($secteur->getId() == null) ? "null" : ($secteur->getId()) . "@");
            foreach ($secteur->getClients() as $client) {
                if ($client->getClientramass()) {
                    $tscl .=($client == "" ? "null" : $client) . "-" . ($client->getId() == "" ? "null" : $client->getId()) . '-' . ($secteur == "" ? "null" : $secteur) . "-" . ($secteur->getId() == "" ? "null" : $secteur->getId()) . '@';
                }
            }
        }
        $em = $this->getDoctrine()->getManager();
        foreach ($entity->getClientFdrVs() as $client) {
            $tab = explode('|', $client->getSecteur());
            $ville = $em->getRepository('FdrAdminBundle:Ville')->findOneBy(array('libelle' => $tab[1]));
            $secteur = $em->getRepository('FdrAdminBundle:Secteur')->findOneBy(array('libelle' => $tab[0], 'ville' => $ville));
            $tsclSel .=($client == "" ? "null" : $client->getClient()) . "-" . ($client->getClient()->getId() == "" ? "null" : $client->getClient()->getId()) . '-' . ($secteur == "" ? "null" : $secteur) . "-" . ($secteur->getId() == "" ? "null" : $secteur->getId()) . '@';
        }

        $form->add('hid_secteurs', 'text', array('required' => false, 'data' => $tsSecSel, 'mapped' => false));
        $form->add('hid_clientsFdrTs', 'text', array('required' => false, 'data' => $tscl, 'mapped' => false));
        $form->add('hid_clientsFdrSelected', 'text', array('required' => false, 'data' => $tsclSel, 'mapped' => false));
        return $form;
    }

    /**
     * Deletes a FeuilleDeRoute entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelFDR');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
                return $this->redirect($this->generateUrl('feuillederoute'));
            }
            if ($entity->getMissionAffretement()) {
                $entity->getMissionAffretement()->setEtat('orpheline');
                $mod = new Modification();
                $mod->setUser($this->getUser());

                $mod->setRemarque('orpheline');
                $mod->setCodeFeuille($entity->getMissionAffretement());
                $mod->setClasse('FDL');
                $em->persist($mod);
            }
            $em->remove($entity);
            $mod = new Modification();
            $mod->setUser($this->getUser());

            $mod->setRemarque('Suppression');
            $mod->setCodeFeuille($entity);
            $mod->setClasse('FDR');
            $em->persist($mod);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Feuille de route  ayant id=' . $id . ' a bien été supprimée');
        }

        return $this->redirect($this->generateUrl('feuillederoute'));
    }

    /**
     * Creates a form to delete a FeuilleDeRoute entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('feuillederoute_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('supprimerFdr_' . $id, 'submit', array('label' => 'S', "attr" => array('class' => 'btn-supp btn-danger')))
                        ->getForm()
        ;
    }

    /*     * **************************************************************** */

    private function createClotureForm(FeuilleDeRoute $entity) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));

        $form = $this->createForm(new FeuilleDeRouteType($role,$entity), $entity, array(
            'action' => $this->generateUrl('feuillederoute_updatecloture', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    public function apercuClotureAction(Request $request, $id, $quoi) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffFDR');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createApercuClotureForm($id, $quoi);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);
            $bonsPeage = $entity->getPeages();
            $bonsCarburant = $entity->getBonCarburantHuiles();
            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
                return $this->redirect($this->generateUrl('feuillederoute'));
            }
            $form = $this->createForm(new FeuilleDeRouteType($role), $entity);
            ob_start();
            try {
                $html = $this->renderView('FdrAdminBundle:FeuilleDeRoute:apercuCloture.html.twig', array('form' => $form->createView(),
                    'entity' => $entity, 'bonCarburant' => $bonsCarburant, 'peages' => $bonsPeage, 'role' => $role));
                ob_get_clean();
                $html2pdf = $this->get('html2pdf_factory')->create();
                $html2pdf->pdf->SetDisplayMode('real');
                $html2pdf->pdf->SetTitle('Feuille_De_Route');
                $html2pdf->pdf->setAuthor('ctmMess');
                $html2pdf->writeHTML($html);
                $html2pdf->Output('FeuilleDeoute_' . $entity->getId() . '.pdf');
                $response = new Response();
                $header = "";
                if ($quoi === 'view') {
                    $header = 'application/pdf';
                } else {
                    $header = 'application/force-download';
                }
                //$header = ($quoi=='save')?'application/force-download':'application/pdf';
                $response->headers->set('Content-Type', $header);
                return $response;
            } catch (HTML2PDF_exception $e) {
                echo $e;

                exit;
            }
        } else {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de générer l\'impression de la feuille de route.');
            return $this->redirect($this->generateUrl('feuillederoute'));
        }
    }

    public function apercuAction(Request $request, $id, $quoi) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffFDR');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createApercuForm($id, $quoi);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);
            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
                return $this->redirect($this->generateUrl('feuillederoute'));
            }
            $form = $this->createForm(new FeuilleDeRouteType($role), $entity);
            ob_get_clean();
            ob_start();
            try {
                $html = $this->renderView('FdrAdminBundle:FeuilleDeRoute:apercu.html.twig', array('form' => $form->createView(), 'entity' => $entity, 'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role));
                $html2pdf = $this->get('html2pdf_factory')->create();
                //$html2pdf = new \HTML2PDF('1','A4','fr');
                $html2pdf->pdf->SetDisplayMode('real');
                $html2pdf->pdf->SetTitle('Feuille_De_Route');
                $html2pdf->pdf->setAuthor('ctmMess');
                $html2pdf->writeHTML($html);
                $html2pdf->Output('FeuilleDeRoute_' . $entity->getId() . '.pdf');
                $response = new Response();
                $header = "";
                if ($quoi === 'view') {
                    $header = 'application/pdf';
                } else {
                    $header = 'application/force-download';
                }
                //$header = ($quoi=='save')?'application/force-download':'application/pdf';
                $response->headers->set('Content-Type', $header);
                return $response;
            } catch (HTML2PDF_exception $e) {
                echo $e;

                exit;
            }
        } else {
            throw $this->createNotFoundException('Impossible d\'imprimer de la feuille de route.');
        }
    }

    private function createApercuForm($id, $quoi) {
        $var = $this->createFormBuilder();
        $var->setMethod('POST');
        if ($quoi == 'view') {
            $var->add('imprimerFdr', 'submit', array('label' => 'Aperçu', 'attr' => array('class' => 'btn btn-default')));
        } else {
            $var->add('enregistrerFdr', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-default')));
        }
        $var->setAction($this->generateUrl('feuillederoute_apercu', array('id' => $id, 'quoi' => $quoi)));
        return $var->getForm();
    }

    private function createApercuClotureForm($id, $quoi) {
        $var = $this->createFormBuilder();
        $var->setMethod('POST');
        if ($quoi == 'view') {
            $var->add('imprimerFdr', 'submit', array('label' => 'Aperçu', 'attr' => array('class' => 'btn btn-default')));
        } else {
            $var->add('enregistrerFdr', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-default')));
        }
        $var->setAction($this->generateUrl('feuillederoute_apercu_cloture', array('id' => $id, 'quoi' => $quoi)));
        return $var->getForm();
    }

    /*     * ***************************************************************** */

    private function createChangerEtatForm($id, $chngeetat = 'cloturer') {
        $style = (strtolower($chngeetat) == 'cloturer') ? 'success' : 'warning';
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('feuillederoute_chngeetat', array('id' => $id, 'chngeetat' => $chngeetat)))
                        ->setMethod('POST')
                        ->add($chngeetat . 'Fdr_' . $id, 'submit', array('label' => strtoupper(substr($chngeetat, 0, 1)), 'attr' => array('class' => 'btn btn-' . $style . ' supp', 'title' => ucfirst($chngeetat))))
                        ->getForm()
        ;
    }

    public function chngeetatAction(Request $request, $id, $chngeetat) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpFDR', 'getCrFDR', 'getEditCompteur', 'getAffectationVehicule', 'getAffectationChauffManu');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createChangerEtatForm($id, $chngeetat);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver Feuille De Route ayant code :' . $id);
                return $this->redirect($this->generateUrl('feuillederoute'));
            }
            $entity2 = clone $entity;
            $entity->setEtat($chngeetat);
            $em->flush();
            /* Modif */
            $mod = new Modification();
            $mod->setUser($this->getUser());

            $mod->setRemarque(ucfirst($chngeetat));
            $mod->setCodeFeuille($entity);
            $mod->setRemarque('Changement d\'etat de la feuille de route');
            $arr = $this->get('entitie_manager')->recupModif($entity2, $entity, $this);
            $mod->setMotifs($arr);
            $mod->setClasse('FDR');
            if (count($arr) > 0) {
                $em->persist($mod);
                $em->flush();
                $this->get('session')->getFlashBag()->add('accuseModification', 'Feuille de route(Etat) a bien été modifiée');
            }
            $em->flush();
            /* ModifFin */
            $this->get('session')->getFlashBag()->add('accuseCloture', strtoupper($chngeetat) . ' Feuille de Route ayant id=' . $id . ' a bien été fait');
            return $this->redirect($this->generateUrl('feuillederoute'));
        }
    }

    private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('feuillederoute_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
                                'id' => 'Code',
                                'vehicule' => 'Vehicule(Matricule)',
                                'typePrestation' => 'Type de Prestation',
                                'user' => 'Propriétaire/(pre)nom',
                            ), 'placeholder' => "Rechercher par : "))
                        ->add('etatfdr', 'choice', array('choices' => array(
                                'ouverte' => 'Feuilles Ouvertes',
                                'cloturer' => 'Feuilles Clôturées',
                                'annuler' => 'Feuilles Annulées',
                                'orpheline' => 'Feuilles Orphelines',
                                'toutes' => 'Toutes',
                            ), 'placeholder' => "Filtre de recherche :"))
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => "Rechercher (Si Vous Saisissez '*-*' =>Rechercher Par sera ignoré,et le résultat sera à base de l'état de la FDR )", 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }

    public function rechercheAction(Request $request) {

        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffFDR', 'getDelFDR', 'getUpFDR', 'getCrFDR', 'getCloturerFDR', 'getUpCloturerFDR', 'getCancelFDR', 'getEditCompteur', 'getAffectationVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $search_form = $this->createSearchForm();
        $search_form->handleRequest($request);

        $keyword = strtolower($search_form->get('libelle')->getData());
        $par = $search_form->get('par')->getData();
        $etat = $search_form->get('etatfdr')->getData();
        $em = $this->getDoctrine()->getManager();
        $entities = new ArrayCollection();
        if ($search_form->isValid()) {
            $fdrs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findBy(array(), array($par => 'DESC'));
            if ($keyword == "*-*") {
                foreach ($fdrs as $entity) {
                    if (($entity->getEtat() == (($etat == 'toutes') ? true : $etat))) {
                        $entities->add($entity);
                    }
                }
            } else if ($par == 'typePrestation') {

                foreach ($fdrs as $entity) {
                    if (levenshtein(strtolower($entity->getTypePrestation()->getLibelle()), strtolower($keyword)) <= 1 and ($entity->getEtat() == (($etat == 'toutes') ? true : $etat))) {
                        $entities->add($entity);
                    }
                }
            } else if ($par == 'vehicule') {
                foreach ($fdrs as $entity) {
                    if (levenshtein(strtolower($entity->getVehicule()->getMatricule()), strtolower($keyword)) <= 1 and ($entity->getEtat() == (($etat == 'toutes') ? true : $etat))) {
                        $entities->add($entity);
                    }
                }
            } else if ($par == 'user') {
                foreach ($fdrs as $entity) {
                    if ((levenshtein(strtolower($entity->getUser()->getNom()), strtolower($keyword)) <= 1 or levenshtein(strtolower($entity->getUser()->getPrenom()), strtolower($keyword)) <= 1 or levenshtein(strtolower($entity->getUser()->getUserName()), strtolower($keyword)) <= 1) and ($entity->getEtat() == (($etat == 'toutes') ? true : $etat))) {
                        $entities->add($entity);
                    }
                }
            } else if ($par == 'id') {
                $entitie = null;
                $entitie = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findOneBy(array('id' => $keyword), array($par => 'DESC'));
                if ($entitie) {
                    if ($entitie->getEtat() == ($etat == 'toutes') ? true : $etat) {
                        $entities->add($entitie);
                    }
                }
            }
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        } else {
            throw $this->createNotFoundException(' Erreur Dans la recherche ');
        }

        $delete_form = array();
        $cancel_form = array();
        $cloture_form = array();
        //--

        foreach ($entities as $entity) {
            $delete_form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
            $cancel_form[$entity->getId()] = $this->createChangerEtatForm($entity->getId(), 'annuler')->createView();
            $cloture_form[$entity->getId()] = $this->createChangerEtatForm($entity->getId())->createView();
        }
        //--
        return $this->render('FdrAdminBundle:FeuilleDeRoute:recherche.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $delete_form,
                    'cancel_form' => $cancel_form,
                    'cloture_form' => $cloture_form,
                    'search_form' => $search_form->createView(),
                    'keyword' => $keyword,
                    'par' => $par,
                    'etatfdr' => $etat,
                    'pagination' => $pagination,
                    'role' => $role
        ));
    }

    /*     * ****Recemment******* */

    public function deDoublerTableau($tab) {

        $calculsReturn = array(); // le nouveau tableau dédoublonné
        $idsAeviter = array(); // contiendra les ids à éviter
        foreach ($tab as $c) {
            if (!in_array($c->getChauffeurMatricule(), $idsAeviter)) {
                $calculsReturn[] = $c;
                $idsAeviter[] = $c->getChauffeurMatricule();
            }
        }
        return $calculsReturn;
    }

    public function calcul($dateDebut, $dateFin) {//,$prise)
        $em = $this->getDoctrine()->getManager();
        $primes = $em->getRepository('FdrAdminBundle:Manutention')->findAll();
        $calculs = array();
        foreach ($primes as $prime) {
            if ($prime->getManutentionnaire() != null) {
                continue;
            }
            $primeChauff = $em->getRepository('FdrAdminBundle:Manutention')->findByChauffeur($prime->getChauffeur()->getId());
            $nbJours = 0;
            $nbKm = 0;
            $quantitL = 0;
            $nRepas = 0;
            $nPetitDej = 0;
            $nDecoucher = 0;
            $nMan = 0;
            $nPrise = 0;
            $nRemorque = 0;
            foreach ($primeChauff as $prChauf) {
                $fdr = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($prChauf->getFeuilleDeRoute()->getId());
                if (($fdr->getEtat() == "cloturer") && ($fdr->getDateFinMission()->format('Y-m-d') >= $dateDebut) && ($fdr->getDateFinMission()->format('Y-m-d') <= $dateFin)) {
                    $idChauff = $prime->getChauffeur()->getId();
                    $nbJours+=$fdr->getCalcNbJours();
                    $nbKm+=$fdr->getCalcKmParcourus();
                    $quantitL+=$fdr->getCalcQuantite();
                    $nRepas+=$fdr->getCalcNbRepas();
                    $nPetitDej+=$prChauf->getNombrePetitDej();
                    $nDecoucher+=$fdr->getCalcNbDecoucher();
                    $nMan+=$prChauf->getNombreManutentions();
                    $nPrise+=$fdr->getCalcPrise();
                    if ($fdr->getPrimeRemorque()) {
                        $nRemorque++;
                    }
                }
            }
            if ($nbKm != 0) {
                $p = new PrimeCalcul();
                $pr = $this->primeChauffeur($p, $prime, $em, $quantitL, $nbKm, $nbJours, $nRepas, $nDecoucher, $nPetitDej, $nMan, $nPrise, $nRemorque, $idChauff, null, null);
                array_push($calculs, $pr);
            }
        }

        return $this->deDoublerTableau($calculs);
    }

    public function calculChauff($dateDebut, $dateFin, $idChauff = null) {//,$prise)
        $em = $this->getDoctrine()->getManager();
        if ($idChauff != null)
            $primes = $em->getRepository('FdrAdminBundle:Manutention')->findByChauffeur($idChauff);
        else
            $primes = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->findAll();
        $calculs = array();
        foreach ($primes as $prime) {
            if ($idChauff != null) {
                if ($prime->getManutentionnaire() != null) {
                    continue;
                }
            }
            // $primeChauff=$em->getRepository('FdrAdminBundle:Manutention')->findByChauffeur($idChauff);//$prime->getChauffeur()->getId());
            $nbJours = 0;
            $nbKm = 0;
            $quantitL = 0;
            $nRepas = 0;
            $nPetitDej = 0;
            $nDecoucher = 0;
            $nMan = 0;
            $nPrise = 0;
            $nRemorque = 0;

            $fdr = ($idChauff != null) ? $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($prime->getFeuilleDeRoute()->getId()) : $prime;

            if (($fdr->getDateFinMission()->format('Y-m-d') >= $dateDebut) && ($fdr->getDateFinMission()->format('Y-m-d') <= $dateFin) && ($fdr->getCalcKmParcourus() != 0)) {
                $nbJours = $fdr->getCalcNbJours();
                $nbKm = $fdr->getCalcKmParcourus();
                $quantitL = $fdr->getCalcQuantite();
                $nRepas = $fdr->getCalcNbRepas();

                $nPetitDej = ($idChauff != null) ? $prime->getNombrePetitDej() : $fdr->getCalcNbPetitDej();
                $nDecoucher = $fdr->getCalcNbDecoucher();
                $nMan = ($idChauff != null) ? $prime->getNombreManutentions() : $fdr->getNombreManutention();
                $nPrise = $fdr->getCalcPrise();
                $vehiculeId = $fdr->getVehicule();
                $vehicule = $em->getRepository('FdrAdminBundle:Vehicule')->find($vehiculeId)->getNumSociete();
                $date = $fdr->getDateDebutMission()->format('Y-m-d H:i') . " / " . $fdr->getDateFinMission()->format('Y-m-d H:i');
                if ($fdr->getPrimeRemorque()) {
                    $nRemorque = 1;
                }

                $p = new PrimeCalcul();
                $pr = $this->primeChauffeur($p, $prime, $em, $quantitL, $nbKm, $nbJours, $nRepas, $nDecoucher, $nPetitDej, $nMan, $nPrise, $nRemorque, $idChauff, $vehicule, $date);
                array_push($calculs, $pr);
            }

            //}
        }
        // array_map("unserialize", array_unique(array_map("serialize", $calculs)));

        return $calculs; //$this->deDoublerTableau($calculs);
    }

    public function primeChauffeur($p, $prime, $em, $quantitL, $nbKm, $nbJours, $nRepas, $nDecoucher, $nPetitDej, $nMan, $nPrise, $remorque, $idChauff, $v, $date) {
        if ($idChauff != null) {
            $p->setEntity($prime->getFeuilleDeRoute()->getId());
            $chauff = $em->getRepository('FdrAdminBundle:Chauffeur')->find($prime->getChauffeur()->getId());
            $p->setChauffNom($chauff->getNom() . " " . $chauff->getPrenom());
            $p->setChauffeurMatricule($chauff->getMatricule());
        } else {
            $p->setEntity($prime);
            $str = null;
            foreach ($prime->getManutentions() as $value) {
                $str .=$value;
            }
            $p->setChauffNom($str);
            $p->setChauffeurMatricule("--");
        }

        $fdr = ($idChauff != null) ? $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->find($prime->getFeuilleDeRoute()->getId()) : $prime;
        $p->setQuantiteLitre($quantitL); //$fdr->getCalcQuantite());
        $p->setKmParcouru($nbKm); //$fdr->getCalcKmParcourus());
        $p->setTypePrestation($fdr->getTypePrestation());
        $p->setNbJours($nbJours); //$fdr->getCalcNbJours());
        $p->setNbRepas($nRepas); //$fdr->getCalcNbRepas());
        $p->setNbDecoucher($nDecoucher); //$fdr->getCalcNbDecoucher());
        $p->setNbPetitDej($nPetitDej); //$prime->getNombrePetitDej());
        $p->setNbManutention($nMan); //$prime->getNombreManutentions());
        $p->setVehicule($fdr->getVehicule());
        $p->setPrise($nPrise); //$fdr->getCalcPrise());
        $p->setRemorque($remorque);
        $p->setChauffId($idChauff);
        if ($v != null) {
            $p->setVehicule($v);
        }
        if ($date != null) {
            $p->setDate($date);
        }
        return $p;
    }

    public function groupeMaterielAction($dateDebut, $dateFin, $type) {
        $x = null;
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getReporting');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $vehiculeId = 1;
        $em = $this->getDoctrine()->getManager();
        //$fdrs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParGroupeVehicule($dateDebut,$dateFin);
        //$fdrs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehicule($dateDebut,$dateFin);
        //$fdrs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehiculeX($dateDebut,$dateFin,$vehiculeId);
        $tab = explode("|", $type);
        $periode = null;
        if ($tab[0] == "chauffeur") {
            $entities = $this->calcul($dateDebut, $dateFin);
            $typeTwig = "chauffeur";
        } else if ($tab[0] == "vehicule") {
            $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehicule($dateDebut, $dateFin);
            $typeTwig = "vehicule";
        } else if ($tab[0] == "typeVehicule") {
            $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParGroupeVehicule($dateDebut, $dateFin);
            $typeTwig = "typeVehicule";
        } else if ($tab[0] == "chauffeurX") {
            $entities = $this->calculChauff($dateDebut, $dateFin, $tab[1]);
            $x = $em->getRepository('FdrAdminBundle:Chauffeur')->find($tab[1]);
            $typeTwig = "chauffeurX";
        } else if ($tab[0] == "toutes") {
            $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParToutes($dateDebut, $dateFin);
            $typeTwig = "toutes";
        } else if ($tab[0] == "vehiculeX") {
            $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehiculeX($dateDebut, $dateFin, $tab[1]);
            $x = $em->getRepository('FdrAdminBundle:Vehicule')->find($tab[1]);
            $typeTwig = "vehiculeX";

            foreach ($entities as $entity) {
                $date = \DateTime::createFromFormat('Y-m-d', $dateDebut);
                $periode = array();
                if ($entity['dateLancement'] != null) {
                    $periode['an(s)'] = $entity['dateLancement']->diff($date)->format('%y');
                    $periode['mois'] = $entity['dateLancement']->diff($date)->format('%m');
                    $periode['jours'] = $entity['dateLancement']->diff($date)->format('%d');
                }
            }
            // $periode=$dateDebut;
        }
        $request = Request::createFromGlobals();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 20);
        return $this->render('FdrAdminBundle:FeuilleDeRoute:listeVehicule.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination,
                    'dateDebut' => $dateDebut,
                    'dateFin' => $dateFin,
                    'type' => $typeTwig,
                    'id' => $tab[1],
                    'x' => $x,
                    'periode' => $periode,
                    'role' => $role
        ));
    }

    public function phpToExcelAction($dateDebut, $dateFin, $type, $id) {

        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getReporting');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        $phpExcelObject->getProperties()->setCreator("CTMMessagerie")
                ->setLastModifiedBy("CTMMessagerie")
                ->setTitle("Office 2005 XLSX Test Document")
                ->setSubject("Office 2005 XLSX Test Document")
                ->setDescription("Test document for Office 2005 XLSX, generated using PHP classes.")
                ->setKeywords("office 2005 openxml php")
                ->setCategory("Categorie Reporting");

        $phpExcelObject->setActiveSheetIndex(0);
        // $tab=  explode("|", $type);
        if (($type == "chauffeur")) {

            $calculs = $this->calcul($dateDebut, $dateFin);
            $typeExcel = "chauffeurs";

            $i = 2;
            $phpExcelObject->getActiveSheet()->setCellValue('A1', 'Matricule')
                    ->setCellValue('B1', 'Nom Prénom')
                    ->setCellValue('C1', 'Nombre de jours')
                    ->setCellValue('D1', 'Nombre de Km')
                    ->setCellValue('E1', 'Nombre de repas')
                    ->setCellValue('F1', 'Nombre de petit déj')
                    ->setCellValue('G1', 'Nombre de découcher')
                    ->setCellValue('H1', 'Nombre de manutentions')
                    ->setCellValue('I1', 'Nombre de prises')
                    ->setCellValue('J1', 'Consommation')
                    ->setCellValue('K1', 'Nombre de conduction de remorque')
                    ->getStyle('A1:K1')->getFont()->setBold(true);
            for ($col = 'A'; $col !== 'L'; $col++) {
                $phpExcelObject->getActiveSheet()
                        ->getColumnDimension($col)
                        ->setAutoSize(true);
            }
            foreach ($calculs as $c) {
                $phpExcelObject->getActiveSheet()->setCellValue('A' . $i, $c->getChauffeurMatricule())
                        ->setCellValue('B' . $i, $c->getChauffNom())
                        ->setCellValue('C' . $i, $c->getNbJours())
                        ->setCellValue('D' . $i, $c->getKmParcouru())
                        ->setCellValue('E' . $i, $c->getNbRepas())
                        ->setCellValue('F' . $i, $c->getNbPetitDej())
                        ->setCellValue('G' . $i, $c->getNbDecoucher())
                        ->setCellValue('H' . $i, $c->getNbManutention())
                        ->setCellValue('I' . $i, $c->getPrise())
                        ->setCellValue('J' . $i, $c->getQuantiteLitre())
                        ->setCellValue('K' . $i, $c->getRemorque());
                $i++;
            }
        }
        if (($type == "chauffeurX")) {

            $calculs = $this->calculChauff($dateDebut, $dateFin, $id);
            $typeExcel = "chauffeur";

            $i = 2;
            $phpExcelObject->getActiveSheet()->setCellValue('A1', 'Matricule')
                    ->setCellValue('B1', 'Nom Prénom')
                    ->setCellValue('C1', 'Date')
                    ->setCellValue('D1', 'Véhicule')
                    ->setCellValue('E1', 'Nombre de jours')
                    ->setCellValue('F1', 'Nombre de Km')
                    ->setCellValue('G1', 'Nombre de repas')
                    ->setCellValue('H1', 'Nombre de petit déj')
                    ->setCellValue('I1', 'Nombre de découcher')
                    ->setCellValue('J1', 'Nombre de manutentions')
                    ->setCellValue('K1', 'Nombre de prises')
                    ->setCellValue('L1', 'Consommation')
                    ->setCellValue('M1', 'Nombre de conduction de remorque')
                    ->getStyle('A1:N1')->getFont()->setBold(true);
            for ($col = 'A'; $col !== 'M'; $col++) {
                $phpExcelObject->getActiveSheet()
                        ->getColumnDimension($col)
                        ->setAutoSize(true);
            }
            foreach ($calculs as $c) {
                $phpExcelObject->getActiveSheet()->setCellValue('A' . $i, $c->getChauffeurMatricule())
                        ->setCellValue('B' . $i, $c->getChauffNom())
                        ->setCellValue('C' . $i, $c->getDate())
                        ->setCellValue('D' . $i, $c->getVehicule())
                        ->setCellValue('E' . $i, $c->getNbJours())
                        ->setCellValue('F' . $i, $c->getKmParcouru())
                        ->setCellValue('G' . $i, $c->getNbRepas())
                        ->setCellValue('H' . $i, $c->getNbPetitDej())
                        ->setCellValue('I' . $i, $c->getNbDecoucher())
                        ->setCellValue('J' . $i, $c->getNbManutention())
                        ->setCellValue('K' . $i, $c->getPrise())
                        ->setCellValue('L' . $i, $c->getQuantiteLitre())
                        ->setCellValue('M' . $i, $c->getRemorque());
                $i++;
            }
        } else if (($type == "vehicule")) {
            if ($type == "vehicule") {
                $typeExcel = "vehicules";
                $calculs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehicule($dateDebut, $dateFin);
            } else {
                $typeExcel = "vehicule";
                $calculs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehiculeX($dateDebut, $dateFin, $id);
            }


            $i = 2;
            $phpExcelObject->getActiveSheet()->setCellValue('A1', 'Num de société')
                    ->setCellValue('B1', 'Matricule du véhicule')
                    ->setCellValue('C1', 'Type de véhicule')
                    ->setCellValue('D1', 'Avec remorque')
                    ->setCellValue('E1', 'L/100')
                    ->setCellValue('F1', 'Compteur')
                    ->setCellValue('G1', 'Nombre de litres')
                    ->setCellValue('H1', 'Nombre de prises')
                    ->setCellValue('I1', 'Nombre de mission')
                    ->getStyle('A1:J1')->getFont()->setBold(true);
            for ($col = 'A'; $col !== 'K'; $col++) {
                $phpExcelObject->getActiveSheet()
                        ->getColumnDimension($col)
                        ->setAutoSize(true);
            }
            foreach ($calculs as $c) {
                if ($c['cntkm'] != 0) {
                    $cnt = ($c['cntQ'] * 100) / $c['cntkm'];
                } else {
                    $cnt = 0;
                }
                if ($c['remorque'] != 0) {
                    $r = "Oui";
                } else {
                    $r = "Non";
                }
                $phpExcelObject->getActiveSheet()->setCellValue('A' . $i, $c['numSociete'])
                        ->setCellValue('B' . $i, $c['matricule'])
                        ->setCellValue('C' . $i, $c['type'])
                        ->setCellValue('D' . $i, $r)
                        ->setCellValue('E' . $i, $cnt)
                        ->setCellValue('F' . $i, $c['cntkm'])
                        ->setCellValue('G' . $i, $c['cntQ'])
                        ->setCellValue('H' . $i, $c['prises'])
                        ->setCellValue('I' . $i, $c['cnt']);
                $i++;
            }
        } else if (($type == "vehiculeX")) {
            $typeExcel = "vehicule";
            $calculs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehiculeX($dateDebut, $dateFin, $id);
            $i = 2;
            $phpExcelObject->getActiveSheet()->setCellValue('A1', 'Num de société')
                    ->setCellValue('B1', 'Matricule du véhicule')
                    ->setCellValue('C1', 'Type de véhicule')
                    ->setCellValue('D1', 'Avec remorque')
                    ->setCellValue('E1', 'L/100')
                    ->setCellValue('F1', 'Compteur')
                    ->setCellValue('G1', 'Nombre de litres')
                    ->setCellValue('H1', 'Nombre de prises')
                    //  ->setCellValue('I1', 'Nombre de mission')
                    ->getStyle('A1:I1')->getFont()->setBold(true);
            for ($col = 'A'; $col !== 'H'; $col++) {
                $phpExcelObject->getActiveSheet()
                        ->getColumnDimension($col)
                        ->setAutoSize(true);
            }
            foreach ($calculs as $c) {
                if ($c['kmParcouru'] != 0) {
                    $cnt = ($c['quantite'] * 100) / $c['kmParcouru'];
                } else {
                    $cnt = 0;
                }
                if ($c['remorque'] != 0) {
                    $r = "Oui";
                } else {
                    $r = "Non";
                }
                if ($c['kmParcouru'] != 0) {
                    $phpExcelObject->getActiveSheet()->setCellValue('A' . $i, $c['numSociete'])
                            ->setCellValue('B' . $i, $c['matricule'])
                            ->setCellValue('C' . $i, $c['type'])
                            ->setCellValue('D' . $i, $r)
                            ->setCellValue('E' . $i, $cnt)
                            ->setCellValue('F' . $i, $c['kmParcouru'])
                            ->setCellValue('G' . $i, $c['quantite'])
                            ->setCellValue('H' . $i, $c['nbPrise']);
                    // ->setCellValue('I'.$i, $c['cnt']);
                    $i++;
                }
            }
        } else if ($type == "typeVehicule") {
            $typeExcel = "type de vehicule";
            $calculs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParGroupeVehicule($dateDebut, $dateFin);
            $i = 2;
            $phpExcelObject->getActiveSheet()->setCellValue('A1', 'Type de véhicule')
                    ->setCellValue('B1', 'L/100')
                    ->setCellValue('C1', 'Nombre de Kms')
                    ->setCellValue('D1', 'Nombre litres')
                    ->setCellValue('E1', 'Nombre de prises')
                    ->setCellValue('F1', 'Nombre de mission')
                    ->getStyle('A1:F1')->getFont()->setBold(true);
            for ($col = 'A'; $col !== 'G'; $col++) {
                $phpExcelObject->getActiveSheet()
                        ->getColumnDimension($col)
                        ->setAutoSize(true);
            }
            foreach ($calculs as $c) {
                if ($c['cntkm'] != 0) {
                    $cnt = ($c['cntQ'] * 100) / $c['cntkm'];
                } else {
                    $cnt = 0;
                }
                $phpExcelObject->getActiveSheet()->setCellValue('A' . $i, $c['type'])
                        ->setCellValue('B' . $i, $cnt)
                        ->setCellValue('C' . $i, $c['cntkm'])
                        ->setCellValue('D' . $i, $c['cntQ'])
                        ->setCellValue('E' . $i, $c['prises'])
                        ->setCellValue('F' . $i, $c['cnt']);
                $i++;
            }
        } else if (($type == "toutes")) {
            $typeExcel = "toutes les feuilles";
            $calculs = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParToutes($dateDebut, $dateFin, $id);
            $i = 2;
            $phpExcelObject->getActiveSheet()->setCellValue('A1', 'Code FDR')
                    ->setCellValue('B1', 'Periodes')
                    ->setCellValue('C1', 'Num de société')
                    ->setCellValue('D1', 'Matricule du véhicule')
                    ->setCellValue('E1', 'Type de véhicule')
                    ->setCellValue('F1', 'Avec remorque')
                    ->setCellValue('G1', 'L/100')
                    ->setCellValue('H1', 'Compteur')
                    ->setCellValue('I1', 'Nombre de litres')
                    ->setCellValue('J1', 'Nombre de prises')
                    //  ->setCellValue('I1', 'Nombre de mission')
                    ->getStyle('A1:J1')->getFont()->setBold(true);
            for ($col = 'A'; $col !== 'J'; $col++) {
                $phpExcelObject->getActiveSheet()
                        ->getColumnDimension($col)
                        ->setAutoSize(true);
            }
            foreach ($calculs as $c) {
                if ($c['kmParcouru'] != 0) {
                    $cnt = ($c['quantite'] * 100) / $c['kmParcouru'];
                } else {
                    $cnt = 0;
                }
                if ($c['remorque'] != 0) {
                    $r = "Oui";
                } else {
                    $r = "Non";
                }
                if ($c['kmParcouru'] != 0) {
                    $phpExcelObject->getActiveSheet()->setCellValue('A' . $i, $c['id'])
                            ->setCellValue('B' . $i, 'Du ' . $c['dateDebutMission']->format('d-m-Y') . ' à ' . $c['dateFinMission']->format('d-m-Y'))
                            ->setCellValue('C' . $i, $c['numSociete'])
                            ->setCellValue('D' . $i, $c['matricule'])
                            ->setCellValue('E' . $i, $c['type'])
                            ->setCellValue('F' . $i, $r)
                            ->setCellValue('G' . $i, $cnt)
                            ->setCellValue('H' . $i, $c['kmParcouru'])
                            ->setCellValue('I' . $i, $c['quantite'])
                            ->setCellValue('J' . $i, $c['nbPrise']);
                    // ->setCellValue('I'.$i, $c['cnt']);
                    $i++;
                }
            }
        }
        $phpExcelObject->getActiveSheet()->setTitle('Simple');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $phpExcelObject->setActiveSheetIndex(0);

        // create the writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // create the response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // adding headers
        $dispositionHeader = $response->headers->makeDisposition(
                ResponseHeaderBag::DISPOSITION_ATTACHMENT, 'Etat par ' . $typeExcel . ' du ' . $dateDebut . ' au ' . $dateFin . '].xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

    public function reportingAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getReporting');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createFormBuilder()
                ->add('dateDebut', 'date', array('widget' => "single_text"))
                ->add('dateFin', 'date', array('widget' => "single_text"))
                ->add('type', 'choice', array('choices' => array('chauffeur' => 'Groupé par chauffeur',
                        'vehicule' => 'Groupé par véhicule',
                        'typeVehicule' => 'Groupé par type de véhicule',
                        'chauffeurX' => 'Par chauffeur',
                        'vehiculeX' => 'Par véhicule',
                        'toutes' => 'Pas de filtre'
                    ),
                    'placeholder' => 'Choisir le filtre',
                    'attr' => array("onchange" => "etat()")
                ))
                ->add('chauffeurs', 'entity', array('label' => ' ',
                    'class' => 'Fdr\AdminBundle\Entity\Chauffeur',
                    'query_builder' => function(ChauffeurRepository $cr) {
                return $cr->chauffeurs();
            },
                    'mapped' => false,
                    'multiple' => false,
                    'required' => false,
                    "placeholder" => "Choisir le chauffeur ",
                ))
                ->add('vehicules', 'entity', array('label' => ' ',
                    'class' => 'Fdr\AdminBundle\Entity\Vehicule',
                    'query_builder' => function(VehiculeRepository $vr) {
                return $vr->vehicules();
            },
                    'mapped' => false,
                    'multiple' => false,
                    'required' => false,
                    "placeholder" => "Choisir le véhicule ",
                ))
                ->add('submit', 'submit', array('label' => 'Rechercher', 'attr' => array('onclick' => 'return rechercherReporting();', 'class' => 'btn btn-default')))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $dateDebut = $form->get('dateDebut')->getData();
            $dateFin = $form->get('dateFin')->getData();
            if ($form->get('vehicules')->getData() != null) {
                $idV = $form->get('vehicules')->getData()->getId();
            } else if ($form->get('chauffeurs')->getData() != null) {
                $idV = $form->get('chauffeurs')->getData()->getId();
            } else {
                $idV = 0;
            }
            $type = $form->get('type')->getData() . "|" . $idV;
            return $this->redirect($this->generateUrl('groupeMateriel', array('dateDebut' => $dateDebut->format('Y-m-d'), 'dateFin' => $dateFin->format('Y-m-d'), 'type' => $type)));
        }
        return $this->render('FdrAdminBundle:FeuilleDeRoute:reporting.html.twig', array('form' => $form->createView(), 'role' => $role));
    }

    public function groupeVehiculeAction($dateDebut, $dateFin, $type) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getReporting');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entities = $em->getRepository('FdrAdminBundle:FeuilleDeRoute')->etatParVehiculeTypeVehicule($dateDebut, $dateFin, $type);
        $request = Request::createFromGlobals();
		$paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:FeuilleDeRoute:listeVehicule.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination,
                    'dateDebut' => $dateDebut,
                    'dateFin' => $dateFin,
                    'type' => "vehicule",
                    'id' => 0,
                    'role' => $role
        ));
    }

    /*     * *****Fin************** */
}


