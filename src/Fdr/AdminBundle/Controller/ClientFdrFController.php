<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\ClientFdrF;
use Fdr\AdminBundle\Form\ClientFdrFType;

/**
 * ClientFdrF controller.
 *
 */
class ClientFdrFController extends Controller {

    /**
     * Lists all ClientFdrF entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:ClientFdrF')->findBy(array(), array('id' => 'DESC'));

        return $this->render('FdrAdminBundle:ClientFdrF:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new ClientFdrF entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new ClientFdrF();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clientfdrf_show', array('id' => $entity->getId())));
        }

        return $this->render('FdrAdminBundle:ClientFdrF:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ClientFdrF entity.
     *
     * @param ClientFdrF $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClientFdrF $entity) {
        $form = $this->createForm(new ClientFdrFType(), $entity, array(
            'action' => $this->generateUrl('clientfdrf_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClientFdrF entity.
     *
     */
    public function newAction() {
        $entity = new ClientFdrF();
        $form = $this->createCreateForm($entity);

        return $this->render('FdrAdminBundle:ClientFdrF:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ClientFdrF entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:ClientFdrF')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientFdrF entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:ClientFdrF:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ClientFdrF entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:ClientFdrF')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientFdrF entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrAdminBundle:ClientFdrF:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a ClientFdrF entity.
     *
     * @param ClientFdrF $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(ClientFdrF $entity) {
        $form = $this->createForm(new ClientFdrFType(), $entity, array(
            'action' => $this->generateUrl('clientfdrf_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing ClientFdrF entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:ClientFdrF')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientFdrF entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clientfdrf_edit', array('id' => $id)));
        }

        return $this->render('FdrAdminBundle:ClientFdrF:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ClientFdrF entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:ClientFdrF')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClientFdrF entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clientfdrf'));
    }

    /**
     * Creates a form to delete a ClientFdrF entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('clientfdrf_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
