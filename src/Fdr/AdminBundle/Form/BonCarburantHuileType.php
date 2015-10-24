<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;
use Fdr\AdminBundle\Entity\VilleRepository;
use \Fdr\AdminBundle\Entity\TypeConsommationRepository;

class BonCarburantHuileType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('date', 'datetime', array('label' => false, 'attr' => array('label' => false,"title" => "Date de prise"), 'date_widget' => "single_text", 'time_widget' => "single_text"))
                ->add('numcarte', null, array('required' => true,'label' => false, "attr" => array("placeholder" => "N° du bon", "title" => "N° du bon", 'required' => true)))
                ->add('ville', 'entity', array(
                    'label' => false,
                    'class' => 'Fdr\AdminBundle\Entity\Ville',
                    'query_builder' => function(VilleRepository $vr) {
                return $vr->villes();
            },
                    "attr" => array("onchange" => "changerTypeIntExt(this.id);", "title" => "Choisir la ville"),
                    "placeholder" => "Choisir la ville",
                ))
                ->add('type', 'choice', array('required' => true,'label' => false, 'choices' => array('interne' => 'Interne', 'total' => 'Total'), "placeholder" => "Choisir le type", "attr" => array("onchange" => "changerTypeIntExt(this.id)", "title" => "type carburant")))
                ->add('typeConsommation', 'entity', array('label' => false, 'placeholder' => 'Choisir un type de Consommation', 'attr' => array("title" => "Type Consommation"),
                    'multiple' => false,
                    'class' => 'FdrAdminBundle:typeConsommation',
                    'query_builder' => function(TypeConsommationRepository $tr) {
                return $tr->createQueryBuilder('t');
            }))
                ->add('quantite', 'money', array('required' => true,'label' => false, 'currency' => 'Lit', 'precision' => 2, "attr" => array("title" => "Quantité de bonCarburant", "placeholder" => "Quantité de bonCarburant", "onchange" => "calculerMontant(this.id)")))
                ->add('prixUnitaire', 'money', array('required' => true,'label' => false, 'attr' => array('placeholder' => 'Saisir le P.U.', 'title' => 'Saisir le P.U.'), 'currency' => 'Dhs', 'precision' => 2))
                ->add('montant', 'money', array('required' => true,'label' => false, 'currency' => 'Dhs', 'precision' => 2, "attr" => array("title" => "Montant de bonCarburant", "placeholder" => "Montant de bonCarburant", "title" => "Montant de bonCarburant")))
                
                ->add('compteur', 'money', array('required' => true,'label' => false, 'currency' => 'Km.', 'precision' => 0, "attr" => array("title" => "Compteur avant le plein", "placeholder" => "Compteur avant le plein", "title" => "Compteur avant le plein")))

        //->add('feuilleDeRoute',null,array("placeholder"=>"Choisir la FDR associé","attr"=>array("title"=>"Choisir la FDR associé")))


        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\BonCarburantHuile'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_boncarburanthuile';
    }

}
