<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\ClientFdrV;
use Fdr\AdminBundle\Form\ClientFdrVType;

/**
 * ClientFdrV controller.
 *
 */
class ClientFdrVController extends Controller {

    /**
     * Lists all ClientFdrV entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:ClientFdrV')->findBy(array(), array('id' => 'DESC'));

        return $this->render('FdrAdminBundle:ClientFdrV:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new ClientFdrV entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new ClientFdrV();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clientfdrv_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:ClientFdrV:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ClientFdrV entity.
     *
     * @param ClientFdrV $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClientFdrV $entity) {
        $form = $this->createForm(new ClientFdrVType(), $entity, array(
            'action' => $this->generateUrl('clientfdrv_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClientFdrV entity.
     *
     */
    public function newAction() {
        $entity = new ClientFdrV();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:ClientFdrV:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ClientFdrV entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:ClientFdrV')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientFdrV entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:ClientFdrV:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ClientFdrV entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:ClientFdrV')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientFdrV entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:ClientFdrV:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a ClientFdrV entity.
     *
     * @param ClientFdrV $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(ClientFdrV $entity) {
        $form = $this->createForm(new ClientFdrVType(), $entity, array(
            'action' => $this->generateUrl('clientfdrv_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing ClientFdrV entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:ClientFdrV')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientFdrV entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clientfdrv_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:ClientFdrV:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ClientFdrV entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:ClientFdrV')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClientFdrV entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clientfdrv'));
    }

    /**
     * Creates a form to delete a ClientFdrV entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('clientfdrv_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
