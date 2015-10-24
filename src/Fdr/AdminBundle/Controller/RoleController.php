<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Role;
use Fdr\AdminBundle\Form\RoleType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Role controller.
 *
 */
class RoleController extends Controller {

    /**
     * Lists all Role entities.
     *
     */
    public function indexAction(Request $request) {

        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffRole', 'getCrRole', 'getUpRole', 'getDelRole');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);

        $em = $this->getDoctrine()->getManager();
        $entities = new ArrayCollection();
        $fdrs = $em->getRepository('FdrAdminBundle:Role')->findBy(array(), array('id' => 'DESC'));
        foreach ($fdrs as $entity) {
            if (!$this->startsWith(strtolower($entity->getNomRole()), 'admin')) {
                $entities->add($entity);
            } else if ($this->startsWith(strtolower($role->getNomRole()), 'admin')) {
                $entities->add($entity);
            }
        }
        //--
        $form = array();
        $search_form = $this->createSearchForm();

        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:Role:index.html.twig', array(
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
        $methodes = array('getAffRole', 'getCrRole', 'getUpRole', 'getDelRole');
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
            $query = $em->createQuery('SELECT p FROM FdrAdminBundle:Role p WHERE p.' . $par . ' like :keyword ORDER BY p.' . $par . ' ASC')->setParameter('keyword', strtolower('%' . $keyword . '%'));
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
        return $this->render('FdrAdminBundle:Role:recherche.html.twig', array(
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
     * Creates a new Role entity.
     *
     */
    public function createAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrRole');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Role();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $entity->setNomRole(strtoupper($entity->getNomRole()));
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseAjout', 'Role ayant id=' . $entity->getId() . ' a bien été ajouté');
            return $this->redirect($this->generateUrl('role_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Role:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to create a Role entity.
     *
     * @param Role $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Role $entity) {
        $form = $this->createForm(new RoleType(), $entity, array(
            'action' => $this->generateUrl('role_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset5')));

        return $form;
    }

    /**
     * Displays a form to create a new Role entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrRole');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Role();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Role:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Finds and displays a Role entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffRole');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Role')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver role ayant code=' . $id);
            return $this->redirect($this->generateUrl('role'));
        }

        if (($this->startsWith(strtolower($entity->getNomRole()), 'admin') || $this->startsWith(strtolower($entity->getNomRole()), 'super_admin')) &&
                !$this->startsWith(strtolower($role), "super_admin") && !$this->startsWith(strtolower($role), "admin")) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Vous n\'avez pas le droit d\'afficher un role qui est superieur au votre ');
            return $this->redirect($this->generateUrl('role'));
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new RoleType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Role:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

    /**
     * Displays a form to edit an existing Role entity.
     *
     */
    public function editAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpRole');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Role')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver role ayant code=' . $id);
            return $this->redirect($this->generateUrl('role'));
        }
        if ($role == $entity->getNomRole() && !$this->startsWith(strtolower($role), "super_admin")) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Vous pouvez seulement afficher votre propre role pas le modifier');
            return $this->redirect($this->generateUrl('role_show', array('id' => $entity->getId())));
        } else if (($this->startsWith(strtolower($entity->getNomRole()), 'admin') || $this->startsWith(strtolower($entity->getNomRole()), 'super_admin')) &&
                !$this->startsWith(strtolower($role), "super_admin") && !$this->startsWith(strtolower($role), "admin")) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Vous n\'avez pas le droit d\'editer un role qui est superieur au votre ');
            return $this->redirect($this->generateUrl('role'));
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Role:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role,
        ));
    }

    /**
     * Creates a form to edit a Role entity.
     *
     * @param Role $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Role $entity) {
        $form = $this->createForm(new RoleType(), $entity, array(
            'action' => $this->generateUrl('role_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn-primary span2 offset5')));
        //--
        return $form;
    }

    /**
     * Edits an existing Role entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpRole');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Role')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver role ayant code=' . $id);
            return $this->redirect($this->generateUrl('role'));
        }
        if ($role == $entity->getNomRole() && !$this->startsWith(strtolower($role), "super_admin")) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Vous pouvez seulement afficher votre propre role pas le modifier');
            return $this->redirect($this->generateUrl('role_show', array('id' => $entity->getId())));
        } else if (($this->startsWith(strtolower($entity->getNomRole()), 'admin') || $this->startsWith(strtolower($entity->getNomRole()), 'super_admin')) &&
                !$this->startsWith(strtolower($role), "super_admin") && !$this->startsWith(strtolower($role), "admin")) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Vous n\'avez pas le droit d\'editer un role qui est superieur au votre ');
            return $this->redirect($this->generateUrl('role'));
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setNomRole(strtoupper($entity->getNomRole()));
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'Role a bien été modifié');

            return $this->redirect($this->generateUrl('role_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Role:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Deletes a Role entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelRole');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Role')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver role ayant code=' . $id);
                return $this->redirect($this->generateUrl('role'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Role ayant id=' . $id . ' a bien été supprimé');
        }

        return $this->redirect($this->generateUrl('role'));
    }

    /**
     * Creates a form to delete a Role entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {

        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('role_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('supprimer', 'submit', array('label' => 'S', 'attr' => array('class' => 'btn-danger supp', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }

    private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('role_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
                                'id' => "Code",
                                'nomRole' => 'Nom Du Role',
                            ), 'placeholder' => "Rechercher par :"))
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => 'Rechercher', 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }

    public function startsWith($haystack, $needle) {
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
    }

}
