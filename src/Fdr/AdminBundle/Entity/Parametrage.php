<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Parametrage
 *
 * @ORM\Table(name="parametrage")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ParametrageRepository")
 */
class Parametrage {

    public function __construct() {
        $this->heureDebutDejeuner = new \DateTime(); $this->heureDebutDejeuner->setTime(10,00);
        $this->heureFinDejeuner = new \DateTime(); $this->heureFinDejeuner->setTime(16,00);
        $this->heureDebutDiner = new \DateTime(); $this->heureDebutDiner->setTime(18,00);
        $this->heureFinDiner = new \DateTime(); $this->heureFinDiner->setTime(06,00);
        $this->heureDebutDecoucher = new \DateTime(); $this->heureDebutDecoucher->setTime(21,00);
        $this->heureFinDecoucher = new \DateTime(); $this->heureFinDecoucher->setTime(05,00);
        $this->pourcentAssurance=0;
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
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutDejeuner", type="time")
     */
    private $heureDebutDejeuner;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinDejeuner", type="time")
     */
    private $heureFinDejeuner;
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutDiner", type="time")
     */
    private $heureDebutDiner;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinDiner", type="time")
     */
    private $heureFinDiner;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFinDecoucher", type="time")
     */
    private $heureFinDecoucher;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebutDecoucher", type="time")
     */
    private $heureDebutDecoucher;
    /**
     * @var numeric
     * @Assert\Type(type="float", message="La valeur du champs doit être un nombre.")
     * @ORM\Column(name="pourcentAssurance", type="decimal",precision=4,scale=2)
     * @Assert\LessThanOrEqual(value = 100)
     * @Assert\GreaterThanOrEqual(value = 0)
     */
    private $pourcentAssurance;

    /**
     * @var integer
     * @Assert\Type(type="int", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="alerteDiffKm", type="integer")
     */
    private $alerteDiffKm=10;
    
    /**
     * Get id
     *
     * @return integer 
     */
    /**
     * @var string
     *
     * @ORM\Column(name="notesAccueil", type="text", nullable=true)
     */
    private $notesAccueil="Ici le contenu; normalement des notes; paramétrable ...";
    
    public function getId() {
        return $this->id;
    }

    /**
     * Set heureDebutDejeuner
     *
     * @param \DateTime $heureDebutDejeuner
     * @return Parametrage
     */
    public function setHeureDebutDejeuner($heureDebutDejeuner)
    {
        $this->heureDebutDejeuner = $heureDebutDejeuner;

        return $this;
    }

    /**
     * Get heureDebutDejeuner
     *
     * @return \DateTime 
     */
    public function getHeureDebutDejeuner()
    {
        return $this->heureDebutDejeuner;
    }

    /**
     * Set heureFinDejeuner
     *
     * @param \DateTime $heureFinDejeuner
     * @return Parametrage
     */
    public function setHeureFinDejeuner($heureFinDejeuner)
    {
        $this->heureFinDejeuner = $heureFinDejeuner;

        return $this;
    }

    /**
     * Get heureFinDejeuner
     *
     * @return \DateTime 
     */
    public function getHeureFinDejeuner()
    {
        return $this->heureFinDejeuner;
    }

    /**
     * Set heureDebutDiner
     *
     * @param \DateTime $heureDebutDiner
     * @return Parametrage
     */
    public function setHeureDebutDiner($heureDebutDiner)
    {
        $this->heureDebutDiner = $heureDebutDiner;

        return $this;
    }

    /**
     * Get heureDebutDiner
     *
     * @return \DateTime 
     */
    public function getHeureDebutDiner()
    {
        return $this->heureDebutDiner;
    }

    /**
     * Set heureFinDiner
     *
     * @param \DateTime $heureFinDiner
     * @return Parametrage
     */
    public function setHeureFinDiner($heureFinDiner)
    {
        $this->heureFinDiner = $heureFinDiner;

        return $this;
    }

    /**
     * Get heureFinDiner
     *
     * @return \DateTime 
     */
    public function getHeureFinDiner()
    {
        return $this->heureFinDiner;
    }

    /**
     * Set pourcentAssurance
     *
     * @param string $pourcentAssurance
     * @return Parametrage
     */
    public function setPourcentAssurance($pourcentAssurance)
    {
        $this->pourcentAssurance = $pourcentAssurance;

        return $this;
    }

    /**
     * Get pourcentAssurance
     *
     * @return string 
     */
    public function getPourcentAssurance()
    {
        return $this->pourcentAssurance;
    }

    /**
     * Set heureFinDecoucher
     *
     * @param \DateTime $heureFinDecoucher
     * @return Parametrage
     */
    public function setHeureFinDecoucher($heureFinDecoucher)
    {
        $this->heureFinDecoucher = $heureFinDecoucher;

        return $this;
    }

    /**
     * Get heureFinDecoucher
     *
     * @return \DateTime 
     */
    public function getHeureFinDecoucher()
    {
        return $this->heureFinDecoucher;
    }

    /**
     * Set heureDebutDecoucher
     *
     * @param \DateTime $heureDebutDecoucher
     * @return Parametrage
     */
    public function setHeureDebutDecoucher($heureDebutDecoucher)
    {
        $this->heureDebutDecoucher = $heureDebutDecoucher;

        return $this;
    }

    /**
     * Get heureDebutDecoucher
     *
     * @return \DateTime 
     */
    public function getHeureDebutDecoucher()
    {
        return $this->heureDebutDecoucher;
    }

    /**
     * Set alerteDiffKm
     *
     * @param integer $alerteDiffKm
     * @return Parametrage
     */
    public function setAlerteDiffKm($alerteDiffKm)
    {
        $this->alerteDiffKm = $alerteDiffKm;

        return $this;
    }

    /**
     * Get alerteDiffKm
     *
     * @return integer 
     */
    public function getAlerteDiffKm()
    {
        return $this->alerteDiffKm;
    }

    /**
     * Set notesAccueil
     *
     * @param string $notesAccueil
     * @return Parametrage
     */
    public function setNotesAccueil($notesAccueil)
    {
        $this->notesAccueil = $notesAccueil;

        return $this;
    }

    /**
     * Get notesAccueil
     *
     * @return string 
     */
    public function getNotesAccueil()
    {
        return $this->notesAccueil;
    }
}
