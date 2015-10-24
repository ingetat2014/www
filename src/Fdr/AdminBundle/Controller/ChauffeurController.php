<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Chauffeur;
use Fdr\AdminBundle\Form\ChauffeurType;

/**
 * Chauffeur controller.
 *
 */
class ChauffeurController extends Controller {

    /**
     * Lists all Chauffeur entities.
     *
     */
    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffChauffeur', 'getCrChauffeur', 'getUpChauffeur', 'getDelChauffeur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Chauffeur')->findBy(array(), array('id' => 'DESC'));

        //--
        $form = array();
        $search_form = $this->createSearchForm();

        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:Chauffeur:index.html.twig', array(
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
        $methodes = array('getAffChauffeur', 'getCrChauffeur', 'getUpChauffeur', 'getDelChauffeur');
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
            $query = $em->createQuery('SELECT p FROM FdrAdminBundle:Chauffeur p WHERE p.' . $par . ' like :keyword ORDER BY p.' . $par . ' ASC')
                    ->setParameter('keyword', strtolower('%' . $keyword . '%'));
            $entities = $query->getResult();
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        } else {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Erreur Dans la recherche');
            return $this->redirect($this->generateUrl('chauffeur'));
        }

        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        return $this->render('FdrAdminBundle:Chauffeur:recherche.html.twig', array(
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
     * Creates a new Chauffeur entity.
     *
     */
    public function createAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrChauffeur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Chauffeur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseAjout', 'Chauffeur ayant id=' . $entity->getId() . ' a bien été ajouté');
            return $this->redirect($this->generateUrl('chauffeur_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Chauffeur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to create a Chauffeur entity.
     *
     * @param Chauffeur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Chauffeur $entity) {

        $form = $this->createForm(new ChauffeurType(), $entity, array(
            'action' => $this->generateUrl('chauffeur_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset5')));

        return $form;
    }

    /**
     * Displays a form to create a new Chauffeur entity.
     *
     */
    public function newAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getCrChauffeur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $entity = new Chauffeur();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Chauffeur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'role' => $role
        ));
    }

    /**
     * Finds and displays a Chauffeur entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffChauffeur', 'getCrChauffeur', 'getUpChauffeur', 'getDelChauffeur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver chauffeur ayant code=' . $id);
            return $this->redirect($this->generateUrl('chauffeur'));
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new ChauffeurType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Chauffeur:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

    /**
     * Displays a form to edit an existing Chauffeur entity.
     *
     */
    public function editAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpChauffeur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver chauffeur ayant code=' . $id);
            return $this->redirect($this->generateUrl('chauffeur'));
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Chauffeur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a Chauffeur entity.
     *
     * @param Chauffeur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Chauffeur $entity) {

        $form = $this->createForm(new ChauffeurType(), $entity, array(
            'action' => $this->generateUrl('chauffeur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn-primary span2 offset5')));
        //--
        return $form;
    }

    /**
     * Edits an existing Chauffeur entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpChauffeur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver chauffeur ayant code=' . $id);
            return $this->redirect($this->generateUrl('chauffeur'));
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'Chauffeur a bien été modifié');

            return $this->redirect($this->generateUrl('chauffeur_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Chauffeur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Deletes a Chauffeur entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelChauffeur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Chauffeur')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver chauffeur ayant code=' . $id);
                return $this->redirect($this->generateUrl('chauffeur'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Chauffeur ayant id=' . $id . ' a bien été supprimé');
        }

        return $this->redirect($this->generateUrl('chauffeur'));
    }

    /**
     * Creates a form to delete a Chauffeur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('chauffeur_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('supprimer', 'submit', array('label' => 'S', 'attr' => array('class' => 'btn btn-danger supp', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }

    private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('chauffeur_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
                                'id' => "Code",
                                'nom' => 'Nom',
                                'matricule' => 'Matricule',
                                'etatContrat' => 'Etat de Contrat',
                                'typeconvention' => 'Type De Convention',
                            ), 'placeholder' => "Rechercher par :"))
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => 'Rechercher', 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }

}
