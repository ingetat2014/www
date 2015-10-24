<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Client
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ClientRepository")
 * @UniqueEntity("email", * message ="Cet email existe déja.Veuillez choisir un autre")
 * @UniqueEntity("cin",  message ="Ce cin existe déja.")
 * @UniqueEntity("numcompte",  message ="Ce num. compte existe déja.")
 * @ORM\Table(name="client")
 * 
 */
class Client {

    public function __construct() {
        $this->secteurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clientFdrVs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clientFdrFs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->missionAffretements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="ClientFdrV",mappedBy="client",orphanRemoval=true,cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $clientFdrVs; //rien avan scad
    /**
     * @ORM\OneToMany(targetEntity="ClientFdrF",mappedBy="client",orphanRemoval=true,cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $clientFdrFs; //rien av cas

    /**
     * @ORM\OneToMany(targetEntity="MissionAffretement",mappedBy="client",orphanRemoval=true,cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $missionAffretements;

    /**
     * @ORM\ManyToMany(targetEntity="Secteur",inversedBy="clients")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $secteurs;

    /**
     * @ORM\ManyToOne(targetEntity="Ville", cascade={"remove"},inversedBy="clients")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     * @Assert\NotBlank()
     */
    private $ville;
    /**
     * Constructor
     */

    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Assert\Regex("/[\d\-\ ]+/")
     * @Assert\Length(min = "10")
     * @ORM\Column(name="tel", type="string", length=100, nullable=true)
     */
    private $tel;

    /**
     * @var string
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="cin", type="string", length=100, nullable=true, unique=true)
     */
    private $cin;

    /**
     * @var string
     * @Assert\Email()
     * @ORM\Column(name="email", type="string", length=100, nullable=true, unique=true)
     */
    private $email;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="fax", type="string", length=100, nullable=true)
     */
    private $fax;

    /**
     * @var string
     * @ORM\Column(name="nomentreprise", type="string", length=100, nullable=false)
     */
    private $nomentreprise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="encompte", type="boolean", nullable=true)
     */
    private $encompte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientaffret", type="boolean", nullable=true)
     */
    private $clientaffret;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientramass", type="boolean", nullable=true)
     */
    private $clientramass;

    /**
     * @var string
     * @Assert\Type(type="digit", message="La valeur {{ value }} n'est pas digit.")
     * @ORM\Column(name="numcompte", type="string", length=100, nullable=true)
     */
    private $numcompte;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Client
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Client
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
     * Set cin
     *
     * @param string $cin
     * @return Client
     */
    public function setCin($cin) {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin() {
        return $this->cin;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Client
     */
    public function setFax($fax) {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Set nomentreprise
     *
     * @param string $nomentreprise
     * @return Client
     */
    public function setNomentreprise($nomentreprise) {
        $this->nomentreprise = $nomentreprise;

        return $this;
    }

    /**
     * Get nomentreprise
     *
     * @return string 
     */
    public function getNomentreprise() {
        return $this->nomentreprise;
    }

    /**
     * Set encompte
     *
     * @param boolean $encompte
     * @return Client
     */
    public function setEncompte($encompte) {
        $this->encompte = $encompte;

        return $this;
    }

    /**
     * Get encompte
     *
     * @return boolean 
     */
    public function getEncompte() {
        return $this->encompte;
    }

    /**
     * Set clientaffret
     *
     * @param boolean $clientaffret
     * @return Client
     */
    public function setClientaffret($clientaffret) {
        $this->clientaffret = $clientaffret;

        return $this;
    }

    /**
     * Get clientaffret
     *
     * @return boolean 
     */
    public function getClientaffret() {
        return $this->clientaffret;
    }

    /**
     * Set clientramass
     *
     * @param boolean $clientramass
     * @return Client
     */
    public function setClientramass($clientramass) {
        $this->clientramass = $clientramass;

        return $this;
    }

    /**
     * Get clientramass
     *
     * @return boolean 
     */
    public function getClientramass() {
        return $this->clientramass;
    }

    /**
     * Set numcompte
     *
     * @param string $numcompte
     * @return Client
     */
    public function setNumcompte($numcompte) {
        $this->numcompte = $numcompte;

        return $this;
    }

    /**
     * Get numcompte
     *
     * @return string 
     */
    public function getNumcompte() {
        return $this->numcompte;
    }
    /**
     * Add secteurs
     *
     * @param \Fdr\AdminBundle\Entity\Secteur $secteurs
     * @return Client
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
     * Add clientFdrVs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrV $clientFdrVs
     * @return Client
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

    public function __toString() {
        $sortie = $this->nomentreprise;
        $cnt = ($this->encompte) ? "*/" : "";
        return $cnt . $sortie;
    }

    /**
     * Add clientFdrFs
     *
     * @param \Fdr\AdminBundle\Entity\ClientFdrF $clientFdrFs
     * @return Client
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

    /**
     * Add missionAffretements
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements
     * @return Client
     */
    public function addMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements) {
        $this->missionAffretements[] = $missionAffretements;

        return $this;
    }

    /**
     * Remove missionAffretements
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements
     */
    public function removeMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements) {
        $this->missionAffretements->removeElement($missionAffretements);
    }

    /**
     * Get missionAffretements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMissionAffretements() {
        return $this->missionAffretements;
    }

    /**
     * Set ville
     *
     * @param \Fdr\AdminBundle\Entity\Ville $ville
     * @return Client
     */
    public function setVille(\Fdr\AdminBundle\Entity\Ville $ville = null) {
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
