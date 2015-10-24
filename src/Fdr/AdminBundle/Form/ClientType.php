<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class ClientType extends AbstractType {

    protected $role;

    public function __construct($role = null) {
        $this->role = $role;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('tel', null, array("attr" => array("placeholder" => "Téléphone", "title" => "Téléphone")))
                ->add('adresse', null, array("attr" => array("placeholder" => "Adresse", "title" => "Adresse")))
                ->add('cin', null, array("attr" => array("placeholder" => "CIN", "title" => "CIN")))
                ->add('email', null, array("attr" => array("placeholder" => "Email", "title" => "Email")))
                ->add('fax', null, array("attr" => array("placeholder" => "Fax", "title" => "Fax")))
                ->add('nomentreprise', null, array("attr" => array("placeholder" => "Nom d'entreprise", "title" => "Nom d'entreprise")))
                ->add('clientaffret')
                ->add('clientramass')
                ->add('numcompte', null, array("attr" => array("placeholder" => "Num. compte", "title" => "Num. compte")))
                ->add('secteurs')
                ->add('ville', null, array('required' => false, "placeholder" => "Choisir la ville", "attr" => array("title" => "Choisir la ville")))

        ;
        if ($this->role) {
            if ($this->role->getCrClientCompeFDL() and $this->role->getCrClientNnCompeFDL() or  $this->role->getCrClient()) {
                $builder->add('encompte');
            }
        }
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_client';
    }

}
