<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;
use Fdr\AdminBundle\Entity\DepotRepository;

class TypeConsommationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('type', 'choice', array('choices' => array('interne' => 'Interne', 'total' => 'Total'), "placeholder" => "Choisir le type",
                    "attr" => array("onchange" => "afficherVille()")
                ))
                //->add('depot',null,array("placeholder" => "Choisir une agence"))
                ->add('depot', 'entity', array(
                    "placeholder" => "Choisir une agence",
                    'label' => 'Agence',
                    'class' => 'Fdr\AdminBundle\Entity\Depot',
                    'query_builder' => function(DepotRepository $dr) {
                return $dr->getDepots();
            },
                    "attr" => array("onchange" => "chargerVille()")
                ))
                ->add('ville', null, array('required'=>true,'placeholder' => 'Choisir la ville'))
                ->add('produit', 'choice', array("placeholder" => "Choisir le produit", 'choices' => array('gazoil' => 'Gazoil', 'essence' => 'Essence')))
                ->add('prixUnitaire', 'money', array('attr' => array('placeholder' => 'Saisir le P.U.'), 'currency' => 'Dhs', 'precision' => 2))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\TypeConsommation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_typeconsommation';
    }

}
