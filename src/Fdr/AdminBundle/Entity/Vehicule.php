<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Vehicule
 * @UniqueEntity("matricule",  message ="Ce matricule existe déja.Veuillez choisir un autre")
 * @UniqueEntity("numSociete",  message ="Ce numero de societe existe déja.Veuillez choisir un autre")
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\VehiculeRepository")
 */
class Vehicule {

    public function __construct() {
        $this->feuilleDeRoutes = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="vehicule")
     * @ORM\JoinColumn(nullable=true)
     */
    private $feuilleDeRoutes;

    /**
     * @ORM\ManyToOne(targetEntity="Depot", inversedBy="vehicules")
     *  @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $depot;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remorque", type="boolean", nullable=true)
     */
    private $remorque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean", nullable=true)
     */
    private $disponibilite = true;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="vidange", type="integer", nullable=false)
	 * @Assert\GreaterThanOrEqual(value = 0)
     */
    private $vidange=10000;

    /**
     * @var integer
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="compteur", type="integer", nullable=false)
	 *@Assert\GreaterThanOrEqual(value = 0)
     */
    private $compteur;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="matricule", type="string", length=100, nullable=false,unique=true)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="numSociete", type="string", length=100, nullable=false)
     */
    private $numSociete;
    
    /**
     * @var \DateTime
     * @ORM\Column(name="dateLancement", type="datetime", nullable=true)
     */
    private $dateLancement;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="nombreVidange", type="integer", nullable=true)
     */
    private $nombreVidange=0;

    public function __toString() {
        return $this->numSociete;
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
     * Set type
     *
     * @param string $type
     * @return Vehicule
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set remorque
     *
     * @param boolean $remorque
     * @return Vehicule
     */
    public function setRemorque($remorque) {
        $this->remorque = $remorque;

        return $this;
    }

    /**
     * Get remorque
     *
     * @return boolean 
     */
    public function getRemorque() {
        return $this->remorque;
    }

    /**
     * Set disponibilite
     *
     * @param boolean $disponibilite
     * @return Vehicule
     */
    public function setDisponibilite($disponibilite) {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return boolean 
     */
    public function getDisponibilite() {
        return $this->disponibilite;
    }

    /**
     * Set vidange
     *
     * @param integer $vidange
     * @return Vehicule
     */
    public function setVidange($vidange) {
        $this->vidange = $vidange;

        return $this;
    }

    /**
     * Get vidange
     *
     * @return integer 
     */
    public function getVidange() {
        return $this->vidange;
    }

    /**
     * Set compteur
     *
     * @param integer $compteur
     * @return Vehicule
     */
    public function setCompteur($compteur) {
        $this->compteur = $compteur;

        return $this;
    }

    /**
     * Get compteur
     *
     * @return integer 
     */
    public function getCompteur() {
        return $this->compteur;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Vehicule
     */
    public function setMatricule($matricule) {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule() {
        return $this->matricule;
    }
    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Vehicule
     */
    public function addFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes) {
        $this->feuilleDeRoutes[] = $feuilleDeRoutes;

        return $this;
    }

    /**
     * Remove feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     */
    public function removeFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes) {
        $this->feuilleDeRoutes->removeElement($feuilleDeRoutes);
    }

    /**
     * Get feuilleDeRoutes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeuilleDeRoutes() {
        return $this->feuilleDeRoutes;
    }

    /**
     * Set numSociete
     *
     * @param string $numSociete
     * @return Vehicule
     */
    public function setNumSociete($numSociete) {
        $this->numSociete = $numSociete;

        return $this;
    }

    /**
     * Get numSociete
     *
     * @return string 
     */
    public function getNumSociete() {
        return $this->numSociete;
    }

    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return Vehicule
     */
    public function setDepot(\Fdr\AdminBundle\Entity\Depot $depot) {
        $this->depot = $depot;

        return $this;
    }

    /**
     * Get depot
     *
     * @return \Fdr\AdminBundle\Entity\Depot 
     */
    public function getDepot() {
        return $this->depot;
    }


    /**
     * Set dateLancement
     *
     * @param \DateTime $dateLancement
     * @return Vehicule
     */
    public function setDateLancement($dateLancement)
    {
        $this->dateLancement = $dateLancement;

        return $this;
    }

    /**
     * Get dateLancement
     *
     * @return \DateTime 
     */
    public function getDateLancement()
    {
        return $this->dateLancement;
    }

    /**
     * Set nombreVidange
     *
     * @param integer $nombreVidange
     * @return Vehicule
     */
    public function setNombreVidange($nombreVidange)
    {
        $this->nombreVidange = $nombreVidange;

        return $this;
    }

    /**
     * Get nombreVidange
     *
     * @return integer 
     */
    public function getNombreVidange()
    {
        return $this->nombreVidange;
    }
}
