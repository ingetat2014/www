<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Peage;
use Fdr\AdminBundle\Form\PeageType;

/**
 * Peage controller.
 *
 */
class PeageController extends Controller {

    /**
     * Lists all Peage entities.
     *
     */
    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffPeage', 'getCrPeage', 'getUpPeage', 'getDelPeage');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Peage')->findBy(array(), array('id' => 'DESC'));

        //--
        $form = array();
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);

        return $this->render('FdrAdminBundle:Peage:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'role' => $role,
                    'pagination' => $pagination
        ));
    }

    /**
     * Finds and displays a Peage entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffPeage');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Peage')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver peage ayant code=' . $id);
            return $this->redirect($this->generateUrl('peage'));
        }
        //---
        $form = $this->createForm(new PeageType(), $entity);
        //---

        return $this->render('FdrAdminBundle:Peage:show.html.twig', array(
                    'entity' => $entity,
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

}
