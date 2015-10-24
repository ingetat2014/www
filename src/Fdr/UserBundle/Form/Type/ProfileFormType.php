<?php
namespace Fdr\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;
class ProfileFormType extends AbstractType
//extends BaseType getParent
{
    //public function buildForm(FormBuilder $builder, array $options)
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //parent::buildForm($builder, $options);
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('matricule');
        $builder->add('cin');
        $builder->add('depot'); 
        $builder->add('roles', 'entity', array('required'=>true,
                                               'placeholder'=>'Choisir un rôle',
                                               'mapped'=>false,
                                               'attr'=>array('title'=>'Choisir chauffeur'),
                                               'class' => 'FdrAdminBundle:Role',
                                               'query_builder' => function(EntityRepository $er) {
                                                                         return $er->createQueryBuilder('c');
                                                                                     })); 
    }

    public function getName()
    {
        return 'fdr_user_profile';
    }
    public function getParent()
    {
        return 'fos_user_profile';
    }
}