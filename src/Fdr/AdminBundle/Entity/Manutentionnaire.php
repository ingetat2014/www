<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Manutentionnaire
 * @UniqueEntity("cin",  message ="Ce cin existe déja.")
 * @UniqueEntity("matricule",  message ="Ce matricule existe déja.")
 * @ORM\Table(name="manutentionnaire")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ManutentionnaireRepository")
 */
class Manutentionnaire {

    public function __construct() {
        $this->manutentions = new ArrayCollection();
    }

    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Depot", inversedBy="manutentionnaires")
     *  @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $depot;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="matricule", type="string", length=100, nullable=true)
     */
    private $matricule;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean", nullable=true)
     */
    private $disponibilite = true;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alpha", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="cin", type="string", length=100, nullable=false,unique=true)
     */
    private $cin;

    /**
     * @var string
     * @Assert\Regex("/[\d\-\ ]+/")
     * @Assert\Length(min = "10")
     * @ORM\Column(name="tel", type="string", length=100, nullable=true)
     */
    private $tel;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity="Manutention",mappedBy="manutentionnaire",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $manutentions;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="etatContrat", type="string", length=100, nullable=false)
     */
    private $etatContrat;

    /**
     * Constructor
     */
    public function __toString() {
        return $this->matricule . "(" . $this->nom . " " . $this->prenom . ")";
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
     * Set nom
     *
     * @param string $nom
     * @return Manutentionnaire
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Manutentionnaire
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Manutentionnaire
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
     * Set type
     *
     * @param string $type
     * @return Manutentionnaire
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
     * Set cin
     *
     * @param string $cin
     * @return Manutentionnaire
     */
    public function setCin($cin) {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin() {
        return $this->cin;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Manutentionnaire
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Manutentionnaire
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse() {
        return $this->adresse;
    }
    /**
     * Add manutentions
     *
     * @param \Fdr\AdminBundle\Entity\Manutention $manutentions
     * @return Manutentionnaire
     */
    public function addManutention(\Fdr\AdminBundle\Entity\Manutention $manutentions) {
        $this->manutentions[] = $manutentions;

        return $this;
    }

    /**
     * Remove manutentions
     *
     * @param \Fdr\AdminBundle\Entity\Manutention $manutentions
     */
    public function removeManutention(\Fdr\AdminBundle\Entity\Manutention $manutentions) {
        $this->manutentions->removeElement($manutentions);
    }

    /**
     * Get manutentions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getManutentions() {
        return $this->manutentions;
    }

    /**
     * Set disponibilite
     *
     * @param boolean $disponibilite
     * @return Manutentionnaire
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
     * Set etatContrat
     *
     * @param string $etatContrat
     * @return Manutentionnaire
     */
    public function setEtatContrat($etatContrat) {
        $this->etatContrat = $etatContrat;

        return $this;
    }

    /**
     * Get etatContrat
     *
     * @return string 
     */
    public function getEtatContrat() {
        return $this->etatContrat;
    }

    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return Manutentionnaire
     */
    public function setDepot(\Fdr\AdminBundle\Entity\Depot $depot = null) {
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

}
