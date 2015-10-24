<?php

namespace Fdr\AdminBundle\EventListener;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ControllerAffListener implements EventSubscriberInterface {

    private $factory;
    private $tab;
    private $role;
    private $champSupp;

    public function __construct(FormFactoryInterface $factory, $tab = null, $role = null) {
        $this->factory = $factory;
        $this->tab = $tab;
        $this->role = $role;
    }

    public static function getSubscribedEvents() {
        // Tells the dispatcher that you want to listen on the form.pre_set_data
        // event and that the preSetData method should be called.
        return array(FormEvents::PRE_SET_DATA => 'preSetData');
    }

    public function preSetData(FormEvent $event) {
        $data = $event->getData();
        $form = $event->getForm();
        if (null === $data) {
            return;
        }
        if ($data->getId() and $this->tab[count($this->tab) - 1] == "show") {
            $form->add($this->factory->createNamed('id', 'text', null, array("auto_initialize" => false, "attr" => array("disabled" => true, "Label" => "Id", "placeholder" => "Identifiant ", "title" => "Identifiant"))));
        }
        if ($data->getId() and $this->tab[count($this->tab) - 1] == "apercu" and $this->tab[count($this->tab) - 3] == "missionaffretement") {
            $form->add($this->factory->createNamed('etat', 'text', null, array("auto_initialize" => false, "attr" => array("disabled" => true, "Label" => "Etat", "placeholder" => " ", "title" => " "))));
        }
        if ($this->tab[count($this->tab) - 2] == "missionaffretement" or $this->tab[count($this->tab) - 3] == "missionaffretement") {

            if ($this->tab[count($this->tab) - 1] == "new") {
                /*                 * ***Recemment */
                if ($this->role) {
                    $this->champSupp = ($this->role->getCrClientCompeFDL() and $this->role->getCrClientNnCompeFDL()) ? ">=0" : (($this->role->getCrClientCompeFDL()) ? ">0" : "<1");
                    $form->add($this->factory->createNamed('client', 'entity', null, array('placeholder' => 'Choisir un Client Affretement',
                                "auto_initialize" => false,
                                "attr" => array("title" => "Choisir un Client Affretement"),
                                'multiple' => false,
                                'class' => 'FdrAdminBundle:Client',
                                'query_builder' => function(EntityRepository $er) {
                            return $er->createQueryBuilder('c')
                                            ->where('c.clientaffret=1')
                                            ->andwhere('c.encompte' . $this->champSupp)
                            ;
                        })));
                }
            } else if ($data->getId() and $this->tab[count($this->tab) - 1] == "show") {
                $form->add($this->factory->createNamed('etat', 'text', null, array("auto_initialize" => false, "attr" => array("disabled" => true, "Label" => "Etat", "placeholder" => " ", "title" => " "))));
            } else if ($data->getId() and $this->tab[count($this->tab) - 1] == "edit") {
                if ($this->role) {
                    $this->champSupp = ($this->role->getCrClientCompeFDL() and $this->role->getCrClientNnCompeFDL()) ? ">=0" : (($this->role->getCrClientCompeFDL()) ? ">0" : "<1");
                    $form->add($this->factory->createNamed('client', 'entity', null, array('placeholder' => 'Choisir un Client Affretement',
                                "auto_initialize" => false,
                                "attr" => array("title" => "Choisir un Client Affretement"),
                                'multiple' => false,
                                'class' => 'FdrAdminBundle:Client',
                                'query_builder' => function(EntityRepository $er) {
                            return $er->createQueryBuilder('c')
                                            ->where('c.clientaffret=1')
                                            ->andwhere('c.encompte' . $this->champSupp)
                            ;
                        })));
                }
            }
        }
         if ($this->tab[count($this->tab) - 2] == "feuillederoute" or $this->tab[count($this->tab) - 3] == "feuillederoute") {

          if ($this->tab[count($this->tab) - 1] == "new") {
          }
          else if ($data->getId() and $this->tab[count($this->tab) - 1] == "show") {

          }
          else if ($data->getId() and $this->tab[count($this->tab) - 1] == "edit") {

          }
          } 
    }

}
