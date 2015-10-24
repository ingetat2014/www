<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\BonCarburantHuile;
use Fdr\AdminBundle\Form\BonCarburantHuileType;

/**
 * BonCarburantHuile controller.
 *
 */
class BonCarburantHuileController extends Controller {

    /**
     * Lists all BonCarburantHuile entities.
     *
     */
    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffBonCarburantHuile', 'getCrBonCarburantHuile', 'getUpBonCarburantHuile', 'getDelBonCarburantHuile');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->findBy(array(), array('id' => 'DESC'));

        //--
        $form = array();
        //--
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:BonCarburantHuile:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'role' => $role,
                    'pagination' => $pagination,
        ));
    }

    /**
     * Finds and displays a BonCarburantHuile entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffBonCarburantHuile', 'getCrBonCarburantHuile', 'getUpBonCarburantHuile', 'getDelBonCarburantHuile');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:BonCarburantHuile')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver boncarburanthuile ayant code=' . $id);
            return $this->redirect($this->generateUrl('boncarburanthuile'));
        }

        //---
        $form = $this->createForm(new BonCarburantHuileType(), $entity);
        //---

        return $this->render('FdrAdminBundle:BonCarburantHuile:show.html.twig', array(
                    'entity' => $entity,
                    //--
                    'form' => $form->createView(),
                    'role' => $role
                        //--
        ));
    }

}
