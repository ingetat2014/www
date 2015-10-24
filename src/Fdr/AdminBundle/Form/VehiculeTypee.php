<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class VehiculeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('numSociete')
                ->add('type', 'choice', array('choices' =>
                    array('utilitaire_ctm' => 'Utilitaire CTM',
                        'utilitaire_budget' => 'Utilitaire Budget',
                        'fourgons_budget' => 'Fourgons Budget',
                        'fourgons_ctm' => 'Fourgons CTM',
                        'camions_5_5t' => 'Camions 5.5T',
                        'camions_7t' => 'Camions 7T',
                        'camions_8t' => 'Camions 8T',
                        'camions_16t' => 'Camions 16T',
                        'camions_17t' => 'Camions 17T',
                        'camions_19t' => 'Camions 19T',
                        'tracteur_routier' => 'Tracteur Routier',
                    )
                ))
                ->add('remorque')
                ->add('dateLancement', 'date', array('widget' => "single_text", "attr" => array("placeholder" => "Date de Lancement", "title" => "Date de Lancement")))
                ->add('disponibilite')
                ->add('vidange', 'money', array('currency' => 'Km.', 'precision' => 0, "attr" => array("placeholder" => "10000", "title" => "Vidange")))
                ->add('compteur', 'money', array('currency' => 'Km.', 'precision' => 0, "attr" => array("placeholder" => "5000", "title" => "Compteur actuel")))
                ->add('matricule')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Vehicule'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_vehicule';
    }

}
