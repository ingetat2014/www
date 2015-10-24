<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\MissionAffretement;
use Fdr\AdminBundle\Entity\Modification;
use Fdr\AdminBundle\Form\MissionAffretementType;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * MissionAffretement controller.
 * 
 */
class MissionAffretementController extends Controller {

    public function indexAction(Request $request, $etat) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffClientCompeFDL', 'getUpClientCompeFDL', 'getDelClientCompeFDL', 'getCrClientCompeFDL', 'getAffClientNnCompeFDL', 'getUpClientNnCompeFDL', 'getDelClientNnCompeFDL', 'getCrClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        //--
        $em = $this->getDoctrine()->getManager();
        $sortPar = $this->get('request')->query->get('sort', 'id');
        $dir = $this->get('request')->query->get('direction', 'desc');
        $filtre_form = $this->createFiltreForm();
        $filtre_form->handleRequest($request);
        $affichertous = ($filtre_form->get('affichertous')->getData() == null) ? 'default' : $filtre_form->get('affichertous')->getData();
         
        if ((strtolower($dir) == 'asc' or strtolower($dir) == 'desc') and (strtolower($sortPar) == 'id')) {
            if ($affichertous != 'toutes' && $affichertous != 'default') {
                $query = $em->createQuery('SELECT p FROM FdrAdminBundle:MissionAffretement p WHERE p.etat= :etat ORDER BY p.' . $sortPar . ' ' . $dir)->setParameter('etat', $affichertous);
            }
            elseif($affichertous == 'default')
            {
                $etat = "p.etat = 'fdr-cloturer' or p.etat = 'ouverte' ";
                $query = $em->createQuery('SELECT p FROM FdrAdminBundle:MissionAffretement p WHERE  '.$etat.' ORDER BY p.' . $sortPar . ' ' . $dir);
            }
            else {
                $query = $em->createQuery('SELECT p FROM FdrAdminBundle:MissionAffretement p ORDER BY p.' . $sortPar . ' ' . $dir);
            }
        } else {
            $query = $em->createQuery('SELECT p FROM FdrAdminBundle:MissionAffretement p WHERE p.etat= :etat ORDER BY p.id DESC')->setParameter('etat', $affichertous);
        }
        $entities = $query->getResult();
        $delete_form = array();
        $cancel_form = array();
        $cloture_form = array();
        //--
        $search_form = $this->createSearchForm();
        //
        foreach ($entities as $entity) {
            $delete_form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
            $cancel_form[$entity->getId()] = $this->createChangerEtatForm($entity->getId(), 'annuler')->createView();
            $cloture_form[$entity->getId()] = $this->createChangerEtatForm($entity->getId())->createView();
        }
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);

        return $this->render('FdrAdminBundle:MissionAffretement:index.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $delete_form,
                    'cancel_form' => $cancel_form,
                    'cloture_form' => $cloture_form,
                    'search_form' => $search_form->createView(),
                    'filtre_form' => $filtre_form->createView(),
                    'pagination' => $pagination,
                    'dir' => $dir,
                    'sortpar' => $sortPar,
                    'affichertous' => $affichertous,
                    'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role
        ));
    }

    public function rechercheAction(Request $request) {
        //--
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffClientCompeFDL', 'getUpClientCompeFDL', 'getDelClientCompeFDL', 'getCrClientCompeFDL', 'getAffClientNnCompeFDL', 'getUpClientNnCompeFDL', 'getDelClientNnCompeFDL', 'getCrClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        //--
        $search_form = $this->createSearchForm();
        $search_form->handleRequest($request);

        $keyword = strtolower($search_form->get('libelle')->getData());
        $par = $search_form->get('par')->getData();
        $etat = $search_form->get('etatfdl')->getData();
        //$toutes = $search_form->get('affichertous')->getData();
        $em = $this->getDoctrine()->getManager();
        $entities = new ArrayCollection();
        if ($search_form->isValid()) {

            if ($etat != 'toutes') {
                if ($par != 'user') {
                $query = $em->createQuery('SELECT p FROM FdrAdminBundle:MissionAffretement p WHERE p.' . $par . ' like :keyword and p.etat= :etat ORDER BY p.' . $par . ' ASC')
                        ->setParameters(array('keyword' => strtolower('%' . $keyword . '%'), 'etat' => $etat));
                }
                else{
                    $fdls = $em->getRepository('FdrAdminBundle:MissionAffretement')->findBy(array(), array($par => 'DESC'));
                    
                    foreach ($fdls as $entity) {
                    if ((levenshtein(strtolower($entity->getUser()->getNom()), strtolower($keyword)) <= 1 or levenshtein(strtolower($entity->getUser()->getPrenom()), strtolower($keyword)) <= 1 or levenshtein(strtolower($entity->getUser()->getUserName()), strtolower($keyword)) <= 1) and ($entity->getEtat() == (($etat == 'toutes') ? true : $etat))) {
                        $entities->add($entity);
                    }
                }
                }
                
            } else {
                if ($par != 'user') {
                $query = $em->createQuery('SELECT p FROM FdrAdminBundle:MissionAffretement p WHERE p.' . $par . ' like :keyword ORDER BY p.' . $par . ' ASC')
                        ->setParameters(array('keyword' => strtolower('%' . $keyword . '%')));
                }
                else{
                    $fdls = $em->getRepository('FdrAdminBundle:MissionAffretement')->findBy(array(), array($par => 'DESC'));
                    
                    foreach ($fdls as $entity) {
                    if ((levenshtein(strtolower($entity->getUser()->getNom()), strtolower($keyword)) <= 1 or levenshtein(strtolower($entity->getUser()->getPrenom()), strtolower($keyword)) <= 1 or levenshtein(strtolower($entity->getUser()->getUserName()), strtolower($keyword)) <= 1) and ($entity->getEtat() == (($etat == 'toutes') ? true : $etat))) {
                        $entities->add($entity);
                    }
                }
                }
            }
            $entities = ($par != 'user')?$query->getResult():$entities;
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
        return $this->render('FdrAdminBundle:MissionAffretement:recherche.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $delete_form,
                    'cancel_form' => $cancel_form,
                    'cloture_form' => $cloture_form,
                    'search_form' => $search_form->createView(),
                    'keyword' => $keyword,
                    'par' => $par,
                    'etatfdl' => $etat,
                    'pagination' => $pagination,
                    'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role
        ));
    }

    /**
     * Creates a new MissionAffretement entity.
     *
     */
    public function createAction(Request $request) {
        //--
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrClientCompeFDL', 'getCrClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        //--
        $entity = new MissionAffretement();

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUser($this->getUser());
            $entity->setNombreManutentionVoulu($entity->getNombreManutentionVoulu() ? $entity->getNombreManutentionVoulu() : 0);
            if($entity->getClient()->getEncompte()){$entity->setMontantregle (true);}
            
            /* Modif */
            $mod = new Modification();
            $mod->setUser($this->getUser());
            
            $mod->setClasse('FDL');
            $mod->setCodeFeuille($entity);
            $mod->setRemarque('Creation Affretement');
            $em->persist($mod);
            //recemment
            $entity->setDateGeneree($mod->getDateMaj());
            $em->persist($entity);
            $em->flush();
            /* ModifFin */
            $this->get('session')->getFlashBag()->add('accuseAjout', 'MissionAffretement ayant id=' . $entity->getId() . ' a bien été ajoutée');
            return $this->redirect($this->generateUrl('missionaffretement_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:MissionAffretement:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role
        ));
    }

    /**
     * Creates a form to create a MissionAffretement entity.
     *
     * @param MissionAffretement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MissionAffretement $entity) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));

        $form = $this->createForm(new MissionAffretementType($role), $entity, array(
            'action' => $this->generateUrl('missionaffretement_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset4', 'onclick' => 'return verifDateRamLiv();')));
        return $form;
    }

    /**
     * Displays a form to create a new MissionAffretement entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrClientCompeFDL', 'getCrClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new MissionAffretement();
        $form = $this->createCreateForm($entity);
        return $this->render('FdrAdminBundle:MissionAffretement:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role
        ));
    }

    /**
     * Finds and displays a MissionAffretement entity.
     *
     */
    public function showAction($id) {
        //--
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffClientCompeFDL', 'getAffClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        //--
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);
        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver MissionAffretement ayant code=' . $id);
            return $this->redirect($this->generateUrl('missionaffretement'));
        }

        $deleteForm = $this->createDeleteForm($id);
        //---       
        $save_form = $this->createApercuForm($id, 'save');
        $apercu_form = $this->createApercuForm($id, 'view');
        $form = $this->createForm(new MissionAffretementType($role), $entity);
        return $this->render('FdrAdminBundle:MissionAffretement:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'form' => $form->createView(),
                    'apercu_form' => $apercu_form->createView(),
                    'save_form' => $save_form->createView(),
                    'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role
        ));
    }

    //---

    /**
     * Creates a form to apercu a MissionAffretement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createApercuForm($id, $quoi) {
        $var = $this->createFormBuilder();
        $var->setMethod('POST');
        if ($quoi == 'view') {
            $var->add('imprimerFdl', 'submit', array('label' => 'Aperçu', 'attr' => array('class' => 'btn btn-default')));
        } else {
            $var->add('enregistrerFdl', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn btn-default')));
        }
        $var->setAction($this->generateUrl('missionaffretement_apercu', array('id' => $id, 'quoi' => $quoi)));
        return $var->getForm();
    }

    public function apercuAction(Request $request, $id, $quoi) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffClientCompeFDL', 'getUpClientCompeFDL', 'getDelClientCompeFDL', 'getCrClientCompeFDL', 'getAffClientNnCompeFDL', 'getUpClientNnCompeFDL', 'getDelClientNnCompeFDL', 'getCrClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createApercuForm($id, $quoi);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver MissionAffretement ayant code :' . $id);
                return $this->redirect($this->generateUrl('missionaffretement'));
            }
            $form = $this->createForm(new MissionAffretementType($role), $entity);
            ob_start();
            try {
                $html = $this->renderView('FdrAdminBundle:MissionAffretement:apercu.html.twig', array('form' => $form->createView(), 'entity' => $entity, 'user' => ($this->getUser()) ? $this->getUser() : null, 'role' => $role));
                $html2pdf = $this->get('html2pdf_factory')->create();
                //$html2pdf = new \HTML2PDF('P','A4','fr');
                $html2pdf->pdf->SetDisplayMode('real');
                $html2pdf->pdf->SetTitle('Feuille_De_Mission');
                $html2pdf->pdf->setAuthor('komay');
                $html2pdf->writeHTML($html);
                $html2pdf->Output('FeuilleDeMission_' . $entity->getId() . '.pdf');
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
            throw $this->createNotFoundException('Impossible de générer l\'impression de la feuille de MissionAffretement.');
        }
    }

    //---

    /**
     * Displays a form to edit an existing MissionAffretement entity.
     */
    public function editAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpClientCompeFDL', 'getUpClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient','getUpCloturerFDRAffr','getCloturerFDRAffr');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver MissionAffretement ayant code :' . $id);
            return $this->redirect($this->generateUrl('missionaffretement'));
        }
        if($entity->getEtat()==="cloturer" and !$role->getUpCloturerFDRAffr())
        {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Vous ne pouvez pas modifier une feuille affrêtement cloturée :');
            return $this->redirect($this->generateUrl('missionaffretement_show', array('id' => $id)));
        }
        else if($entity->getEtat()!="ouverte" and $entity->getEtat()!="cloturer" ){
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible d\'editer  une feuille [' . $entity . ' ] ('.$entity->getEtat().')');
                return $this->redirect($this->generateUrl('missionaffretement'));
            }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('FdrAdminBundle:MissionAffretement:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a MissionAffretement entity.
     *
     * @param MissionAffretement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(MissionAffretement $entity) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $form = $this->createForm(new MissionAffretementType($role), $entity, array(
            'action' => $this->generateUrl('missionaffretement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $label = ($entity->getEtat()=='fdr-cloturer')?'Cloturer':'Modifier';
        $form->add('submit', 'submit', array('label' => $label, 'attr' => array('class' => 'btn-primary span2 offset4', 'onclick' => 'return verifDateRamLiv();')));
        return $form;
    }

    /**
     * Edits an existing MissionAffretement entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpClientCompeFDL', 'getUpClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);
        $entity2 = clone $entity;
        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver MissionAffretement ayant code :' . $id);
            return $this->redirect($this->generateUrl('missionaffretement'));
        }
        
        if($entity->getEtat()==="cloturer" and !$role->getUpCloturerFDRAffr())
        {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Voue ne pouvez pas modifier une feuille affrêtement cloturée :');
            return $this->redirect($this->generateUrl('missionaffretement_show', array('id' => $id)));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        
        if ($editForm->isValid()) {
            
            $entity->setNombreManutentionVoulu($entity->getNombreManutentionVoulu() ? $entity->getNombreManutentionVoulu() : 0);
            if($entity->getEtat()=="fdr-cloturer"){$entity->setEtat("cloturer");}
            //$em->flush();
            if ($entity === $entity2) {
                //$this->get('session')->getFlashBag()->add('accuseModification', 'Aucune Modification');
            } else {
                /* Modif */
                $mod = new Modification();
                $mod->setUser($this->getUser());
                
                $arr = $this->get('entitie_manager')->recupModif($entity2, $entity);
                
                $mod->setMotifs($arr);
                $mod->setClasse('FDL');
                $mod->setRemarque('Modification Affretement'.($entity->getEtat()=='cloturer'?"(cloture)":""));
                $mod->setCodeFeuille($entity);
                if(count($arr)>0)
                {$em->persist($mod);
                if($entity->getClient()->getEncompte()){$entity->setMontantregle (true);}
                $em->flush();
                $this->get('session')->getFlashBag()->add('accuseModification', 'Mission Affretement ayant code '.$entity->getId().' a bien été modifiée');
                }
                /* ModifFin */
                
            }
            $em->flush();//recemment
            return $this->redirect($this->generateUrl('missionaffretement_show', array('id' => $id)));
        }
        return $this->render('FdrAdminBundle:MissionAffretement:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'user' => ($this->getUser()) ? $this->getUser() : null,
                    'role' => $role
        ));
    }

    public function chngeetatAction(Request $request, $id, $chngeetat) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpClientCompeFDL', 'getUpClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createChangerEtatForm($id, $chngeetat);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);
            $entity2 = clone $entity;
            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver MissionAffretement ayant code :' . $id);
                return $this->redirect($this->generateUrl('missionaffretement'));
            }
            

            $entity->setEtat($chngeetat);
            $em->flush();
            /* Modif */
            if ($entity === $entity2) {
                
            } else {
                $mod = new Modification();
                $mod->setUser($this->getUser());
                
                $arr = $this->get('entitie_manager')->recupModif($entity2, $entity);
                $mod->setMotifs($arr);
                $mod->setClasse('FDL');
                $mod->setRemarque(ucfirst($chngeetat));
                $mod->setCodeFeuille($entity);
                $em->persist($mod);
                $em->flush();
            }
            /* ModifFin */
            $this->get('session')->getFlashBag()->add('accuseCloture', strtoupper($chngeetat) . ' MissionAffretement ayant id=' . $id . ' a bien été fait');
            return $this->redirect($this->generateUrl('missionaffretement'));
        }
    }

    //

    /**
     * Deletes a MissionAffretement entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelClientCompeFDL', 'getDelClientNnCompeFDL', 'getConfRecDocCtm', 'getConfRecDocClient');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:MissionAffretement')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver MissionAffretement ayant code :' . $id);
                return $this->redirect($this->generateUrl('missionaffretement'));
            }
            if ($entity->getFeuilleDeRoute()) {
                $entity->getFeuilleDeRoute()->setEtat('orpheline');

                $mod = new Modification();
                $mod->setUser($this->getUser());
                
                $mod->setRemarque('orpheline');
                $mod->setCodeFeuille($entity->getFeuilleDeRoute());
                $mod->setClasse('FDR');
                $em->persist($mod);
            }
            $codeFeuille = $entity;
            // $entity->setFeuilleDeRoute(null);
            $em->remove($entity);
            $mod = new Modification();
            $mod->setUser($this->getUser());
            
            $mod->setRemarque('Suppression Affretement');
            $mod->setCodeFeuille($codeFeuille);
            $mod->setClasse('FDL');
            $em->persist($mod);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'MissionAffretement ayant id=' . $id . ' a bien été supprimée');
        }

        return $this->redirect($this->generateUrl('missionaffretement'));
    }

    /**
     * Creates a form to delete a MissionAffretement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('missionaffretement_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('supprimerFdl_' . $id, 'submit', array('label' => 'S ', 'attr' => array('class' => 'btn btn-danger supp', 'title' => 'Supprimer')))
                        ->getForm()
        ;
    }

    /**
     * Creates a form to change state a MissionAffretement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createChangerEtatForm($id, $chngeetat = 'cloturer') {
        $style = (strtolower($chngeetat) == 'cloturer') ? 'success' : 'warning';
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('missionaffretement_chngeetat', array('id' => $id, 'chngeetat' => $chngeetat)))
                        ->setMethod('POST')
                        ->add($chngeetat . 'Fdl_' . $id, 'submit', array('label' => strtoupper(substr($chngeetat, 0, 1)), 'attr' => array('class' => 'btn btn-' . $style . ' supp', 'title' => ucfirst($chngeetat).' directement ')))
                        ->getForm()
        ;
    }

    /**
     * Creates a form to search a MissionAffretement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('missionaffretement_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
                                'id' => 'Code',
                                'clientDestinataire' => 'Client Destinataire',
                                'user' => 'Propriétaire/(pre)nom',
                            )))
                        ->add('etatfdl', 'choice', array('choices' => array(
                                'ouverte' => 'Feuilles Ouvertes',
                                'cloturer' => 'Feuilles Clôturées',
                                'fdr-cloturer' => 'En attente de clôture',
                                'annuler' => 'Feuilles Annulées',
                                'valider' => 'Feuilles Validées',
                                'toutes' => 'Toutes',),
                                'preferred_choices' => array('ouverte'),
                                'placeholder' => 'Choix par défault','data' => 'ouverte',
                               ))
                                
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => 'Rechercher', 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }

    private function createFiltreForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('missionaffretement', array()))
                        ->setMethod('POST')
                        ->add('affichertous', 'choice', array('choices' => array(
                                'cloturer' => 'Feuilles Clôturées',
                                'fdr-cloturer' => 'En attente de clôture',
                                'valider' => 'Feuilles Validées',
                                'annuler' => 'Feuilles Annulées',
                                'ouverte' => 'Feuilles Ouvertes',
                                'orpheline' => 'Feuilles Orphelines',
                                'toutes' => 'Pas de filtre',
                            ),
                            'preferred_choices' => array('ouverte'),
                            'placeholder' => 'Choix par défault',
                            'label' => false, 'required' => false,
                            'attr' => array('onchange' => 'this.form.submit()')))
                        ->getForm()

        ;
    }

}
