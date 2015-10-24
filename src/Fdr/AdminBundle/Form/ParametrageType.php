<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParametrageType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('heureDebutDejeuner', 'time', array('widget' => "single_text", 'label' => 'Heure Début Déjeuner'))
                ->add('heureFinDejeuner', 'time', array('widget' => "single_text", 'label' => 'Heure Fin Déjeuner'))
                ->add('heureDebutDiner', 'time', array('widget' => "single_text", 'label' => 'Heure Début Diner'))
                ->add('heureFinDiner', 'time', array('widget' => "single_text", 'label' => 'Heure Fin Diner'))
                ->add('heureDebutDecoucher', 'time', array('widget' => "single_text", 'label' => 'Heure Debut Découcher'))
                ->add('heureFinDecoucher', 'time', array('widget' => "single_text", 'label' => 'Heure Fin Découcher'))
                ->add('pourcentAssurance', 'percent', array('label' => 'Pourcentage d\'assurance', 'type' => 'integer',
                    'precision' => 2,
                    'attr' => array('min' => '0', 'max' => '100')))
                ->add('alerteDiffKm', null, array("label" => "Différence maximale de Km/Reel", "attr" => array("placeholder" => "Différence maximale de Km/Reel", "title" => "Différence maximale de Km/Reel")))
                //->add('notesAccueil', 'ckeditor', array('input_sync' => true,"label" => "Les Notes Accueil", "attr" => array('cols' => '75%', 'rows' => 10, "placeholder" => "Les notes qui seront affichées sur l'Accueil", "title" => "Notes Accueil")))
                ->add('notesAccueil', 'textarea', array("label" => "Les Notes Accueil", "attr" => array('cols' => '75%', 'rows' => 10, "placeholder" => "Les notes qui seront affichées sur l'Accueil", "title" => "Notes Accueil")))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Parametrage'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_parametrage';
    }

}
