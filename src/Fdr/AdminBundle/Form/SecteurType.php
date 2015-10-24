<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class SecteurType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('libelle', null, array("attr" => array("placeholder" => "Libelle", "title" => "Libelle")))
                ->add('depart', null, array("attr" => array("placeholder" => "Depart", "title" => "Depart")))
                ->add('arrivee', null, array("attr" => array("placeholder" => "Arrivée", "title" => "Arrivée")))
                ->add('ville', null, array("placeholder" => "Choisir la ville", "attr" => array("title" => "Choisir la ville")))
                ->add('typePrestations')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Secteur'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_secteur';
    }

}
