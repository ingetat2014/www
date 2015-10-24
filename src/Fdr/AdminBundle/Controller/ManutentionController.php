<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Manutention;
use Fdr\AdminBundle\Form\ManutentionType;

/**
 * Manutention controller.
 *
 */
class ManutentionController extends Controller {

    /**
     * Lists all Manutention entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Manutention')->findBy(array(), array('id' => 'DESC'));
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrAdminBundle:Manutention:index.html.twig', array(
                    'entities' => $entities,
                    'pagination' => $pagination
        ));
    }

    /**
     * Finds and displays a Manutention entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Manutention')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver manutention ayant code=' . $id);
            return $this->redirect($this->generateUrl('manutention'));
        }

        return $this->render('FdrAdminBundle:Manutention:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

}
