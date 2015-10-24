<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Depot
 * @ORM\Table(name="depot")
 * @UniqueEntity("libelle",  message ="Cette libelle existe déja.Veuillez choisir une autre")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\DepotRepository")
 */
class Depot {

    public function __construct() {
        $this->users = new ArrayCollection();
        $this->typeConsommations = new ArrayCollection();
        $this->feuilleDeRoutes = new ArrayCollection();
        $this->chauffeurs = new ArrayCollection();
        $this->manutentionnaires = new ArrayCollection();
        $this->vehicules = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="Fdr\AdminBundle\Entity\Filiale",inversedBy="depots")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     * @Assert\NotBlank()
     */
    private $filiale; //remove

    /**
     * @ORM\OneToMany(targetEntity="TypeConsommation",mappedBy="depot",orphanRemoval=true,cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $typeConsommations;

    /**
     * @ORM\ManyToOne(targetEntity="Ville", cascade={"remove"},inversedBy="depots")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     * @Assert\NotBlank()
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="depot")
     * @ORM\JoinColumn(nullable=true)
     */
    private $feuilleDeRoutes;

    /**
     * @ORM\OneToMany(targetEntity="Vehicule",mappedBy="depot")
     * @ORM\JoinColumn(nullable=true)
     */
    private $vehicules;

    /**
     * @ORM\OneToMany(targetEntity="Chauffeur",mappedBy="depot")
     * @ORM\JoinColumn(nullable=true)
     */
    private $chauffeurs;

    /**
     * @ORM\OneToMany(targetEntity="Manutentionnaire",mappedBy="depot")
     * @ORM\JoinColumn(nullable=true)
     */
    private $manutentionnaires;

    /**
     * @ORM\OneToMany(targetEntity="Fdr\UserBundle\Entity\User",mappedBy="depot")
     * @ORM\JoinColumn(nullable=true)
     */
    private $users;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="libelle", type="string", length=100,nullable=false, unique=true)
     */
    private $libelle;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="station", type="string", length=100,nullable=false)
     */
    private $station;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Depot
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Depot
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
     * Set filiale
     *
     * @param \Fdr\AdminBundle\Entity\Filiale $filiale
     * @return Depot
     */
    public function setFiliale(\Fdr\AdminBundle\Entity\Filiale $filiale) {
        $this->filiale = $filiale;

        return $this;
    }

    /**
     * Get filiale
     *
     * @return \Fdr\AdminBundle\Entity\Filiale 
     */
    public function getFiliale() {
        return $this->filiale;
    }

    public function __toString() {
        return $this->libelle."-".$this->filiale."(".$this->ville.")";
    }

    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Depot
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
     * Set station
     *
     * @param string $station
     * @return Depot
     */
    public function setStation($station) {
        $this->station = $station;

        return $this;
    }

    /**
     * Get station
     *
     * @return string 
     */
    public function getStation() {
        return $this->station;
    }

    /**
     * Add typeConsommations
     *
     * @param \Fdr\AdminBundle\Entity\Depot $typeConsommations
     * @return Depot
     */
    public function addTypeConsommation(\Fdr\AdminBundle\Entity\Depot $typeConsommations) {
        $this->typeConsommations[] = $typeConsommations;

        return $this;
    }

    /**
     * Remove typeConsommations
     *
     * @param \Fdr\AdminBundle\Entity\Depot $typeConsommations
     */
    public function removeTypeConsommation(\Fdr\AdminBundle\Entity\Depot $typeConsommations) {
        $this->typeConsommations->removeElement($typeConsommations);
    }

    /**
     * Get typeConsommations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypeConsommations() {
        return $this->typeConsommations;
    }

    /**
     * Add users
     *
     * @param \Fdr\UserBundle\Entity\User $users
     * @return Depot
     */
    public function addUser(\Fdr\UserBundle\Entity\User $users) {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Fdr\UserBundle\Entity\User $users
     */
    public function removeUser(\Fdr\UserBundle\Entity\User $users) {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers() {
        return $this->users;
    }

    /**
     * Set ville
     *
     * @param \Fdr\AdminBundle\Entity\Ville $ville
     * @return Depot
     */
    public function setVille(\Fdr\AdminBundle\Entity\Ville $ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Fdr\AdminBundle\Entity\Ville 
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Add vehicules
     *
     * @param \Fdr\AdminBundle\Entity\Vehicule $vehicules
     * @return Depot
     */
    public function addVehicule(\Fdr\AdminBundle\Entity\Vehicule $vehicules) {
        $this->vehicules[] = $vehicules;

        return $this;
    }

    /**
     * Remove vehicules
     *
     * @param \Fdr\AdminBundle\Entity\Vehicule $vehicules
     */
    public function removeVehicule(\Fdr\AdminBundle\Entity\Vehicule $vehicules) {
        $this->vehicules->removeElement($vehicules);
    }

    /**
     * Get vehicules
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehicules() {
        return $this->vehicules;
    }

    /**
     * Add chauffeurs
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeurs
     * @return Depot
     */
    public function addChauffeur(\Fdr\AdminBundle\Entity\Chauffeur $chauffeurs) {
        $this->chauffeurs[] = $chauffeurs;

        return $this;
    }

    /**
     * Remove chauffeurs
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeurs
     */
    public function removeChauffeur(\Fdr\AdminBundle\Entity\Chauffeur $chauffeurs) {
        $this->chauffeurs->removeElement($chauffeurs);
    }

    /**
     * Get chauffeurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChauffeurs() {
        return $this->chauffeurs;
    }

    /**
     * Add manutentionnaires
     *
     * @param \Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires
     * @return Depot
     */
    public function addManutentionnaire(\Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires) {
        $this->manutentionnaires[] = $manutentionnaires;

        return $this;
    }

    /**
     * Remove manutentionnaires
     *
     * @param \Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires
     */
    public function removeManutentionnaire(\Fdr\AdminBundle\Entity\Manutentionnaire $manutentionnaires) {
        $this->manutentionnaires->removeElement($manutentionnaires);
    }

    /**
     * Get manutentionnaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getManutentionnaires() {
        return $this->manutentionnaires;
    }

}
