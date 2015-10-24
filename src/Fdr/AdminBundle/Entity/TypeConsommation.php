<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TypeConsommation
 *
 * @ORM\Table(name="typeconsommation")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\TypeConsommationRepository")
 */
class TypeConsommation {

    public function __construct() {
        $this->bonCarburantHuiles = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="BonCarburantHuile",mappedBy="typeConsommation")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bonCarburantHuiles;

    /**
     * @ORM\ManyToOne(targetEntity="Ville",inversedBy="typeConsommations")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity="Depot",inversedBy="typeConsommations")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $depot;

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
     * @Assert\Type(type="string", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="type", type="string", length=100)
     */
    private $type;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="string", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="produit", type="string", length=100)
     */
    private $produit;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric", message="La valeur du champs n'est pas valide.")
     * @ORM\Column(name="prixUnitaire", type="float")
     */
    private $prixUnitaire;

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
     * @return TypeConsommation
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
     * Set produit
     *
     * @param string $produit
     * @return TypeConsommation
     */
    public function setProduit($produit) {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return string 
     */
    public function getProduit() {
        return $this->produit;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     * @return TypeConsommation
     */
    public function setPrixUnitaire($prixUnitaire) {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float 
     */
    public function getPrixUnitaire() {
        return $this->prixUnitaire;
    }

    /**
     * Add bonCarburantHuiles
     *
     * @param \Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles
     * @return TypeConsommation
     */
    public function addBonCarburantHuile(\Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles) {
        $this->bonCarburantHuiles[] = $bonCarburantHuiles;

        return $this;
    }

    /**
     * Remove bonCarburantHuiles
     *
     * @param \Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles
     */
    public function removeBonCarburantHuile(\Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles) {
        $this->bonCarburantHuiles->removeElement($bonCarburantHuiles);
    }

    /**
     * Get bonCarburantHuiles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBonCarburantHuiles() {
        return $this->bonCarburantHuiles;
    }

    public function __toString() {
        if ($this->type == "interne") {
            return $this->depot . " ";
        } else {
            return "Total (" . $this->ville . ")";
        }
    }

    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return TypeConsommation
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

    /**
     * Set ville
     *
     * @param \Fdr\AdminBundle\Entity\Ville $ville
     * @return TypeConsommation
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

}
