<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class ModificationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('motifs', null, array("attr" => array("placeholder" => "Libelle", "title" => "Libelle")))
                ->add('dateMaj', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
                ->add('remarque', 'textarea', array('required' => false))
                ->add('user')
                ->add('feuilleDeRoute')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Modification'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_modification';
    }

}
