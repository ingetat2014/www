<?php

namespace Fdr\AdminBundle\Form;

use Fdr\AdminBundle\EventListener\ControllerAffListener;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\Entity\Role;
use Symfony\Component\HttpFoundation\Request;

class MissionAffretementType extends AbstractType {

    protected $role;

    public function __construct($role = null) {
        $this->role = $role;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $request = Request::createFromGlobals();
        $tab = explode("/", $request->server->get('REQUEST_URI')); //etait $tab =explode("/",$_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab, $this->role);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('dateGeneree', 'datetime', array('required' => false,'date_widget' => "single_text", 'time_widget' => "single_text",'read_only' => true, "attr" => array()))
                ->add('ecc')
                ->add('ect')
                ->add('ebl')
                ->add('espece')
                ->add('autredoc', null, array("attr" => array("placeholder" => "Autres ...ex. transpalette", "title" => "Autre document ex. transpalette...")))
                ->add('valdeclassurance', 'money', array('required' => false, 'currency' => 'DHs', 'precision' => 2, 'pattern' => '([0-9]*\.[0-9]+|[0-9]+|[0-9]*\,[0-9]+)', "attr" => array("placeholder" => "Valeur assurance", "title" => "Valeur assurance")))
                ->add('bonlivraison', null, array("attr" => array("placeholder" => "Bon de livraison", "title" => "Bon de livraison")))
                ->add('numexpedition', null, array("attr" => array("placeholder" => "Num. Expédition", "title" => "Numéro d'expdition")))
                ->add('dateramassage', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text", "attr" => array("placeholder" => "Saisir la date de ramassage", "title" => "Saisir la date de ramassage")))
                ->add('lieuramassage', null, array("attr" => array("placeholder" => "Lieu ramassage", "title" => "Lieu de ramassage")))
                ->add('nbrecolis', null, array("attr" => array("placeholder" => "Nombre des colis", "title" => "Nombre des colis")))
                ->add('nombreManutentionVoulu', null, array("attr" => array("placeholder" => "Nombre de Manut.", "title" => "Nombre de Manut.")))
                ->add('naturemarchandise', null, array("attr" => array("placeholder" => "Nature marchandise", "title" => "Nature marchandise")))
                ->add('datelivraison', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text", "attr" => array("placeholder" => "Saisir la date de liivraison", "title" => "Saisir la date de livraison")))
                ->add('lieulivraison', null, array("attr" => array("placeholder" => "Lieu livraison", "title" => "Lieu de livraison")))
                ->add('montantfacture', 'money', array('required'=>false,'currency' => 'DHs', 'precision' => 2, 'pattern' => '([0-9]*\.[0-9]+|[0-9]+|[0-9]*\,[0-9]+)', "attr" => array("placeholder" => "Montant Facturé", "title" => "Montant Facturé")))
                ->add('remise', 'percent', array('precision' => 2, 'required' => false, "attr" => array("placeholder" => "Remise", "title" => "Remise en %")))
                ->add('motifremise', null, array("attr" => array("placeholder" => "Motif de remise", "title" => "Motif de remise")))
                ->add('montantregle')
                ->add('confRecDocClient')
                ->add('confRecDocCtm')
                ->add('nombnq', null, array("attr" => array("placeholder" => "Nom de banque", "title" => "Nom de banque")))
                ->add('numcheque', null, array("attr" => array("placeholder" => "Numéro chèque", "title" => "Numéro chèque")))
                //->add('feuilleDeRoute')
                //->add('client',null,array("placeholder"=>"Choisir un client","attr"=>array("title"=>"Choisir un client")))
                ->add('client', 'entity', array('placeholder' => 'Choisir un Client Affretement',
                    "attr" => array("title" => "Choisir un Client Affretement"),
                    'multiple' => false,
                    'class' => 'FdrAdminBundle:Client',
                    'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('c');
            }))
                ->add('clientDestinataire', null, array("attr" => array("placeholder" => "Client Destinataire", "title" => "client Destinataire")))
                ->add('nomresponsable', null, array("attr" => array("placeholder" => "Nom responsable", "title" => "Nom du responsable")))
                ->add('telresponsable', null, array("attr" => array("placeholder" => "Tel. responsable", "title" => "Tel. du responsable", 'invalid_message' => 'Saisir un numéro de format ex. 0611223344/21206112334455')))
                //->add('tonnage', 'money', array('currency' => 'Tn.', 'precision' => 2,"attr"=>array("placeholder"=>"Tonnage","title"=>"Tonnage")))
                ->add('typeVehicule', 'choice', array(
                    'placeholder' => 'Choisir un type de véhicule',
                    'attr'=>(array("title" => "Choisir un type de véhicule")),
                    'choices' =>
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
        //->add('remarques','textarea',array('required'=>false))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\MissionAffretement',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_missionaffretement';
    }

}
