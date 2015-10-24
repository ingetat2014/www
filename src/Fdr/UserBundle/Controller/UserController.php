<?php

namespace Fdr\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fdr\UserBundle\Entity\User;
use Fdr\UserBundle\Form\UserType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction(Request $request)
    {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffUtilisateur', 'getDelUtilisateur', 'getUpUtilisateur', 'getCrUtilisateur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('FdrUserBundle:User')->findAll();
        $delete_form = array();
        $search_form = $this->createSearchForm();
        foreach ($entities as $entity) {
            $delete_form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        return $this->render('FdrUserBundle:User:index.html.twig', array(
            'entities' => $entities,
            'delete_form' => $delete_form,
            'role'=>$role,
            'pagination' => $pagination,
            'search_form' => $search_form->createView(),
        ));
    }
    
    public function rechercheAction(Request $request) {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffUtilisateur', 'getDelUtilisateur', 'getUpUtilisateur', 'getCrUtilisateur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        //--
        $form = array();
        $search_form = $this->createSearchForm();
        $search_form->handleRequest($request);
        $entities = new ArrayCollection();
        $em = $this->getDoctrine()->getManager();
        if ($search_form->isValid()) {
            //$par="libelle";
            $keyword = strtolower($search_form->get('libelle')->getData());
            $par = $search_form->get('par')->getData();
            if($par!='roles'){
            
            $query = $em->createQuery('SELECT p FROM FdrUserBundle:User p WHERE p.' . $par . ' like :keyword ORDER BY p.' . $par . ' ASC')
                    ->setParameter('keyword', strtolower('%' . $keyword . '%'));
            $entities = $query->getResult();
            }
            else
            {
                $fdrs = $em->getRepository('FdrUserBundle:User')->findBy(array(), array('id' => 'DESC'));
                foreach ($fdrs as $entity) {
                    $rl = $entity->getRoles();
                    if (levenshtein(strtolower($rl[0]), strtolower($keyword)) <= 1 or levenshtein(strtolower($rl[0]), strtolower('role_'.$keyword)) <= 1) {
                        $entities->add($entity);
                    }
                }
                    
            }
            $paginator = $this->get('knp_paginator');
            $pagination = $paginator->paginate($entities, $request->query->get('page', 1), 10);
        } else {
            $this->get('session')->getFlashBag()->add('notFoundException', 'Erreur Dans la recherche');
            return $this->redirect($this->generateUrl('user'));
        }

        foreach ($entities as $entity) {
            $form[$entity->getId()] = $this->createDeleteForm($entity->getId())->createView();
        }
        //--
        return $this->render('FdrUserBundle:User:recherche.html.twig', array(
                    'entities' => $entities,
                    'delete_form' => $form,
                    'search_form' => $search_form->createView(),
                    'keyword' => $keyword,
                    'par' => $par,
                    'pagination' => $pagination,
                    'role' => $role
        ));
    }
    
    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getAffUtilisateur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        return $this->render('FdrUserBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'role'=>$role
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpUtilisateur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
         if($entity->getUsername()==$this->getUser()->getUserName())
         {
             $this->get('session')->getFlashBag()->add('notFoundException', 'Impossible de modifier l\'utilisateur admin');
             return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));
         }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FdrUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'role'=>$role
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $roles = $entity->getRoles();
        $role = substr(strtoupper($roles[0]), 5);
        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>'btn btn-default')));
        $form->add('hid_role', 'hidden', array('data' =>$role , 'mapped' => false));
        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getUpUtilisateur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        if (!$role) {
            throw $this->createAccessDeniedException("Vous n'avez pas le droit d'accèder à cette page ");
        }
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FdrUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseModification', 'Utilisateur ayant id=' . $id . ' a bien été modifié');
            return $this->redirect($this->generateUrl('user_edit', array('id' => $id)));
        }

        return $this->render('FdrUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'role'=>$role
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        
        $emRole = $this->getDoctrine()->getManager();
        $roles = ($this->getUser()) ? $this->getUser()->getRoles() : array(null);
        $role = $emRole->getRepository('FdrAdminBundle:Role')->findOneByNomRole(substr(strtoupper($roles[0]), 5));
        $methodes = array('getDelUtilisateur');
        $this->get('entitie_manager')->ayantRoles($this, $role, $emRole, $methodes);
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FdrUserBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('accuseSuppression', 'Utilisateur ayant id=' . $id . ' a bien été supprimé');
        }

        return $this->redirect($this->generateUrl('user'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'S','attr'=>array('class'=>'btn-supp btn-danger')))
            ->getForm()
        ;
    }
    
    private function createSearchForm() {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_recherche', array()))
                        ->setMethod('GET')
                        //--
                        ->add('par', 'choice', array('choices' => array(
                                'id' => "Code",
                                'nom' => 'Nom',
                                'matricule' => 'Matricule',
                                'username' => 'Nom d\'utilisateur',
                                'roles' => 'Role',
                            ), 'placeholder' => "Rechercher par :"))
                        ->add('libelle', 'text', array('label' => ' ', 'attr' => array('class' => 'input-sm', 'title' => 'Rechercher', 'placeholder' => ' Par mot clè...?')))
                        ->add('submit', 'submit', array('label' => ' Rechercher ', 'attr' => array('class' => 'btn-default', 'title' => 'Rechercher')))
                        //--
                        ->getForm()
        ;
    }
}
