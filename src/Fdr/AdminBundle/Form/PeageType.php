<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class PeageType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('datePassage', 'datetime', array('label' => false,'attr'=>array("title" => "Date de passage"),'date_widget' => "single_text", 'time_widget' => "single_text"))                
                ->add('numCarte', null, array('label' => false,"attr" => array("placeholder" => "N° du bon","title" => "N° du bon", 'required' => true)))
               ->add('lieu', null, array('label' => false,"attr" => array("title" => "Lieu","placeholder" => "Lieu de péage", 'required' => true)))
                ->add('montant', 'money', array('attr'=>array("title" => "Montant"),'label' => false,'currency' => 'Dhs', 'precision' => 2, "attr" => array("placeholder" => "Montant", "title" => "Montant")))
        //  ->add('feuilleDeRoute',null,array("placeholder"=>"Choisir la FDR associé","attr"=>array("title"=>"Choisir la FDR associé")))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Peage'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_peage';
    }

}
