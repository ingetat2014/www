<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Filiale
 * @UniqueEntity("libelle",  message ="Cette libelle existe déja.Veuillez choisir une autre")
 * @ORM\Table(name="filiale")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\FilialeRepository")
 */
class Filiale {

    /**
     * @ORM\OneToMany(targetEntity="Depot",mappedBy="filiale")
     * @ORM\JoinColumn(nullable=true)
     */
    private $depots;

    /**
     * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="filiale")
     * @ORM\JoinColumn(nullable=true)
     */
    private $feuilleDeRoutes;

    public function __construct() {
        $this->depots = new ArrayCollection();
        $this->feuilleDeRoutes = new ArrayCollection();
    }

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
     *
     * @ORM\Column(name="libelle", type="string", length=100, unique=true)
     */
    private $libelle;

    /**
     * @var string
     *
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
     * @return Filiale
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
     * @return Filiale
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
     * Add depots
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depots
     * @return Filiale
     */
    public function addDepot(\Fdr\AdminBundle\Entity\Depot $depots) {
        $this->depots[] = $depots;

        return $this;
    }

    /**
     * Remove depots
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depots
     */
    public function removeDepot(\Fdr\AdminBundle\Entity\Depot $depots) {
        $this->depots->removeElement($depots);
    }

    /**
     * Get depots
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepots() {
        return $this->depots;
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

    public function __toString() {
        return $this->libelle;
    }

}
