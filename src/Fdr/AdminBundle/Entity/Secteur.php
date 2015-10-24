<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Secteur
 * @UniqueEntity("libelle",  message ="Cette libelle existe déja.Veuillez choisir une autre")
 * @ORM\Table(name="secteur")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\SecteurRepository")
 */
class Secteur {

    /**
     * @ORM\ManyToMany(targetEntity="FeuilleDeRoute",mappedBy="secteurs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $feuilleDeRoutes;

    /**
     * @ORM\ManyToMany(targetEntity="Client",mappedBy="secteurs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $clients;

    /**
     * @ORM\ManyToMany(targetEntity="TypePrestation",inversedBy="secteurs")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $typePrestations;

    /**
     * @ORM\ManyToOne(targetEntity="Fdr\AdminBundle\Entity\Ville",inversedBy="secteurs")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     * @Assert\NotBlank()
     */
    private $ville;

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
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false, unique=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=100, nullable=true)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee", type="string", length=100, nullable=true)
     */
    private $arrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;

    /**
     * Constructor
     */
    public function __construct() {
        $this->typePrestations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
        $this->feuilleDeRoutes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set depart
     *
     * @param string $depart
     * @return Itineraire
     */
    public function setDepart($depart) {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string 
     */
    public function getDepart() {
        return $this->depart;
    }

    /**
     * Set arrivee
     *
     * @param string $arrivee
     * @return Itineraire
     */
    public function setArrivee($arrivee) {
        $this->arrivee = $arrivee;

        return $this;
    }

    /**
     * Get arrivee
     *
     * @return string 
     */
    public function getArrivee() {
        return $this->arrivee;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Itineraire
     */
    public function setRemarques($remarques) {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string 
     */
    public function getRemarques() {
        return $this->remarques;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Secteur
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
     * Add clients
     *
     * @param \Fdr\AdminBundle\Entity\Client $clients
     * @return Secteur
     */
    public function addClient(\Fdr\AdminBundle\Entity\Client $clients) {
        $this->clients[] = $clients;

        return $this;
    }

    /**
     * Remove clients
     *
     * @param \Fdr\AdminBundle\Entity\Client $clients
     */
    public function removeClient(\Fdr\AdminBundle\Entity\Client $clients) {
        $this->clients->removeElement($clients);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClients() {
        return $this->clients;
    }

    /**
     * Add typePrestations
     *
     * @param \Fdr\AdminBundle\Entity\TypePrestation $typePrestations
     * @return Secteur
     */
    public function addTypePrestation(\Fdr\AdminBundle\Entity\TypePrestation $typePrestations) {
        $this->typePrestations[] = $typePrestations;

        return $this;
    }

    /**
     * Remove typePrestations
     *
     * @param \Fdr\AdminBundle\Entity\TypePrestation $typePrestations
     */
    public function removeTypePrestation(\Fdr\AdminBundle\Entity\TypePrestation $typePrestations) {
        $this->typePrestations->removeElement($typePrestations);
    }

    /**
     * Get typePrestations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypePrestations() {
        return $this->typePrestations;
    }

    public function __toString() {
        return $this->libelle . '|' . $this->ville;
    }

    /**
     * Set ville
     *
     * @param \Fdr\AdminBundle\Entity\Ville $ville
     * @return Secteur
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
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return Secteur
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

}
