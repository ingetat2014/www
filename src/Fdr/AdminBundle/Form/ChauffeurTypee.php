<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class ChauffeurType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('nom', null, array("attr" => array("placeholder" => "Nom", "title" => "Nom")))
                ->add('prenom', null, array("attr" => array("placeholder" => "Prenom", "title" => "Prenom")))
                ->add('matricule', null, array("attr" => array("placeholder" => "Matricule", "title" => "Matricule")))
                ->add('tel', null, array("attr" => array("placeholder" => "Tel", "title" => "Tel")))
                ->add('cin', null, array("attr" => array("placeholder" => "CIN", "title" => "CIN")))
                ->add('adresse', null, array("attr" => array("placeholder" => "Adresse", "title" => "Adresse")))
                ->add('disponibilite')
                ->add('conventionne')
                ->add('dateembauche', 'date', array('widget' => "single_text", "attr" => array("placeholder" => "Date d'embauche", "title" => "Date d'embauche")))
                ->add('typeconvention', 'choice', array('choices' => array(
                        'cdd' => 'CDD',
                        'cdi' => 'CDI',
                        'interim' => 'Interim',
                        'autre' => 'Autre.'),
                ))
                ->add('etatContrat', 'choice', array('choices' => array('ouvert' => 'Ouvert', 'resilie' => 'Résilié'), "placeholder" => "Choisir ----", "attr" => array("title" => "Choisir etat contrat")))
                
        // ->add('feuilleDeRoutes')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Chauffeur'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_chauffeur';
    }

}
