<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;
use Doctrine\ORM\EntityRepository;

class FeuilleDeRouteType extends AbstractType {

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
        if ($this->role) {
            $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
            $builder->addEventSubscriber($subscriber);
            $builder
                    ->add('dateGeneree', 'datetime', array('required' => false,'date_widget' => "single_text", 'time_widget' => "single_text",'read_only' => true))
                    ->add('dateDebutMission', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text", "attr" => array("onchange" => "return fdr_panne();")))
                    ->add('dateFinMission', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"))
                    ->add('manutentions', 'collection', array(
                        // 'disabled'=>(!$this->role->getAffectationChauffManu()),
                        'type' => new ManutentionType(),
                        'allow_add' => true,
                        'allow_delete' => true,
                        'by_reference' => false,
                    ))
                    ->add('nombreManutention', null, array('attr' => array("placeholder" => "Nombre des manutentions")))
                    ->add('nomManExterne1', null, array('attr' => array("placeholder" => "Nom Man. Ext1")))
                    ->add('cinManExterne1', null, array('attr' => array("placeholder" => "CIN Man. Ext1")))
                    ->add('nomManExterne2', null, array('attr' => array("placeholder" => "Nom Man. Ext2")))
                    ->add('cinManExterne2', null, array('attr' => array("placeholder" => "CIN Man. Ext2")))
                    ->add('compteurReel', null, array('attr' => array('placeholder' => 'Compteur réel',"onchange" => "return differencierCompteur();")))
                    ->add('clients', 'entity', array('placeholder' => 'Choisir un client',
                        'validation_groups' => false,
                        'by_reference' => false,
                        'required' => false,
                        'mapped' => false,
                        "attr" => array(
                            'label' => 'Clients : ',
                            "title" => "Choisir un(des) client(s)",
                            "class" => "expanded"),
                        'multiple' => true,
                        'expanded' => true,
                        'class' => 'FdrAdminBundle:Client',
                        'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                            ->where('c.clientramass=-10');
                }))
                    ->add('peages', 'collection', array(
                        'label'=>false,
                        'type' => new PeageType(),
                        'allow_add' => true,
                        'allow_delete' => true,
                    ))
                    ->add('bonCarburantHuiles', 'collection', array(
                        'label'=>false,
                        'type' => new BonCarburantHuileType(),
                        'allow_add' => true,
                        'allow_delete' => true,
                    ))
                    ->add('compteurFinal', null, array())
                    ->add('etat', null, array('disabled' => true))
                    ->add('calcDiffKm', null, array('disabled' => true))
                    ->add('calcKmParcourus', null, array('disabled' => true))
                    ->add('calcNbRepas', null, array('disabled' => true))
                    ->add('calcNbPetitDej', null, array('disabled' => true))
                    ->add('calcNbDecoucher', null, array('disabled' => true))
                    ->add('calcQuantite', null, array('disabled' => true))
                    ->add('calcMontantCarburant', null, array('disabled' => true))
                    ->add('calcMontantPeage', null, array('disabled' => true))
                    ->add('calcNbJours', null, array('disabled' => true))
                    ->add('primeRemorque', null, array('disabled' => true))
                    ->add('remarques', null, array('disabled' => false))
                    ->add('missionAffretement', null, array('disabled' => true, 'attr' => array()))
                    ->add('vehicule', null, array('required' => true,"placeholder" => "Choisir un véhicule", "attr" => array("title" => "Choisir un véhicule","onchange" => "chargerCompteur();")))
                    ->add('typePrestation', null, array('required' => true,"placeholder" => "Choisir un type", "attr" => array("title" => "Choisir un type","onchange" => "changerPrestation();", "required" => true)))
                    ->add('secteurs', null, array("placeholder" => "Choisir les secteurs", "attr" => array("onchange" => "changerClient();")))
                    ->add('user', null, array('disabled' => true))
                    ->add('dateClotureMission', 'datetime', array('disabled' => true, 'label' => false, 'date_widget' => "single_text", 'time_widget' => "single_text", 'read_only' => true, 'disabled' => true))
                    ->add('filiale', null, array('required' => true,"placeholder" => "Choisir la filiale","attr" => array('required' => true,"onchange" => "changerFiliale();")))
                    ->add('depot', null, array("placeholder" => "Choisir le depôt ", 'required' => true, "attr" => array('required' => true,"label" => false)))
                    ->add('Enregistrer', 'submit', array("attr" => array("onclick" => "return verifCompteursDatesCloture();")))
                   ->add('param_diff_km', 'entity', array(
                        'validation_groups' => false,
                        'by_reference' => false,
                        'required' => false,
                       'property' => 'alerteDiffKm',
                        'mapped' => false,
                        'class' => 'FdrAdminBundle:Parametrage',
                        'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('c');
                }))
                ->add('fdr_panne', 'text', array('data'=>$this->role->getCrFDRPanne(), 'mapped' => false))
                ->add('fdrInstance' ,null, array('attr'=>array("placeholder" => "Choisir le depôt ","title" => "Choisir le depôt ")))

            ;
        }
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\FeuilleDeRoute',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_feuillederoute';
    }

}
