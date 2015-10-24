<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Manutention
 * @ORM\Table(name="manutention")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ManutentionRepository")
 */
class Manutention {

    public function __construct() {
        
    }

    /**
     * @ORM\ManyToOne(targetEntity="FeuilleDeRoute",inversedBy="manutentions")
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     */
    private $feuilleDeRoute;

    /**
     * @var integer
     * @ORM\Column(name="nombreManutentions", type="integer", nullable=true)
     */
    private $nombreManutentions = 0;

    /**
     * @var integer
     * @ORM\Column(name="nombrePrimeNuit", type="integer", nullable=true)
     */
    private $nombrePrimeNuit = 0;

    /**
     * @var integer
     * @ORM\Column(name="nombrePetitDej", type="integer", nullable=true)
     */
    private $nombrePetitDej = 0;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Chauffeur",inversedBy="manutentions")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $chauffeur;

    /**
     * @ORM\ManyToOne(targetEntity="Manutentionnaire",inversedBy="manutentions")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $manutentionnaire;

    public function __toString() {
        if($this->getChauffeur()!=null) return " Chauffeur : ".$this->getChauffeur()->getNom ()." ".$this->getChauffeur()->getPrenom()."(".$this->getChauffeur()->getMatricule().")"."[".$this->nombreManutentions."]";
        else if($this->getManutentionnaire()!=null) return " Manutentionnaire : ".$this->getManutentionnaire()->getNom()." ".$this->getManutentionnaire()->getPrenom()."(".$this->getManutentionnaire()->getMatricule().")"."[".$this->nombreManutentions."]";
        else return "";
    }
    
    public function setDisponibilite($etat){
        if ($this->getChauffeur()!=null and $this->getChauffeur()!="")$this->getChauffeur()->setDisponibilite($etat);
        else if ($this->getManutentionnaire()!=null and $this->getManutentionnaire()!="")$this->getManutentionnaire()->setDisponibilite($etat);
    }
    
    public function isChauffeur(){
        return ($this->getChauffeur()!=null and $this->getChauffeur()!="");
    }
    public function isManutentionnaire(){
        return ($this->getManutentionnaire()!=null and $this->getManutentionnaire()!="");
    }
    
    public function isId(){
        if ($this->isChauffeur()){return $this->getChauffeur()->getId();}
        else if($this->isManutentionnaire()){return $this->getManutentionnaire ()->getId();}
        else {return null;}
    }
    public function getDisponibilite(){
        if ($this->isChauffeur()){return $this->getChauffeur()->getDisponibilite();}
        else if($this->isManutentionnaire()){return $this->getManutentionnaire ()->getDisponibilite();}
        else {return null;}
    }

    /**
     * Set nombreManutentions
     *
     * @param integer $nombreManutentions
     * @return Manutention
     */
    public function setNombreManutentions($nombreManutentions) {
        $this->nombreManutentions = $nombreManutentions;

        return $this;
    }

    /**
     * Get nombreManutentions
     *
     * @return integer 
     */
    public function getNombreManutentions() {
        return $this->nombreManutentions;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return Manutention
     */
    public function setFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute = null) {
        $this->feuilleDeRoute = $feuilleDeRoute;

        return $this;
    }

    /**
     * Get feuilleDeRoute
     *
     * @return \Fdr\AdminBundle\Entity\FeuilleDeRoute 
     */
    public function getFeuilleDeRoute() {
        return $this->feuilleDeRoute;
    }

    /**
     * Set chauffeur
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeur
     * @return Manutention
     */
    public function setChauffeur(\Fdr\AdminBundle\Entity\Chauffeur $chauffeur = null) {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    /**
     * Get chauffeur
     *
     * @return \Fdr\AdminBundle\Entity\Chauffeur 
     */
    public function getChauffeur() {
        return $this->chauffeur;
    }

    /**
     * Set manutentionnaire
     *
     * @param \Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaire
     * @return Manutention
     */
    public function setManutentionnaire(\Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaire = null) {
        $this->manutentionnaire = $manutentionnaire;

        return $this;
    }

    /**
     * Get manutentionnaire
     *
     * @return \Fdr\AdminBundle\Entity\Manutentionnaire 
     */
    public function getManutentionnaire() {
        return $this->manutentionnaire;
    }

    /**
     * Set nombrePrimeNuit
     *
     * @param integer $nombrePrimeNuit
     * @return Manutention
     */
    public function setNombrePrimeNuit($nombrePrimeNuit) {
        $this->nombrePrimeNuit = $nombrePrimeNuit;

        return $this;
    }

    /**
     * Get nombrePrimeNuit
     *
     * @return integer 
     */
    public function getNombrePrimeNuit() {
        return $this->nombrePrimeNuit;
    }


    /**
     * Set nombrePetitDej
     *
     * @param integer $nombrePetitDej
     * @return Manutention
     */
    public function setNombrePetitDej($nombrePetitDej)
    {
        $this->nombrePetitDej = $nombrePetitDej;

        return $this;
    }

    /**
     * Get nombrePetitDej
     *
     * @return integer 
     */
    public function getNombrePetitDej()
    {
        return $this->nombrePetitDej;
    }
}
