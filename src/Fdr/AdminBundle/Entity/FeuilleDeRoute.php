<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use \Fdr\AdminBundle\Controller\FeuilleDeRouteController;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * FeuilleDeRoute
 *
 * @ORM\Table(name="feuillederoute")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\FeuilleDeRouteRepository")
 */
class FeuilleDeRoute {

    public function __construct() {
        $this->modifications = new ArrayCollection();
        $this->peages = new ArrayCollection();
        $this->clients = new ArrayCollection();
        $this->bonCarburantHuiles = new ArrayCollection();
        $this->manutentions = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->clientFdrVs = new ArrayCollection();
        $this->clientFdrFs = new ArrayCollection();
        $this->secteurs = new ArrayCollection();   
         $this->dateFinMission = new \DateTime();
         $this->dateClotureMission = new \DateTime();     
         $this->dateGeneree= new \Datetime();
    }

    /**
     * @ORM\OneToMany(targetEntity="Manutention",mappedBy="feuilleDeRoute",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $manutentions; //just persist

    /**
     * @ORM\OneToOne(targetEntity="MissionAffretement",inversedBy="feuilleDeRoute")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $missionAffretement = null;

    /**
     * @ORM\ManyToOne(targetEntity="Fdr\UserBundle\Entity\User", inversedBy="feuilleDeRoutes")
     *  @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule",inversedBy="feuilleDeRoutes")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $vehicule;

    /**
     *
     * @ORM\ManyToOne(targetEntity="TypePrestation",inversedBy="feuilleDeRoutes")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $typePrestation;

    /**
     * @ORM\ManyToMany(targetEntity="Secteur",inversedBy="feuilleDeRoutes")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $secteurs;

    /**
     * @ORM\OneToMany(targetEntity="BonCarburantHuile",mappedBy="feuilleDeRoute",cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bonCarburantHuiles;

    /**
     * @ORM\ManyToOne(targetEntity="Filiale", inversedBy="feuilleDeRoutes")
     *  @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $filiale;

    /**
     * @ORM\ManyToOne(targetEntity="Depot", inversedBy="feuilleDeRoutes")
     *  @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $depot;

    /**
     * @ORM\OneToMany(targetEntity="Modification",mappedBy="feuilleDeRoute")
     * @ORM\JoinColumn(nullable=true)
     */
    private $modifications;

    /**
     * @ORM\OneToMany(targetEntity="ClientFdrV",mappedBy="feuilleDeRoute")
     * @ORM\JoinColumn(nullable=true)
     */
    private $clientFdrVs;

    /**
     * @ORM\OneToMany(targetEntity="ClientFdrF",mappedBy="feuilleDeRoute")
     * @ORM\JoinColumn(nullable=true)
     */
    private $clientFdrFs;

    /**
     * @ORM\OneToMany(targetEntity="Peage",mappedBy="feuilleDeRoute",cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $peages;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateGeneree", type="datetime")
     */
    private $dateGeneree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutMission", type="datetime")
     */
    private $dateDebutMission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinMission", type="datetime")
     */
    private $dateFinMission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateClotureMission", type="datetime")
     */
    private $dateClotureMission;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreManutention", type="integer", nullable=true)
     */
    private $nombreManutention;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManExterne1", type="string", length=100, nullable=true)
     */
    private $nomManExterne1;

    /**
     * @var string
     *
     * @ORM\Column(name="cinManExterne1", type="string", length=100, nullable=true)
     */
    private $cinManExterne1;

    /**
     * @var string
     * @ORM\Column(name="nomManExterne2", type="string", length=100, nullable=true)
     */
    private $nomManExterne2;

    /**
     * @var string
     * @ORM\Column(name="cinManExterne2", type="string", length=100, nullable=true)
     */
    private $cinManExterne2;

    /**
     * @var integer
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="compteurReel", type="integer")
     */
    private $compteurReel;

    /**
     * @var integer
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="compteurFinal", type="integer", nullable=true)
     */
    private $compteurFinal = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100, nullable=true)
     */
    private $etat = "ouverte";

    /**
     * @var integer
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcDiffKm", type="integer", nullable=true)
     */
    private $calcDiffKm;

    /**
     * @var integer
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcKmParcourus", type="integer", nullable=true)
     */
    private $calcKmParcourus;

    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbRepas", type="integer", nullable=true)
     */
    private $calcNbRepas;
    
    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcPrise", type="integer", nullable=true)
     */
    private $calcPrise;

    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbPetitDej", type="integer", nullable=true)
     */
    private $calcNbPetitDej;

    /**
     * @var integer
     * @Assert\Type(type="integer", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbDecoucher", type="integer", nullable=true)
     */
    private $calcNbDecoucher;

    /**
     * @var float
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcQuantite", type="float", nullable=true)
     */
    private $calcQuantite;

    /**
     * @var float
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcMontantCarburant", type="float", nullable=true)
     */
    private $calcMontantCarburant;

    /**
     * @var float
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcMontantPeage", type="float", nullable=true)
     */
    private $calcMontantPeage;

    /**
     * @var float
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="calcNbJours", type="float", nullable=true)
     */
    private $calcNbJours;

    /**
     * @var boolean
     * @ORM\Column(name="primeRemorque", type="boolean", nullable=true)
     */
    private $primeRemorque;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="text", nullable=true)
     */
    private $remarques;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup1", type="string", length=100, nullable=true)
     */
    private $champSup1;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup2", type="string", length=100, nullable=true)
     */
    private $champSup2;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup3", type="string", length=100, nullable=true)
     */
    private $champSup3;

    /**
     * @var string
     *
     * @ORM\Column(name="champSup4", type="string", length=100, nullable=true)
     */
    private $champSup4;

    public function __toString() {
        return "FDR-" . $this->id;
    }
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="fdrInstance", type="boolean", nullable=true)
     */
    private $fdrInstance=false;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateGeneree
     *
     * @param \DateTime $dateGeneree
     * @return FeuilleDeRoute
     */
    public function setDateGeneree($dateGeneree) {
        $this->dateGeneree = $dateGeneree;

        return $this;
    }

    /**
     * Get dateGeneree
     *
     * @return \DateTime 
     */
    public function getDateGeneree() {
        return $this->dateGeneree;
    }

    /**
     * Set dateDebutMission
     *
     * @param \DateTime $dateDebutMission
     * @return FeuilleDeRoute
     */
    public function setDateDebutMission($dateDebutMission) {
        $this->dateDebutMission = $dateDebutMission;

        return $this;
    }

    /**
     * Get dateDebutMission
     *
     * @return \DateTime 
     */
    public function getDateDebutMission() {
        return $this->dateDebutMission;
    }

    /**
     * Set dateFinMission
     *
     * @param \DateTime $dateFinMission
     * @return FeuilleDeRoute
     */
    public function setDateFinMission($dateFinMission) {
        $this->dateFinMission = $dateFinMission;

        return $this;
    }

    /**
     * Get dateFinMission
     *
     * @return \DateTime 
     */
    public function getDateFinMission() {
        return $this->dateFinMission;
    }

    /**
     * Set nombreManutention
     *
     * @param integer $nombreManutention
     * @return FeuilleDeRoute
     */
    public function setNombreManutention($nombreManutention) {
        $this->nombreManutention = $nombreManutention;

        return $this;
    }

    /**
     * Get nombreManutention
     *
     * @return integer 
     */
    public function getNombreManutention() {
        return $this->nombreManutention;
    }

    /**
     * Set nomManExterne1
     *
     * @param string $nomManExterne1
     * @return FeuilleDeRoute
     */
    public function setNomManExterne1($nomManExterne1) {
        $this->nomManExterne1 = $nomManExterne1;

        return $this;
    }

    /**
     * Get nomManExterne1
     *
     * @return string 
     */
    public function getNomManExterne1() {
        return $this->nomManExterne1;
    }

    /**
     * Set cinManExterne1
     *
     * @param string $cinManExterne1
     * @return FeuilleDeRoute
     */
    public function setCinManExterne1($cinManExterne1) {
        $this->cinManExterne1 = $cinManExterne1;

        return $this;
    }

    /**
     * Get cinManExterne1
     *
     * @return string 
     */
    public function getCinManExterne1() {
        return $this->cinManExterne1;
    }

    /**
     * Set nomManExterne2
     *
     * @param string $nomManExterne2
     * @return FeuilleDeRoute
     */
    public function setNomManExterne2($nomManExterne2) {
        $this->nomManExterne2 = $nomManExterne2;

        return $this;
    }

    /**
     * Get nomManExterne2
     *
     * @return string 
     */
    public function getNomManExterne2() {
        return $this->nomManExterne2;
    }

    /**
     * Set cinManExterne2
     *
     * @param string $cinManExterne2
     * @return FeuilleDeRoute
     */
    public function setCinManExterne2($cinManExterne2) {
        $this->cinManExterne2 = $cinManExterne2;

        return $this;
    }

    /**
     * Get cinManExterne2
     *
     * @return string 
     */
    public function getCinManExterne2() {
        return $this->cinManExterne2;
    }

    /**
     * Set compteurReel
     *
     * @param integer $compteurReel
     * @return FeuilleDeRoute
     */
    public function setCompteurReel($compteurReel) {
        $this->compteurReel = $compteurReel;

        return $this;
    }

    /**
     * Get compteurReel
     *
     * @return integer 
     */
    public function getCompteurReel() {
        return $this->compteurReel;
    }

    /**
     * Set compteurFinal
     *
     * @param integer $compteurFinal
     * @return FeuilleDeRoute
     */
    public function setCompteurFinal($compteurFinal) {
        $this->compteurFinal = $compteurFinal;

        return $this;
    }

    /**
     * Get compteurFinal
     *
     * @return integer 
     */
    public function getCompteurFinal() {
        return $this->compteurFinal;
    }

    /**
     * Set calcDiffKm
     *
     * @param integer $calcDiffKm
     * @return FeuilleDeRoute
     */
    public function setCalcDiffKm($calcDiffKm) {
        $this->calcDiffKm = $calcDiffKm;

        return $this;
    }

    /**
     * Get calcDiffKm
     *
     * @return integer 
     */
    public function getCalcDiffKm() {
        return $this->calcDiffKm;
    }

    /**
     * Set calcKmParcourus
     *
     * @param integer $calcKmParcourus
     * @return FeuilleDeRoute
     */
    public function setCalcKmParcourus($calcKmParcourus) {
        $this->calcKmParcourus = $calcKmParcourus;

        return $this;
    }

    /**
     * Get calcKmParcourus
     *
     * @return integer 
     */
    public function getCalcKmParcourus() {
        return $this->calcKmParcourus;
    }

    /**
     * Set calcNbRepas
     *
     * @param integer $calcNbRepas
     * @return FeuilleDeRoute
     */
    public function setCalcNbRepas($calcNbRepas) {
        $this->calcNbRepas = $calcNbRepas;

        return $this;
    }

    /**
     * Get calcNbRepas
     *
     * @return integer 
     */
    public function getCalcNbRepas() {
        return $this->calcNbRepas;
    }

    /**
     * Set calcNbPetitDej
     *
     * @param integer $calcNbPetitDej
     * @return FeuilleDeRoute
     */
    public function setCalcNbPetitDej($calcNbPetitDej) {
        $this->calcNbPetitDej = $calcNbPetitDej;

        return $this;
    }

    /**
     * Get calcNbPetitDej
     *
     * @return integer 
     */
    public function getCalcNbPetitDej() {
        return $this->calcNbPetitDej;
    }

    /**
     * Set calcNbDecoucher
     *
     * @param integer $calcNbDecoucher
     * @return FeuilleDeRoute
     */
    public function setCalcNbDecoucher($calcNbDecoucher) {
        $this->calcNbDecoucher = $calcNbDecoucher;

        return $this;
    }

    /**
     * Get calcNbDecoucher
     *
     * @return integer 
     */
    public function getCalcNbDecoucher() {
        return $this->calcNbDecoucher;
    }

    /**
     * Set calcQuantite
     *
     * @param float $calcQuantite
     * @return FeuilleDeRoute
     */
    public function setCalcQuantite($calcQuantite) {
        $this->calcQuantite = $calcQuantite;

        return $this;
    }

    /**
     * Get calcQuantite
     *
     * @return float 
     */
    public function getCalcQuantite() {
        return $this->calcQuantite;
    }

    /**
     * Set calcMontantCarburant
     *
     * @param float $calcMontantCarburant
     * @return FeuilleDeRoute
     */
    public function setCalcMontantCarburant($calcMontantCarburant) {
        $this->calcMontantCarburant = $calcMontantCarburant;

        return $this;
    }

    /**
     * Get calcMontantCarburant
     *
     * @return float 
     */
    public function getCalcMontantCarburant() {
        return $this->calcMontantCarburant;
    }

    /**
     * Set calcMontantPeage
     *
     * @param float $calcMontantPeage
     * @return FeuilleDeRoute
     */
    public function setCalcMontantPeage($calcMontantPeage) {
        $this->calcMontantPeage = $calcMontantPeage;

        return $this;
    }

    /**
     * Get calcMontantPeage
     *
     * @return float 
     */
    public function getCalcMontantPeage() {
        return $this->calcMontantPeage;
    }

    /**
     * Set calcNbJours
     *
     * @param float $calcNbJours
     * @return FeuilleDeRoute
     */
    public function setCalcNbJours($calcNbJours) {
        $this->calcNbJours = $calcNbJours;

        return $this;
    }

    /**
     * Get calcNbJours
     *
     * @return float 
     */
    public function getCalcNbJours() {
        return $this->calcNbJours;
    }

    /**
     * Set primeRemorque
     *
     * @param boolean $primeRemorque
     * @return FeuilleDeRoute
     */
    public function setPrimeRemorque($primeRemorque) {
        $this->primeRemorque = $primeRemorque;

        return $this;
    }

    /**
     * Get primeRemorque
     *
     * @return boolean 
     */
    public function getPrimeRemorque() {
        return $this->primeRemorque;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return FeuilleDeRoute
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
     * Set champSup1
     *
     * @param string $champSup1
     * @return FeuilleDeRoute
     */
    public function setChampSup1($champSup1) {
        $this->champSup1 = $champSup1;

        return $this;
    }

    /**
     * Get champSup1
     *
     * @return string 
     */
    public function getChampSup1() {
        return $this->champSup1;
    }

    /**
     * Set champSup2
     *
     * @param string $champSup2
     * @return FeuilleDeRoute
     */
    public function setChampSup2($champSup2) {
        $this->champSup2 = $champSup2;

        return $this;
    }

    /**
     * Get champSup2
     *
     * @return string 
     */
    public function getChampSup2() {
        return $this->champSup2;
    }

    /**
     * Set champSup3
     *
     * @param string $champSup3
     * @return FeuilleDeRoute
     */
    public function setChampSup3($champSup3) {
        $this->champSup3 = $champSup3;

        return $this;
    }

    /**
     * Get champSup3
     *
     * @return string 
     */
    public function getChampSup3() {
        return $this->champSup3;
    }

    /**
     * Set champSup4
     *
     * @param string $champSup4
     * @return FeuilleDeRoute
     */
    public function setChampSup4($champSup4) {
        $this->champSup4 = $champSup4;

        return $this;
    }

    /**
     * Get champSup4
     *
     * @return string 
     */
    public function getChampSup4() {
        return $this->champSup4;
    }

    public function setManutentions(ArrayCollection $manutentions) {
        foreach ($manutentions as $manutention) {
            $manutention->setFeuilleDeRoute($this);
        }
        $this->manutentions = $manutentions;
    }

    /**
     * Add manutentions
     *
     * @param \Fdr\AdminBundle\Entity\Manutention $manutentions
     * @return FeuilleDeRoute
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
     * Set missionAffretement
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretement
     * @return FeuilleDeRoute
     */
    public function setMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretement = null) {
        $this->missionAffretement = $missionAffretement;
        //
        if ($this->missionAffretement) {
            $this->missionAffretement->setFeuilleDeRoute($this);
        }
        //
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
     * Set vehicule
     *
     * @param \Fdr\AdminBundle\Entity\Vehicule $vehicule
     * @return FeuilleDeRoute
     */
    public function setVehicule(\Fdr\AdminBundle\Entity\Vehicule $vehicule) {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \Fdr\AdminBundle\Entity\Vehicule 
     */
    public function getVehicule() {
        return $this->vehicule;
    }

    /**
     * Set typePrestation
     *
     * @param \Fdr\AdminBundle\Entity\TypePrestation $typePrestation
     * @return FeuilleDeRoute
     */
    public function setTypePrestation(\Fdr\AdminBundle\Entity\TypePrestation $typePrestation) {
        $this->typePrestation = $typePrestation;

        return $this;
    }

    /**
     * Get typePrestation
     *
     * @return \Fdr\AdminBundle\Entity\TypePrestation 
     */
    public function getTypePrestation() {
        return $this->typePrestation;
    }

    /**
     * Add secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     * @return FeuilleDeRoute
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

    public function setBonCarburantHuiles(ArrayCollection $bonCarburantHuiles) {
        foreach ($bonCarburantHuiles as $bonCarburantHuile) {
            $bonCarburantHuile->setFeuilleDeRoute($this);
        }
        $this->bonCarburantHuiles = $bonCarburantHuiles;
    }

    /**
     * Add bonCarburantHuiles
     *
     * @param \Fdr\AdminBundle\Entity\BonCarburantHuile $bonCarburantHuiles
     * @return FeuilleDeRoute
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

    /**
     * Set filiale
     *
     * @param \Fdr\AdminBundle\Entity\Filiale $filiale
     * @return FeuilleDeRoute
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

    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return FeuilleDeRoute
     */
    public function setDepot(\Fdr\AdminBundle\Entity\Depot $depot) {
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
     * Add modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     * @return FeuilleDeRoute
     */
    public function addModification(\Fdr\AdminBundle\Entity\Modification $modifications) {
        $this->modifications[] = $modifications;

        return $this;
    }

    /**
     * Remove modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     */
    public function removeModification(\Fdr\AdminBundle\Entity\Modification $modifications) {
        $this->modifications->removeElement($modifications);
    }

    /**
     * Get modifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModifications() {
        return $this->modifications;
    }

    public function setClientFdrVs(ArrayCollection $clientFdrVs) {
        foreach ($clientFdrVs as $clientFdrV) {
            $clientFdrV->setFeuilleDeRoute($this);
        }
        $this->clientFdrVs = $clientFdrVs;
    }

    /**
     * Add clientFdrVs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs
     * @return FeuilleDeRoute
     */
    public function addClientFdrV(\Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs) {
        $this->clientFdrVs[] = $clientFdrVs;

        return $this;
    }

    /**
     * Remove clientFdrVs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs
     */
    public function removeClientFdrV(\Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs) {
        $this->clientFdrVs->removeElement($clientFdrVs);
    }

    /**
     * Get clientFdrVs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientFdrVs() {
        return $this->clientFdrVs;
    }

    public function setClientFdrFs(ArrayCollection $clientFdrFs) {
        foreach ($clientFdrFs as $clientFdrF) {
            $clientFdrF->setFeuilleDeRoute($this);
        }
        $this->clientFdrFs = $clientFdrFs;
    }

    /**
     * Add clientFdrFs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs
     * @return FeuilleDeRoute
     */
    public function addClientFdrF(\Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs) {
        $this->clientFdrFs[] = $clientFdrFs;

        return $this;
    }

    /**
     * Remove clientFdrFs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs
     */
    public function removeClientFdrF(\Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs) {
        $this->clientFdrFs->removeElement($clientFdrFs);
    }

    /**
     * Get clientFdrFs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientFdrFs() {
        return $this->clientFdrFs;
    }

    public function setPeages(ArrayCollection $peages) {
        foreach ($peages as $peage) {
            $peage->setFeuilleDeRoute($this);
        }
        $this->peages = $peages;
    }

    /**
     * Add peages
     *
     * @param \Fdr\AdminBundle\Entity\Peage $peages
     * @return FeuilleDeRoute
     */
    public function addPeage(\Fdr\AdminBundle\Entity\Peage $peages) {
        $this->peages[] = $peages;

        return $this;
    }

    /**
     * Remove peages
     *
     * @param \Fdr\AdminBundle\Entity\Peage $peages
     */
    public function removePeage(\Fdr\AdminBundle\Entity\Peage $peages) {
        $this->peages->removeElement($peages);
    }

    /**
     * Get peages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPeages() {
        return $this->peages;
    }

    /**
     * Set dateClotureMission
     *
     * @param \DateTime $dateClotureMission
     * @return FeuilleDeRoute
     */
    public function setDateClotureMission($dateClotureMission) {
        $this->dateClotureMission = $dateClotureMission;

        return $this;
    }

    /**
     * Get dateClotureMission
     *
     * @return \DateTime 
     */
    public function getDateClotureMission() {
        return $this->dateClotureMission;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return FeuilleDeRoute
     */
    public function setEtat($etat) {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Set user
     *
     * @param \Fdr\UserBundle\Entity\User $user
     * @return FeuilleDeRoute
     */
    public function setUser(\Fdr\UserBundle\Entity\User $user = null) {
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
     * Set calcPrise
     *
     * @param integer $calcPrise
     * @return FeuilleDeRoute
     */
    public function setCalcPrise($calcPrise)
    {
        $this->calcPrise = $calcPrise;

        return $this;
    }

    /**
     * Get calcPrise
     *
     * @return integer 
     */
    public function getCalcPrise()
    {
        return $this->calcPrise;
    }

    /**
     * Set fdrInstance
     *
     * @param boolean $fdrInstance
     * @return FeuilleDeRoute
     */
    public function setFdrInstance($fdrInstance)
    {
        $this->fdrInstance = $fdrInstance;

        return $this;
    }

    /**
     * Get fdrInstance
     *
     * @return boolean 
     */
    public function getFdrInstance()
    {
        return $this->fdrInstance;
    }
}
