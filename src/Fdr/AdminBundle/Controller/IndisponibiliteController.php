<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Indisponibilite;
use Fdr\AdminBundle\Form\IndisponibiliteType;

/**
 * Indisponibilite controller.
 *
 */
class IndisponibiliteController extends Controller {

    /**
     * Lists all Indisponibilite entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Indisponibilite')->findBy(array(), array('id' => 'DESC'));

        //--
        $form = array();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        return $this->render('FdrAdminBundle:Indisponibilite:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form
        ));
    }

    /**
     * Creates a new Indisponibilite entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Indisponibilite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('indisponibilite_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:Indisponibilite:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Indisponibilite entity.
     *
     * @param Indisponibilite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Indisponibilite $entity) {
        $form = $this->createForm(new IndisponibiliteType(), $entity, array(
            'action' => $this->generateUrl('indisponibilite_create'),
            'method' => 'POST',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr' => array('class' => 'btn-default span2 offset5')));

        return $form;
    }

    /**
     * Displays a form to create a new Indisponibilite entity.
     *
     */
    public function newAction() {
        $entity = new Indisponibilite();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:Indisponibilite:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Indisponibilite entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Indisponibilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Indisponibilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new IndisponibiliteType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Indisponibilite:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                        //--
        ));
    }

    /**
     * Displays a form to edit an existing Indisponibilite entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Indisponibilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Indisponibilite entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:Indisponibilite:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Indisponibilite entity.
     *
     * @param Indisponibilite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Indisponibilite $entity) {
        $form = $this->createForm(new IndisponibiliteType(), $entity, array(
            'action' => $this->generateUrl('indisponibilite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //--
        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn-primary span2 offset5')));
        //--
        return $form;
    }

    /**
     * Edits an existing Indisponibilite entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Indisponibilite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Indisponibilite entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('indisponibilite_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:Indisponibilite:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Indisponibilite entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Indisponibilite')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Indisponibilite entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('indisponibilite'));
    }

    /**
     * Creates a form to delete a Indisponibilite entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('indisponibilite_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('submit', 'submit', array('label' => ' ', 'attr' => array('class' => 'btn-supp', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }

}
