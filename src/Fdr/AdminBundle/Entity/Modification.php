<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modification
 *
 * @ORM\Table(name="modification")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ModificationRepository")
 */
class Modification {

    public function __construct() {
        $this->dateMaj = new \Datetime();
    }

    /**
     * @ORM\ManyToOne(targetEntity="\Fdr\UserBundle\Entity\User",inversedBy="modifications")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="FeuilleDeRoute",inversedBy="modifications")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $feuilleDeRoute;

    /**
     * @ORM\ManyToOne(targetEntity="MissionAffretement",inversedBy="modifications")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $missionAffretement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="motifs", type="array")
     */
    private $motifs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMaj", type="datetime")
     */
    private $dateMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="remarque", type="text", nullable=true)
     */
    private $remarque;

    /**
     * @var string
     *
     * @ORM\Column(name="classe", type="string",length=100, nullable=true)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="codefeuille", type="string", length=100, nullable=true)
     */
    private $codeFeuille;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateMaj
     *
     * @param \DateTime $dateMaj
     * @return Modification
     */
    public function setDateMaj($dateMaj) {
        $this->dateMaj = $dateMaj;

        return $this;
    }

    /**
     * Get dateMaj
     *
     * @return \DateTime 
     */
    public function getDateMaj() {
        return $this->dateMaj;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     * @return Modification
     */
    public function setRemarque($remarque) {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque() {
        return $this->remarque;
    }

    /**
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return Modification
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

    /**
     * Set user
     *
     * @param \Fdr\UserBundle\Entity\User $user
     * @return Modification
     */
    public function setUser(\Fdr\UserBundle\Entity\User $user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Fdr\UserBundle\Entity\User 
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set motifs
     *
     * @param array $motifs
     * @return Modification
     */
    public function setMotifs($motifs) {
        $this->motifs = $motifs;

        return $this;
    }

    /**
     * Get motifs
     *
     * @return array 
     */
    public function getMotifs() {
        return $this->motifs;
    }

    /**
     * Set classe
     *
     * @param string $classe
     * @return Modification
     */
    public function setClasse($classe) {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string 
     */
    public function getClasse() {
        return $this->classe;
    }

    public function __toString() {
        return "L'utilisateur " . $this->user . " a effectué des modification(s) sur la " . $this->getClasse();
    }

    /**
     * Set missionAffretement
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretement
     * @return Modification
     */
    public function setMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretement = null) {
        $this->missionAffretement = $missionAffretement;

        return $this;
    }

    /**
     * Get missionAffretement
     *
     * @return \Fdr\AdminBundle\Entity\MissionAffretement 
     */
    public function getMissionAffretement() {
        return $this->missionAffretement;
    }

    /**
     * Set codefeuille
     *
     * @param string $codeFeuille
     * @return Modification
     */
    public function setCodeFeuille($codeFeuille) {
        $this->codeFeuille = $codeFeuille;

        return $this;
    }

    /**
     * Get codeFeuille
     *
     * @return string 
     */
    public function getCodeFeuille() {
        return $this->codeFeuille;
    }

}
