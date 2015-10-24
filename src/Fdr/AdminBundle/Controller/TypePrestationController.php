<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\TypePrestation;
use Fdr\AdminBundle\Form\TypePrestationType;

/**
 * TypePrestation controller.
 *
 */
class TypePrestationController extends Controller {

    /**
     * Lists all TypePrestation entities.
     *
     */
    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffTypePrestation', 'getCrTypePrestation', 'getUpTypePrestation', 'getDelTypePrestation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:TypePrestation')->findBy(array(), array('id' => 'DESC'));

        //--
        $form = array();
        $search_form = $this->createSearchForm();

        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:TypePrestation:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'search_form' => $search_form->createView(),
                    'pagination' => $pagination,
                    'role' => $role
        ));
    }

    public function rechercheAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffTypePrestation', 'getCrTypePrestation', 'getUpTypePrestation', 'getDelTypePrestation');
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
            $query = $em->createQuery('SELECT p FROM FdrAdminBundle:TypePrestation p WHERE p.' . $par . ' like :keyword ORDER BY p.' . $par . ' ASC')->setParameter('keyword', strtolower('%' . $keyword . '%'));
            $entities = $query->getResult();
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        } else {
            throw $this->createNotFoundException(' Erreur Dans la recherche ');
        }

        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        return $this->render('FdrAdminBundle:TypePrestation:recherche.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'search_form' => $search_form->createView(),
                    'keyword' => $keyword,
                    'par' => $par,
                    'pagination' => $pagination,
                    'role' => $role
        ));
    }

    /**
     * Creates a new TypePrestation entity.
     *
     */
    public function createAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrTypePrestation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new TypePrestation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseAjout', 'TypePrestation ayant id=' . $entity->getId() . ' a bien été ajouté');
            return $this->redirect($this->generateUrl('typeprestation_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:TypePrestation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to create a TypePrestation entity.
     *
     * @param TypePrestation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TypePrestation $entity) {
        $form = $this->createForm(new TypePrestationType(), $entity, array(
            'action' => $this->generateUrl('typeprestation_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset5')));

        return $form;
    }

    /**
     * Displays a form to create a new TypePrestation entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrTypePrestation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new TypePrestation();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:TypePrestation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Finds and displays a TypePrestation entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffTypePrestation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypePrestation')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type prestation ayant code=' . $id);
            return $this->redirect($this->generateUrl('typeprestation'));
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new TypePrestationType(), $entity);
        //---

        return $this->render('FdrAdminBundle:TypePrestation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

    /**
     * Displays a form to edit an existing TypePrestation entity.
     *
     */
    public function editAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpTypePrestation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypePrestation')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type prestation ayant code=' . $id);
            return $this->redirect($this->generateUrl('typeprestation'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:TypePrestation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a TypePrestation entity.
     *
     * @param TypePrestation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TypePrestation $entity) {
        $form = $this->createForm(new TypePrestationType(), $entity, array(
            'action' => $this->generateUrl('typeprestation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn-primary span2 offset5')));
        //--
        return $form;
    }

    /**
     * Edits an existing TypePrestation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpTypePrestation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:TypePrestation')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type prestation ayant code=' . $id);
            return $this->redirect($this->generateUrl('typeprestation'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'TypePrestation a bien été modifié');

            return $this->redirect($this->generateUrl('typeprestation_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:TypePrestation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Deletes a TypePrestation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelTypePrestation');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:TypePrestation')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver type prestation ayant code=' . $id);
                return $this->redirect($this->generateUrl('typeprestation'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'TypePrestation ayant id=' . $id . ' a bien été supprimé');
        }

        return $this->redirect($this->generateUrl('typeprestation'));
    }

    /**
     * Creates a form to delete a TypePrestation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('typeprestation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('supprimer', 'submit', array('label' => 'S', 'attr' => array('class' => 'btn-supp btn-danger', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }

    private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('typeprestation_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
                                'id' => "Code",
                                'libelle' => 'Libelle',
                            ), 'placeholder' => "Rechercher par :"))
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => 'Rechercher', 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }

}
