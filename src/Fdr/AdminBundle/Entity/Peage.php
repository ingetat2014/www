<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Peage
 *
 * @ORM\Table(name="peage")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\PeageRepository")
 */
class Peage {

    public function __construct() {
        $this->datePassage = new \Datetime();
    }

    /**
     * @ORM\ManyToOne(targetEntity="FeuilleDeRoute",inversedBy="peages")
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
     * @Assert\NotBlank()
     */
    private $feuilleDeRoute;

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
     * @ORM\Column(name="numCarte", type="string", length=100)
     */
    private $numCarte;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="DatePassage", type="datetime")
     */
    private $datePassage;

    /**
     * @var float
     * @Assert\NotBlank()
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=100, nullable=false)
     */
    private $lieu;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set numCarte
     *
     * @param string $numCarte
     * @return Peage
     */
    public function setNumCarte($numCarte) {
        $this->numCarte = $numCarte;

        return $this;
    }

    /**
     * Get numCarte
     *
     * @return string 
     */
    public function getNumCarte() {
        return $this->numCarte;
    }

    /**
     * Set datePassage
     *
     * @param \DateTime $datePassage
     * @return Peage
     */
    public function setDatePassage($datePassage) {
        $this->datePassage = $datePassage;

        return $this;
    }

    /**
     * Get datePassage
     *
     * @return \DateTime 
     */
    public function getDatePassage() {
        return $this->datePassage;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Peage
     */
    public function setMontant($montant) {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant() {
        return $this->montant;
    }

    /**
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return Peage
     */
    public function setFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute) {
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

    public function __toString() {
        return "Peage : " . $this->id . "/ montant:" . $this->montant;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Peage
     */
    public function setLieu($lieu) {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu() {
        return $this->lieu;
    }

}
