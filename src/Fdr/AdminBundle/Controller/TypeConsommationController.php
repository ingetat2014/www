<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\TypeConsommation;
use Fdr\AdminBundle\Form\TypeConsommationType;

/**
 * TypeConsommation controller.
 *
 */
class TypeConsommationController extends Controller {

    /**
     * Lists all TypeConsommation entities.
     *
     */
    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffTypeConsommation', 'getCrTypeConsommation', 'getUpTypeConsommation', 'getDelTypeConsommation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:TypeConsommation')->findBy(array(), array('id' => 'DESC'));

        //--
        $form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:TypeConsommation:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'role' => $role,
                    'pagination' => $pagination,
        ));
    }

    /**
     * Creates a new TypeConsommation entity.
     *
     */
    public function createAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrTypeConsommation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new TypeConsommation();
        $form = $this->createCreateForm($entity);

        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        $entityExiste = $em->getRepository('FdrAdminBundle:TypeConsommation')->findOneBy(
                array('ville' => $form->get('ville')->getData(),
                    'depot' => $form->get('depot')->getData(),
                    'produit' => $form->get('produit')->getData(),
                    'type' => $form->get('type')->getData()
        ));
        $prixAncien = $entityExiste ? $entityExiste->getPrixUnitaire() : null;
        if ($form->isValid()) {

            if ($entityExiste) {
                $this->get('session')->getFlashBag()->add('accuseModification', 'Ce type de consommation existe déja et le prix unitaire (' . $prixAncien . ') a été changé par : ' . $entity->getPrixUnitaire());
                $entityExiste->setPrixUnitaire($form->get('prixUnitaire')->getData());
                $em->flush();
                return $this->redirect($this->generateUrl('typeconsommation_edit', array('id' => $entityExiste->getId())));
            } else {
                $em->persist($entity);
                $em->flush();
            }

            return $this->redirect($this->generateUrl('typeconsommation_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:TypeConsommation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to create a TypeConsommation entity.
     *
     * @param TypeConsommation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TypeConsommation $entity) {
        $form = $this->createForm(new TypeConsommationType(), $entity, array(
            'action' => $this->generateUrl('typeconsommation_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset5')));

        return $form;
    }

    /**
     * Displays a form to create a new TypeConsommation entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrTypeConsommation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new TypeConsommation();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:TypeConsommation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Finds and displays a TypeConsommation entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffTypeConsommation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type consommation ayant code=' . $id);
            return $this->redirect($this->generateUrl('typeconsommation'));
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new TypeConsommationType(), $entity);
        //---

        return $this->render('FdrAdminBundle:TypeConsommation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

    /**
     * Displays a form to edit an existing TypeConsommation entity.
     *
     */
    public function editAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpTypeConsommation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type consommation ayant code=' . $id);
            return $this->redirect($this->generateUrl('typeconsommation'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:TypeConsommation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a TypeConsommation entity.
     *
     * @param TypeConsommation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TypeConsommation $entity) {
        $form = $this->createForm(new TypeConsommationType(), $entity, array(
            'action' => $this->generateUrl('typeconsommation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn-primary span2 offset5')));
        /* $form->add('hid_depot', 'hidden', array('data' => $entity->getDepot(), 'mapped' => false)); */
//--
        return $form;
    }

    /**
     * Edits an existing TypeConsommation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpTypeConsommation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type consommation ayant code=' . $id);
            return $this->redirect($this->generateUrl('typeconsommation'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'Type de consommation a pris les derniéres modifications');
            return $this->redirect($this->generateUrl('typeconsommation_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:TypeConsommation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Deletes a TypeConsommation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelTypeConsommation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:TypeConsommation')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type consommation ayant code=' . $id);
                return $this->redirect($this->generateUrl('typeconsommation'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Type de consommation a bien été supprimé');
        }

        return $this->redirect($this->generateUrl('typeconsommation'));
    }

    /**
     * Creates a form to delete a TypeConsommation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('typeconsommation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('supprimer', 'submit', array('label' => 'S', 'attr' => array('class' => 'btn-supp btn-danger', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }

}
