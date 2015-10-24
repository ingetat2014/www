<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Typeprestation
 * @UniqueEntity("libelle",  message ="Cette libelle existe déja.Veuillez choisir une autre")
 * @ORM\Table(name="typeprestation")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\TypePrestationRepository")
 * 
 */
class TypePrestation {

    /**
     * @ORM\ManyToMany(targetEntity="Secteur",mappedBy="typePrestations")
     * @ORM\JoinColumn(nullable=true)
     */
    private $secteurs;

    public function __construct() {
        $this->secteurs = new ArrayCollection();
        $this->feuilleDeRoutes = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="FeuilleDeRoute",mappedBy="typePrestation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $feuilleDeRoutes;

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
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false,unique=true)
     */
    private $libelle;

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
     * @return TypePrestation
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
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return TypePrestation
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
     * Add secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     * @return TypePrestation
     */
    public function addSecteur(\Fdr\AdminBundle\Entity\Secteur $secteurs) {
        $this->secteurs[] = $secteurs;

        return $this;
    }

    /**
     * Remove secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     */
    public function removeSecteur(\Fdr\AdminBundle\Entity\Secteur $secteurs) {
        $this->secteurs->removeElement($secteurs);
    }

    /**
     * Get secteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecteurs() {
        return $this->secteurs;
    }

    /**
     * Set villeappartenance
     *
     * @param string $villeappartenance
     * @return TypePrestation
     */
    public function setVilleappartenance($villeappartenance) {
        $this->villeappartenance = $villeappartenance;

        return $this;
    }

    /**
     * Get villeappartenance
     *
     * @return string 
     */
    public function getVilleappartenance() {
        return $this->villeappartenance;
    }

    public function __toString() {
        return $this->libelle;
    }

}
