<?php

namespace Komay\bundles\Idea1Bundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Komay\bundles\Idea1Bundle\Entity\Dossier;
use Komay\bundles\Idea1Bundle\Form\DossierType;

/**
 * Dossier controller.
 *
 */
class DossierController extends Controller
{

    /**
     * Lists all Dossier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Dossier();
        $entities = $em->getRepository('KomaybundlesIdea1Bundle:Dossier')->findAll();
        $editForm = $this->createEditForm(new Dossier());

        return $this->render('KomaybundlesIdea1Bundle:Dossier:index.html.twig', array(
            'entities' => $entities,
            'edit_form'   => $editForm->createView(),
            'entity' => $entity,
        ));
    }
    /**
     * Creates a new Dossier entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Dossier();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dossier_show', array('id' => $entity->getId())));
        }

        return $this->render('KomaybundlesIdea1Bundle:Dossier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Dossier entity.
     *
     * @param Dossier $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Dossier $entity)
    {
        $form = $this->createForm(new DossierType(), $entity, array(
            'action' => $this->generateUrl('dossier_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Dossier entity.
     *
     */
    public function newAction()
    {
        $entity = new Dossier();
        $form   = $this->createCreateForm($entity);

        return $this->render('KomaybundlesIdea1Bundle:Dossier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Dossier entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KomaybundlesIdea1Bundle:Dossier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KomaybundlesIdea1Bundle:Dossier:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Dossier entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KomaybundlesIdea1Bundle:Dossier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossier entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('KomaybundlesIdea1Bundle:Dossier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Dossier entity.
    *
    * @param Dossier $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Dossier $entity)
    {
        $form = $this->createForm(new DossierType(), $entity, array(
            'action' => $this->generateUrl('dossier_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Dossier entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('KomaybundlesIdea1Bundle:Dossier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dossier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('dossier_edit', array('id' => $id)));
        }

        return $this->render('KomaybundlesIdea1Bundle:Dossier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Dossier entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('KomaybundlesIdea1Bundle:Dossier')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dossier entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dossier'));
    }

    /**
     * Creates a form to delete a Dossier entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dossier_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
