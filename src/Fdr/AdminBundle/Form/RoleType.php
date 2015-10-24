<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;

class RoleType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tab = explode("/", $_SERVER["REQUEST_URI"]);
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('nomRole')
                ->add('description', 'textarea', array('required' => false, "attr" => array("title" => "Veuillez saisir une description pour vous simplifier la lisibilité", "placeholder" => "Ex. C'est un Administrateur / Operationnel / Commercial/ etc...", "cols" => 40, "rows" => 7)))
                ->add('crudAdmin', 'checkbox', array('mapped' => false, 'required' => false, 'label' => '(Dés)Administrer', 'attr' => array('title' => 'Cocher pour administrer')))
                ->add('affFDR')
                ->add('crFDR')
                ->add('upFDR')
                ->add('delFDR')
                ->add('cancelFDR')
                ->add('imprimerFDR')
                ->add('rechercherFDR')
                ->add('affFDRPanne')
                ->add('crFDRPanne')
                ->add('upFDRPanne')
                ->add('delFDRPanne')
                ->add('affFDRAutrAgence')
                ->add('crFDRAutrAgence')
                ->add('upFDRAutrAgence')
                ->add('delFDRAutrAgence')
                ->add('imprimerFDL')
                ->add('rechercherFDL')
                ->add('ttEtatAfficherParFdl')
                ->add('crClientCompeFDL')
                ->add('affClientCompeFDL')
                ->add('upClientCompeFDL')
                ->add('delClientCompeFDL')
                ->add('cancelClientCompeFDL')
                ->add('crClientNnCompeFDL')
                ->add('affClientNnCompeFDL')
                ->add('upClientNnCompeFDL')
                ->add('delClientNnCompeFDL')
                ->add('cancelClientNnCompeFDL')
                ->add('affectationVehicule')
                ->add('affectationChauffManu')
                ->add('cloturerFDR')
                ->add('upCloturerFDR')
                ->add('cloturerFDRAffr')
                ->add('upCloturerFDRAffr')
                ->add('confRecDocCtm')
                ->add('confRecDocClient')
                ->add('editCompteur')
                ->add('affClient')
                ->add('crClient')
                ->add('upClient')
                ->add('delClient')
                ->add('affVehicule')
                ->add('crVehicule')
                ->add('upVehicule')
                ->add('delVehicule')
                ->add('affChauffeur')
                ->add('crChauffeur')
                ->add('upChauffeur')
                ->add('delChauffeur')
                ->add('affUtilisateur')
                ->add('crUtilisateur')
                ->add('upUtilisateur')
                ->add('delUtilisateur')
                ->add('affDepot')
                ->add('crDepot')
                ->add('upDepot')
                ->add('delDepot')
                ->add('affFiliale')
                ->add('crFiliale')
                ->add('upFiliale')
                ->add('delFiliale')
                ->add('affManutentionnaire')
                ->add('crManutentionnaire')
                ->add('upManutentionnaire')
                ->add('delManutentionnaire')
                ->add('affIndisponibilite')
                ->add('crIndisponibilite')
                ->add('upIndisponibilite')
                ->add('delIndisponibilite')
                ->add('affSecteur')
                ->add('crSecteur')
                ->add('upSecteur')
                ->add('delSecteur')
                ->add('affTypePrestation')
                ->add('crTypePrestation')
                ->add('upTypePrestation')
                ->add('delTypePrestation')
                ->add('affTypeConsommation')
                ->add('crTypeConsommation')
                ->add('upTypeConsommation')
                ->add('delTypeConsommation')
                ->add('affBonCarburantHuile')
                ->add('crBonCarburantHuile')
                ->add('upBonCarburantHuile')
                ->add('delBonCarburantHuile')
                ->add('affPeage')
                ->add('crPeage')
                ->add('upPeage')
                ->add('delPeage')
                ->add('affVille')
                ->add('crVille')
                ->add('upVille')
                ->add('delVille')
                ->add('affRole')
                ->add('crRole')
                ->add('upRole')
                ->add('delRole')
                ->add('affModification')
                ->add('delModification')
                ->add('editerPercentAssurParam')
                ->add('editerPlageHoraireParam')
                ->add('reporting')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Role'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_role';
    }

}
