<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Indisponibilite
 *
 * @ORM\Table(name="indisponibilite")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\IndisponibiliteRepository")
 */
class Indisponibilite {

    public function __construct() {
        $this->datedebut = new \Datetime();
        $this->datefin = new \Datetime();
    }

    /**
     * @ORM\ManyToOne(targetEntity="Chauffeur",inversedBy="indisponibilites", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
     */
    private $chauffeur;

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
     * @Assert\Type(type="alnum", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="motif", type="string", length=255, nullable=false)
     */
    private $motif;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="datedebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     * @Assert\NotBlank()
     * @ORM\Column(name="datefin", type="datetime", nullable=false)
     */
    private $datefin;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return Indisponibilite
     */
    public function setMotif($motif) {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif() {
        return $this->motif;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Indisponibilite
     */
    public function setDatedebut($datedebut) {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut() {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Indisponibilite
     */
    public function setDatefin($datefin) {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin() {
        return $this->datefin;
    }


    /**
     * Set chauffeur
     *
     * @param \Fdr\AdminBundle\Entity\Chauffeur $chauffeur
     * @return Indisponibilite
     */
    public function setChauffeur(\Fdr\AdminBundle\Entity\Chauffeur $chauffeur) {
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

    public function __toString() {
        return $this->chauffeur . "/" . $this->motif . "(" . $this->datedebut . "->" . $this->datefin . ")";
    }

}
