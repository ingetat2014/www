<?php

namespace Fdr\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fdr\AdminBundle\EventListener\ControllerAffListener;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;

class ManutentionType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * 
     * 
     */
    public function __construct($entitie=null) {
        $this->entitie=$entitie;
    }
    private $disponibilite=0;
    private $etatContrat='%';
    private $entitie=null;
    private $cndChauffeur=null;
    private $cndManutentionnaire=null;
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
       /* etait*/ $tab = explode("/", $_SERVER["REQUEST_URI"]);
        //$request = Request::createFromGlobals();
        //$tab = explode("/", $request->server->get('REQUEST_URI')); //etait $tab =explode("/",$_SERVER["REQUEST_URI"]);
        
         $this->disponibilite=((($tab[count($tab) - 1] == "cloture") or ($tab[count($tab) - 1] == "editdebut"))?0:1);
         $this->etatContrat=((($tab[count($tab) - 1] == "cloture") or ($tab[count($tab) - 1] == "editdebut"))?"%":"ouvert"); 
         $cndsC=null;
         $cndsM=null;   
        if($this->entitie!=null){
             if(count($this->entitie->getManutentions())>0){
         foreach ($this->entitie->getManutentions() as $value) {
             if($value!=null){
             if($value->isChauffeur()){
                 $cndsC .="c.id=".$value->isId()."-";
             }
             else if($value->isManutentionnaire()){
                  $cndsM .="c.id=".$value->isId()."-";
             }
             }
         }
        $cndsC = explode("-", $cndsC,-1);
        if(count($cndsC)>0) {
            $this->cndChauffeur = implode(" or ", $cndsC);
            $this->cndChauffeur .=" or c.disponibilite = 1";
        }
        $cndsM = explode("-", $cndsM,-1);
        if(count($cndsM)>0){
            $this->cndManutentionnaire = implode(" or ", $cndsM);
            $this->cndManutentionnaire .=" or c.disponibilite = 1";}
             }
        }
        // $this->cndChauffeur 
        $subscriber = new ControllerAffListener($builder->getFormFactory(), $tab);
        $builder->addEventSubscriber($subscriber);
        $builder
                ->add('manOuChauff', 'choice', array(
                    'attr' => array('required' => false, 'onchange' => 'changerManOuChauff(this.id)'), 'mapped' => false, 'label' => false,
                    'placeholder' => 'Chauffeur ou Manutentionnaire ?',
                    'choices' => array('chauffeur' => 'Chauffeur', 'manutentionnaire' => 'Manutentionnaire')));
                
                if(false /*and ($tab[count($tab) - 1] == "cloture" or $tab[count($tab) - 1] == "editdebut")*/){
                $builder->add('chauffeur', null, array('required' => false, 'attr' => array(), 'label' => false, 'placeholder' => 'Choisir chauffeur'))
                        ->add('manutentionnaire', null, array('required' => false, 'attr' => array(), 'label' => false, 'placeholder' => 'Choisir manutentionnaire'));               
                }
                else{
                    $builder->add('chauffeur', 'entity', array('required'=>false,'placeholder'=>'Choisir chauffeur','label'=>false,
                                                   "attr"=>array("title"=>"Choisir chauffeur",'onchange'=>'changerAttrSelectedChauffeur(this.id)'),
                                                   'class' => 'FdrAdminBundle:Chauffeur',
                                                   'query_builder' => function(EntityRepository $er) {
                                                                         return $er->createQueryBuilder('c')
                                                                                 ->where($this->cndChauffeur?$this->cndChauffeur:"c.disponibilite=1")
                                                                                 //->orWhere("c.disponibilite = 1")
                                                                                 //->andwhere('c.etatContrat=:etatContrat')
                                                                                 //->setParameter('id',1)
                                                                                 //->setParameter('etatContrat','ouvert')
                                                                                 ;
                                                                                     }))
                    ->add('manutentionnaire', 'entity', array('required'=>false,'placeholder'=>'Choisir manutentionnaire','label'=>false,
                                                   "attr"=>array("title"=>"Choisir manutentionnaire"),
                                                   'class' => 'FdrAdminBundle:Manutentionnaire',
                                                   'query_builder' => function(EntityRepository $er) {
                                                                         return $er->createQueryBuilder('c')
                                                                                 ->where($this->cndManutentionnaire?$this->cndManutentionnaire:"c.disponibilite=1")
                                                                                // ->orWhere("c.disponibilite = 1")
                                                                                 //->andwhere('c.etatContrat=:etatContrat')
                                                                                 //->setParameter('etatContrat','ouvert')
                                                                                 ;
                                                                                     }));
                 }
                 $builder->add('ayantManutentions', 'checkbox', array('required' => false,
                    'attr' => array('title' => 'cette case cache/affiche le nombre des manutentions', 'onclick' => 'ayantManutention(this.id)'),
                    'mapped' => false, 'label' => false))
                 ->add('nombreManutentions', null, array('label' => false, 'attr' => array('placeholder' => 'Nbre manutentions', 'required' => false)));
                
          
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fdr\AdminBundle\Entity\Manutention',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fdr_adminbundle_manutention';
    }

}
