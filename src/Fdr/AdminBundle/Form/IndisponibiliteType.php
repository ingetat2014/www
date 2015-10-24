<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class IndisponibiliteType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('chauffeur', null, array("attr" => array("placeholder" => "Chauffeur", "title" => "Chauffeur")))
                ->add('motif', 'choice', array('choices' => array('conge' => 'Congé', 'map' => 'Mise à pieds', 'cm' => 'Congé maladie', 'autre' => 'Autre'), "attr" => array("placeholder" => "Motif", "title" => "Motif")))
                ->add('datedebut', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text", "attr" => array("placeholder" => "Date de début", "title" => "Date de début")))
                ->add('datefin', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text", "attr" => array("placeholder" => "Date de fin", "title" => "Date de fin")))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Indisponibilite'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_indisponibilite';
    }

}
