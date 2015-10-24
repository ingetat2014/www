<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Parametrage;
use Fdr\AdminBundle\Form\ParametrageType;

/**
 * Parametrage controller.
 *
 */
class ParametrageController extends Controller {

    /**
     * Displays a form to edit an existing Parametrage entity.
     *
     */
    public function editAction() {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getEditerPercentAssurParam', 'getEditerPlageHoraireParam');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("select p from FdrAdminBundle:Parametrage p ")->setMaxResults(1);
        $entity = null;
        try {
            $entity = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $entity = new Parametrage();
            $em->persist($p);
            $em->flush();
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('FdrAdminBundle:Parametrage:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'role' => $role
        ));
    }

    /**
     * Creates a form to edit a Parametrage entity.
     *
     * @param Parametrage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Parametrage $entity) {
        $form = $this->createForm(new ParametrageType(), $entity, array(
            'action' => $this->generateUrl('parametrage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour', 'attr' => array('class' => 'btn btn-default')));

        return $form;
    }

    /**
     * Edits an existing Parametrage entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getEditerPercentAssurParam', 'getEditerPlageHoraireParam');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Parametrage')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver paramétrage ayant code=' . $id);
            return $this->redirect($this->generateUrl('parametrage'));
        }
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'Bien enregistré');
            return $this->redirect($this->generateUrl('parametrage'));
        }

        return $this->render('FdrAdminBundle:Parametrage:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'role' => $role
        ));
    }

}
