<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Vehicule;
use Fdr\AdminBundle\Form\VehiculeType;

/**
 * Vehicule controller.
 *
 */
class VehiculeController extends Controller {

    /**
     * Lists all Vehicule entities.
     *
     */
    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffVehicule', 'getCrVehicule', 'getUpVehicule', 'getDelVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Vehicule')->findBy(array(), array('id' => 'DESC'));
        //--
         $form = array();
        $search_form = $this->createSearchForm();
        $vidange_form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
            $vidange_form[$entity->getId()] = $this->createVidangeForm($entity->getId())->createView();
        }
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:Vehicule:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                     'vidange_form'=>$vidange_form,
                    'role' => $role,
                    'pagination' => $pagination,
					'search_form' => $search_form->createView(), 
        ));
    }
	
	public function rechercheAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffVehicule', 'getCrVehicule', 'getUpVehicule', 'getDelVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        //--
        $form = array();
        $search_form = $this->createSearchForm();
        $search_form->handleRequest($request);
        if ($search_form->isValid()) {
            //$par="libelle";
            $keyword = strtolower($search_form->get('libelle')->getData());
            $par = $search_form->get('par')->getData();
            $em = $this->getDoctrine()->getManager();
            if ($par != 'ville') {
                $query = $em->createQuery('SELECT p FROM FdrAdminBundle:Vehicule p WHERE p.' . $par . ' like :keyword ORDER BY p.' . $par . ' ASC')->setParameter('keyword', strtolower('%' . $keyword . '%'));
                $entities = $query->getResult();
            } else {
                $ville = $em->getRepository('FdrAdminBundle:Ville')->findOneBy(array('libelle' => $keyword));
                $entities = $em->getRepository('FdrAdminBundle:Vehicule')->findByVille($ville);
            }
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        } else {
            throw $this->createNotFoundException(' Erreur Dans la recherche ');
        }

        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        return $this->render('FdrAdminBundle:Vehicule:recherche.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'search_form' => $search_form->createView(),
                    'keyword' => $keyword,
                    'par' => $par,
                    'pagination' => $pagination,
                    'role' => $role
        ));
    }
	
	private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('vehicule_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
					          	'matricule' => 'matricule',
								'numSociete' => 'Num. Societe',
                                'depot' => 'Depot',
                                'type' => 'Type de véhicule',
                            ), 'placeholder' => "Rechercher par :"))
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => 'Rechercher', 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }

    /**
     * Creates a new Vehicule entity.
     *
     */
    public function createAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Vehicule();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseAjout', 'Vehicule ayant code=' . $entity->getId() . ' a bien été ajouté');
            return $this->redirect($this->generateUrl('vehicule_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Vehicule:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to create a Vehicule entity.
     *
     * @param Vehicule $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Vehicule $entity) {
        $form = $this->createForm(new VehiculeType(), $entity, array(
            'action' => $this->generateUrl('vehicule_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset5')));

        return $form;
    }

    /**
     * Displays a form to create a new Vehicule entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Vehicule();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Vehicule:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Finds and displays a Vehicule entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Vehicule')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver vehicule ayant code=' . $id);
            return $this->redirect($this->generateUrl('vehicule'));
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new VehiculeType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Vehicule:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

    /**
     * Displays a form to edit an existing Vehicule entity.
     *
     */
    public function editAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Vehicule')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver vehicule ayant code=' . $id);
            return $this->redirect($this->generateUrl('vehicule'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Vehicule:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a Vehicule entity.
     *
     * @param Vehicule $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Vehicule $entity) {
        $form = $this->createForm(new VehiculeType(), $entity, array(
            'action' => $this->generateUrl('vehicule_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn-primary span2 offset5')));
        //--
        return $form;
    }

    /**
     * Edits an existing Vehicule entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Vehicule')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver vehicule ayant code=' . $id);
            return $this->redirect($this->generateUrl('vehicule'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'Vehicule ayant code=' . $entity->getId() . ' a bien été modifié');
            return $this->redirect($this->generateUrl('vehicule_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Vehicule:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Deletes a Vehicule entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Vehicule')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver vehicule ayant code=' . $id);
                return $this->redirect($this->generateUrl('vehicule'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Vehicule ayant code=' . $entity->getId() . ' a bien été supprimé');
        }

        return $this->redirect($this->generateUrl('vehicule'));
    }

    /**
     * Creates a form to delete a Vehicule entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('vehicule_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('supprimer', 'submit', array('label' => 'S', 'attr' => array('class' => 'btn-supp btn-danger', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }
    
    private function createVidangeForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('vehicule_vidange', array('id' => $id)))
                        ->setMethod('POST')
                        //--
                        ->add('vidange', 'submit', array('label' => 'Vidange', 'attr' => array('class' => 'btn-default btn-warning', 'title' => 'Effectuer le vidange')))
                        //--
                        ->getForm()
        ;
    }
    public function vidangeAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffVehicule', 'getCrVehicule', 'getUpVehicule', 'getDelVehicule');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createVidangeForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Vehicule')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver vehicule ayant code=' . $id);
                return $this->redirect($this->generateUrl('vehicule'));
            }
            $entity->setNombreVidange($entity->getNombreVidange()+1);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseAjout', 'Vidange de Vehicule ayant code=' . $entity->getId());
        }

        return $this->redirect($this->generateUrl('vehicule'));
    }

}
