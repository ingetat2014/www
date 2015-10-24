<?php

namespace Fdr\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add("username")
            ->add("locked",null,array('label'=>'Compte Verrouillé','required'=>false))
            ->add("expired",null,array('label'=>'Compte Expiré','required'=>false))
            ->add("expiresAt",'datetime', array('required'=>false,'date_widget' => "single_text", 'time_widget' => "single_text","attr"=>array("placeholder"=>"Date d'expiration","title"=>"Date d'expiration")))
            ->add('email')
            ->add('adresse')
            ->add('matricule')
            ->add('cin')
            ->add('tel')
            ->add('adresse')
            //->add('feuilleDeRoutes')
            ->add('depot',null,array('placeholder'=>'Choisir un depot','attr'=>array('title'=>'Choisir un depot')))
            ->add('roles', 'entity', array('required'=>true,
                                               'placeholder'=>'Choisir un rôle',
                                               'mapped'=>false,
                                               'attr'=>array('title'=>'Choisir un rôle'),
                                               'class' => 'FdrAdminBundle:Role',
                                               'query_builder' => function(EntityRepository $er) {
                                                                         return $er->createQueryBuilder('c');
                                                                                     })); 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fdr_userbundle_user';
    }
}
