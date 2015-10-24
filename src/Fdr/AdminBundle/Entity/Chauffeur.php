<?php

namespace Fdr\AdminBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Chauffeur
 * @UniqueEntity("matricule",  message ="Ce matricule existe déja.Veuillez choisir un autre")
 * @ORM\Table(name="chauffeur")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ChauffeurRepository")
 * @UniqueEntity("cin",  message ="Ce cin existe déja.")
 */
class Chauffeur {

    public function __construct() {
        $this->indisponibilites = new ArrayCollection();
        $this->dateembauche = new \Datetime();
        $this->manutentions = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Manutention",mappedBy="chauffeur",orphanRemoval=true,cascade={"all"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $manutentions; //just persist

    /**
     * @ORM\ManyToOne(targetEntity="Depot", inversedBy="chauffeurs")
     *  @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $depot;

    /**
     * @ORM\OneToMany(targetEntity="Indisponibilite",mappedBy="chauffeur",orphanRemoval=true,cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $indisponibilites;

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
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     *  @Assert\NotBlank()
     */
    private $nom;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     *  @Assert\NotBlank()
     */
    private $prenom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="matricule", type="string", length=100, nullable=false,unique=true)
     */
    private $matricule;

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
     * @ORM\Column(name="cin", type="string", length=100, nullable=false, unique=true)
     *  @Assert\NotBlank()
     */
    private $cin;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateembauche", type="date", nullable=false)
     *  @Assert\NotBlank()
     */
    private $dateembauche;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean", nullable=true)
     */
    private $disponibilite = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conventionne", type="boolean", nullable=true)
     */
    private $conventionne=false;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="typeconvention", type="string", length=100, nullable=false)
     */
    private $typeconvention;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="etatContrat", type="string", length=100, nullable=false)
     */
    private $etatContrat;

    public function __toString() {
//        return $this->nom." ".$this->prenom ;
        return $this->matricule . " (" . $this->nom . " " . $this->prenom . ")";
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
     * @return Chauffeur
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
     * @return Chauffeur
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
     * Set tel
     *
     * @param string $tel
     * @return Chauffeur
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
     * Set cin
     *
     * @param string $cin
     * @return Chauffeur
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
     * Set adresse
     *
     * @param string $adresse
     * @return Chauffeur
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
     * Set dateembauche
     *
     * @param \DateTime $dateembauche
     * @return Chauffeur
     */
    public function setDateembauche($dateembauche) {
        $this->dateembauche = $dateembauche;

        return $this;
    }

    /**
     * Get dateembauche
     *
     * @return \DateTime 
     */
    public function getDateembauche() {
        return $this->dateembauche;
    }

    /**
     * Set disponibilite
     *
     * @param boolean $disponibilite
     * @return Chauffeur
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
     * Set typeconvention
     *
     * @param string $typeconvention
     * @return Chauffeur
     */
    public function setTypeconvention($typeconvention) {
        $this->typeconvention = $typeconvention;

        return $this;
    }

    /**
     * Get typeconvention
     *
     * @return string 
     */
    public function getTypeconvention() {
        return $this->typeconvention;
    }
    /**
     * Set etatContrat
     *
     * @param string $etatContrat
     * @return Chauffeur
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
     * Add manutentions
     *
     * @param \Fdr\AdminBundle\Entity\Manutention $manutentions
     * @return Chauffeur
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
     * Add indisponibilites
     *
     * @param \Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites
     * @return Chauffeur
     */
    public function addIndisponibilite(\Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites) {
        $this->indisponibilites[] = $indisponibilites;

        return $this;
    }

    /**
     * Remove indisponibilites
     *
     * @param \Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites
     */
    public function removeIndisponibilite(\Fdr\AdminBundle\Entity\Indisponibilite $indisponibilites) {
        $this->indisponibilites->removeElement($indisponibilites);
    }

    /**
     * Get indisponibilites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIndisponibilites() {
        return $this->indisponibilites;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Chauffeur
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
     * Set conventionne
     *
     * @param boolean $conventionne
     * @return Chauffeur
     */
    public function setConventionne($conventionne) {
        $this->conventionne = $conventionne;

        return $this;
    }

    /**
     * Get conventionne
     *
     * @return boolean 
     */
    public function getConventionne() {
        return $this->conventionne;
    }

    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return Chauffeur
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
