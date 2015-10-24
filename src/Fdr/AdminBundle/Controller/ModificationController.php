<?php

namespace Fdr\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Fdr\AdminBundle\Entity\Modification;
use Fdr\AdminBundle\Form\ModificationType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Modification controller.
 *
 */
class ModificationController extends Controller {

    /**
     * Lists all Modification entities.
     *
     */

    public function indexAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffModification', 'getDelModification');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FdrAdminBundle:Modification')->findBy(array(), array('id' => 'DESC'));
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 15);
        //--
        $form = array();
        $search_form = $this->createSearchForm();
        $vider_form = $this->createViderForm();
        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        return $this->render('FdrAdminBundle:Modification:index.html.twig', array(
                    'entities' => $entities,
                    'form' => $form,
                    'role' => $role,
                    'pagination' => $pagination,
                    'search_form' => $search_form->createView(),
                    'pagination' => $pagination,
                    'vider_form' => $vider_form->createView()
        ));
    }

    /**
     * Finds and displays a Modification entity.
     *
     */
    public function showAction($id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffModification');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrAdminBundle:Modification')->find($id);

        if (!$entity) {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver modification ayant code=' . $id);
            return $this->redirect($this->generateUrl('modification'));
        }

        $deleteForm = $this->createDeleteForm($id);

        //---
        $form = $this->createForm(new ModificationType(), $entity);
        //---
        return $this->render('FdrAdminBundle:Modification:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    //--
                    'form' => $form->createView(),
                    'role' => $role,
                        //--
        ));
    }

    /**
     * Deletes a Modification entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelModification');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrAdminBundle:Modification')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de trouver modification ayant code=' . $id);
                return $this->redirect($this->generateUrl('modification'));
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Modification ayant id=' . $id . ' a bien été supprimée');
        }

        return $this->redirect($this->generateUrl('modification'));
    }

    /**
     * Creates a form to delete a Modification entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('modification_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        //--
                        ->add('supprimer', 'submit', array('label' => 'S', 'attr' => array('class' => 'btn-danger btn-supp', 'title' => 'Supprimer')))
                        //--
                        ->getForm()
        ;
    }

    public function viderAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffModification', 'getDelModification');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createViderForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $connection = $em->getConnection();
            $platform = $connection->getDatabasePlatform();
            $connection->executeUpdate($platform->getTruncateTableSQL('modification', true));
            //  $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'La table des modifications a bien été vidée');
            return $this->redirect($this->generateUrl('modification'));
        }

        return $this->redirect($this->generateUrl('modification'));
    }

    private function createViderForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('modification_vider'))
                        ->setMethod('DELETE')
                        ->add('vider', 'submit', array('label' => 'Vider tous', 'attr' => array('class' => 'btn-danger btn-supp text-danger', 'title' => 'Vider la table')))
                        ->getForm()
        ;
    }

    private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('modification_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
                                'id' => 'Code de Modification(1,2,...)',
                                'user' => 'Utilisateur',
                                'codeFeuille' => 'Code Feuille(AFF-1,FDR-2,etc...)',
                                'classe' => "Type Feuille(Saisir 'FDR' ou 'FDL')",
                                'remarque' => "Opération (Saisir 'Creation' 'Modification' ou 'Suppression')",
                            ), 'placeholder' => "Rechercher par : "))
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => 'Rechercher', 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }

    public function rechercheAction(Request $request) {

        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffModification', 'getDelModification');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $search_form = $this->createSearchForm();

        $search_form->handleRequest($request);

        $keyword = strtolower($search_form->get('libelle')->getData());
        $par = $search_form->get('par')->getData();
        $em = $this->getDoctrine()->getManager();
        $entities = new ArrayCollection();
        $delete_form = array();
        if ($search_form->isValid()) {
            try {
                if ($par != 'user') {
                    $entities = $em->getRepository('FdrAdminBundle:Modification')->findBy(array($par => $keyword), array('id' => 'DESC'));
                } else {
                   $userManager = $this->get('fos_user.user_manager');
                    $utilisateur = $userManager->findUserByUsername($keyword);

                    $entities = $em->getRepository('FdrAdminBundle:Modification')->findBy(array($par => $utilisateur), array('id' => 'DESC'));
                   }
               $paginator = $this->get('knp_paginator');
                $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 15);
                $ids = null;
                foreach ($entities as $entity) {
                    $delete_form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
                    $ids .=$entity->getId() . "|";
                }
                $delete_search_form = $this->createDeleteRechercheForm($ids);
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add('notFoundException', 'Exception : ' . $e->getMessage());
                return $this->redirect($this->generateUrl('modification'));
            }
        } else {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Erreur Dans la recherche');
            return $this->redirect($this->generateUrl('modification'));
        }
        //--
        return $this->render('FdrAdminBundle:Modification:recherche.html.twig', array(
                    'entities' => $entities,
                    'delete_search_form' => $delete_search_form->createView(),
                    'delete_form' => $delete_form,
                    'search_form' => $search_form->createView(),
                    'keyword' => $keyword,
                    'par' => $par,
                    'pagination' => $pagination,
                    'role' => $role
        ));
    }

    public function deleteRechercheAction($ids) {

        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffModification', 'getDelModification');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        if ($ids != -1 and $ids != null) {
            $tab = explode("|", $ids);
            if (count($tab) > 0) {
                $fois=0;
                foreach ($tab as $id) {
                    if($id!=null and trim($id)!=""){
                    $entity = $em->getRepository('FdrAdminBundle:Modification')->find($id);
                    $em->remove($entity);
                    $em->flush();
                    if($fois==0)$this->get('session')->getFlashBag()->add('accuseSuppression', 'Suppression de la lise recherchée avec succés');
                    $fois++;
                    }
                }
            }
            return $this->redirect($this->generateUrl('modification'));
        }
        //--
        $this->get('session')->getFlashBag()->add('accuseSuppression', 'Aucune Suppression n\'a été faite');
        return $this->redirect($this->generateUrl('modification'));

        
        
    }

    private function createDeleteRechercheForm($idsAsupprimer = null) {
       //
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('modification_vider_recherche', array('ids' => $idsAsupprimer)))
                        ->setMethod('GET')
                        ->add('vider_recherche', 'submit', array('label' => 'Vider la recherche', 'attr' => array('class' => 'btn-warning', 'title' => 'Vider selon la recherche')))
                        ->getForm()
        ;
    }

}
