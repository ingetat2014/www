<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Ville;
use Fdr\AdminBundle\Form\VilleType;

/**
 * Ville controller.
 *
 */
class VilleController extends Controller {

    /**
     * Lists all Ville entities.
     *
     */
    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffVille', 'getCrVille', 'getUpVille', 'getDelVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Ville')->findBy(array(), array('id' => 'DESC'));

        //--
        $form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:Ville:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'role' => $role,
                    'pagination' => $pagination,
        ));
    }

    /**
     * Creates a new Ville entity.
     *
     */
    public function createAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Ville();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseAjout', 'Ville ayant id=' . $entity->getId() . ' a bien été ajoutée');
            return $this->redirect($this->generateUrl('ville_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Ville:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to create a Ville entity.
     *
     * @param Ville $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ville $entity) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createForm(new VilleType(), $entity, array(
            'action' => $this->generateUrl('ville_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset5')));

        return $form;
    }

    /**
     * Displays a form to create a new Ville entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Ville();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Ville:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Finds and displays a Ville entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Ville')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver ville ayant code=' . $id);
            return $this->redirect($this->generateUrl('ville'));
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new VilleType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Ville:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

    /**
     * Displays a form to edit an existing Ville entity.
     *
     */
    public function editAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Ville')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver ville ayant code=' . $id);
            return $this->redirect($this->generateUrl('ville'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Ville:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a Ville entity.
     *
     * @param Ville $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Ville $entity) {
        $form = $this->createForm(new VilleType(), $entity, array(
            'action' => $this->generateUrl('ville_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn-primary span2 offset5')));
        //--
        return $form;
    }

    /**
     * Edits an existing Ville entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Ville')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver ville ayant code=' . $id);
            return $this->redirect($this->generateUrl('ville'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'Ville ayant id=' . $entity->getId() . ' a bien été modifiée');
            return $this->redirect($this->generateUrl('ville_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Ville:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Deletes a Ville entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelVille');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Ville')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver ville ayant code=' . $id);
                return $this->redirect($this->generateUrl('ville'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Ville ayant id=' . $entity->getId() . ' a bien été supprimée');
        }

        return $this->redirect($this->generateUrl('ville'));
    }

    /**
     * Creates a form to delete a Ville entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('ville_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('supprimer', 'submit', array('label' => 'S', 'attr' => array('class' => 'btn-supp btn-danger', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }

}
