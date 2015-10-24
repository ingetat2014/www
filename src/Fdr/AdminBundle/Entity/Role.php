<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Role
 * @UniqueEntity("nomRole",  message ="Ce nom de rôle existe déja.Veuillez choisir un autre")
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\RoleRepository")
 */
class Role {

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
     * @Assert\Type(type="alpha", message="Le nom du role n'est pas valide(ne doit contenir que des caractères)")
     * @ORM\Column(name="nomRole", type="string", length=100 , nullable=false)
     */
    private $nomRole;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur du description n'est pas valide.")
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description="";

    /**
     * @var boolean
     *
     * @ORM\Column(name="affFDR", type="boolean", nullable=true)
     */
    private $affFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crFDR", type="boolean", nullable=true)
     */
    private $crFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upFDR", type="boolean", nullable=true)
     */
    private $upFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delFDR", type="boolean", nullable=true)
     */
    private $delFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cancelFDR", type="boolean", nullable=true)
     */
    private $cancelFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="imprimerFDR", type="boolean", nullable=true)
     */
    private $imprimerFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rechercherFDR", type="boolean", nullable=true)
     */
    private $rechercherFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affFDRPanne", type="boolean", nullable=true)
     */
    private $affFDRPanne=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crFDRPanne", type="boolean", nullable=true)
     */
    private $crFDRPanne=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upFDRPanne", type="boolean", nullable=true)
     */
    private $upFDRPanne=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delFDRPanne", type="boolean", nullable=true)
     */
    private $delFDRPanne=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affFDRAutrAgence", type="boolean", nullable=true)
     */
    private $affFDRAutrAgence=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crFDRAutrAgence", type="boolean", nullable=true)
     */
    private $crFDRAutrAgence=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upFDRAutrAgence", type="boolean", nullable=true)
     */
    private $upFDRAutrAgence=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delFDRAutrAgence", type="boolean", nullable=true)
     */
    private $delFDRAutrAgence=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="imprimerFDL", type="boolean", nullable=true)
     */
    private $imprimerFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rechercherFDL", type="boolean", nullable=true)
     */
    private $rechercherFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ttEtatAfficherParFdl", type="boolean", nullable=true)
     */
    private $ttEtatAfficherParFdl=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crClientCompeFDL", type="boolean", nullable=true)
     */
    private $crClientCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affClientCompeFDL", type="boolean", nullable=true)
     */
    private $affClientCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upClientCompeFDL", type="boolean", nullable=true)
     */
    private $upClientCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delClientCompeFDL", type="boolean", nullable=true)
     */
    private $delClientCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cancelClientCompeFDL", type="boolean", nullable=true)
     */
    private $cancelClientCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crClientNnCompeFDL", type="boolean", nullable=true)
     */
    private $crClientNnCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affClientNnCompeFDL", type="boolean", nullable=true)
     */
    private $affClientNnCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upClientNnCompeFDL", type="boolean", nullable=true)
     */
    private $upClientNnCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delClientNnCompeFDL", type="boolean", nullable=true)
     */
    private $delClientNnCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cancelClientNnCompeFDL", type="boolean", nullable=true)
     */
    private $cancelClientNnCompeFDL=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affectationVehicule", type="boolean", nullable=true)
     */
    private $affectationVehicule=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affectationChauffManu", type="boolean", nullable=true)
     */
    private $affectationChauffManu=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cloturerFDR", type="boolean", nullable=true)
     */
    private $cloturerFDR=false;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="upCloturerFDR", type="boolean", nullable=true)
     */
    private $upCloturerFDR=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cloturerFDRAffr", type="boolean", nullable=true)
     */
    private $cloturerFDRAffr=false;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="upCloturerFDRAffr", type="boolean", nullable=true)
     */
    private $upCloturerFDRAffr=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confRecDocCtm", type="boolean", nullable=true)
     */
    private $confRecDocCtm=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confRecDocClient", type="boolean", nullable=true)
     */
    private $confRecDocClient=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="editCompteur", type="boolean", nullable=true)
     */
    private $editCompteur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="editerPercentAssurParam", type="boolean", nullable=true)
     */
    private $editerPercentAssurParam=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="editerPlageHoraireParam", type="boolean", nullable=true)
     */
    private $editerPlageHoraireParam=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affClient", type="boolean", nullable=true)
     */
    private $affClient=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crClient", type="boolean", nullable=true)
     */
    private $crClient=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upClient", type="boolean", nullable=true)
     */
    private $upClient=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delClient", type="boolean", nullable=true)
     */
    private $delClient=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affVehicule", type="boolean", nullable=true)
     */
    private $affVehicule=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crVehicule", type="boolean", nullable=true)
     */
    private $crVehicule=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upVehicule", type="boolean", nullable=true)
     */
    private $upVehicule=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delVehicule", type="boolean", nullable=true)
     */
    private $delVehicule=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affChauffeur", type="boolean", nullable=true)
     */
    private $affChauffeur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crChauffeur", type="boolean", nullable=true)
     */
    private $crChauffeur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upChauffeur", type="boolean", nullable=true)
     */
    private $upChauffeur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delChauffeur", type="boolean", nullable=true)
     */
    private $delChauffeur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affUtilisateur", type="boolean", nullable=true)
     */
    private $affUtilisateur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crUtilisateur", type="boolean", nullable=true)
     */
    private $crUtilisateur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upUtilisateur", type="boolean", nullable=true)
     */
    private $upUtilisateur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delUtilisateur", type="boolean", nullable=true)
     */
    private $delUtilisateur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affDepot", type="boolean", nullable=true)
     */
    private $affDepot=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crDepot", type="boolean", nullable=true)
     */
    private $crDepot=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upDepot", type="boolean", nullable=true)
     */
    private $upDepot=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delDepot", type="boolean", nullable=true)
     */
    private $delDepot=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affFiliale", type="boolean", nullable=true)
     */
    private $affFiliale=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crFiliale", type="boolean", nullable=true)
     */
    private $crFiliale=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upFiliale", type="boolean", nullable=true)
     */
    private $upFiliale=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delFiliale", type="boolean", nullable=true)
     */
    private $delFiliale=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affManutentionnaire", type="boolean", nullable=true)
     */
    private $affManutentionnaire=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crManutentionnaire", type="boolean", nullable=true)
     */
    private $crManutentionnaire=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upManutentionnaire", type="boolean", nullable=true)
     */
    private $upManutentionnaire=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delManutentionnaire", type="boolean", nullable=true)
     */
    private $delManutentionnaire=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affIndisponibilite", type="boolean", nullable=true)
     */
    private $affIndisponibilite=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crIndisponibilite", type="boolean", nullable=true)
     */
    private $crIndisponibilite=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upIndisponibilite", type="boolean", nullable=true)
     */
    private $upIndisponibilite=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delIndisponibilite", type="boolean", nullable=true)
     */
    private $delIndisponibilite=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affSecteur", type="boolean", nullable=true)
     */
    private $affSecteur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crSecteur", type="boolean", nullable=true)
     */
    private $crSecteur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upSecteur", type="boolean", nullable=true)
     */
    private $upSecteur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delSecteur", type="boolean", nullable=true)
     */
    private $delSecteur=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affTypePrestation", type="boolean", nullable=true)
     */
    private $affTypePrestation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crTypePrestation", type="boolean", nullable=true)
     */
    private $crTypePrestation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upTypePrestation", type="boolean", nullable=true)
     */
    private $upTypePrestation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delTypePrestation", type="boolean", nullable=true)
     */
    private $delTypePrestation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affTypeConsommation", type="boolean", nullable=true)
     */
    private $affTypeConsommation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crTypeConsommation", type="boolean", nullable=true)
     */
    private $crTypeConsommation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upTypeConsommation", type="boolean", nullable=true)
     */
    private $upTypeConsommation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delTypeConsommation", type="boolean", nullable=true)
     */
    private $delTypeConsommation=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affBonCarburantHuile", type="boolean", nullable=true)
     */
    private $affBonCarburantHuile=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crBonCarburantHuile", type="boolean", nullable=true)
     */
    private $crBonCarburantHuile=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upBonCarburantHuile", type="boolean", nullable=true)
     */
    private $upBonCarburantHuile=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delBonCarburantHuile", type="boolean", nullable=true)
     */
    private $delBonCarburantHuile=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affPeage", type="boolean", nullable=true)
     */
    private $affPeage=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crPeage", type="boolean", nullable=true)
     */
    private $crPeage=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upPeage", type="boolean", nullable=true)
     */
    private $upPeage=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delPeage", type="boolean", nullable=true)
     */
    private $delPeage=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affRole", type="boolean", nullable=true)
     */
    private $affRole=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crRole", type="boolean", nullable=true)
     */
    private $crRole=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upRole", type="boolean", nullable=true)
     */
    private $upRole=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delRole", type="boolean", nullable=true)
     */
    private $delRole=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affVille", type="boolean", nullable=true)
     */
    private $affVille=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crVille", type="boolean", nullable=true)
     */
    private $crVille=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upVille", type="boolean", nullable=true)
     */
    private $upVille=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delVille", type="boolean", nullable=true)
     */
    private $delVille=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="affModification", type="boolean", nullable=true)
     */
    private $affModification=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delModification", type="boolean", nullable=true)
     */
    private $delModification=false;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="reporting", type="boolean", nullable=true)
     */
    private $reporting=false;


    public function __toString() {
        return $this->nomRole;
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
     * Set nomRole
     *
     * @param string $nomRole
     * @return Role
     */
    public function setNomRole($nomRole) {
        $this->nomRole = $nomRole;

        return $this;
    }

    /**
     * Get nomRole
     *
     * @return string 
     */
    public function getNomRole() {
        return $this->nomRole;
    }

    /**
     * Set affFDR
     *
     * @param boolean $affFDR
     * @return Role
     */
    public function setAffFDR($affFDR) {
        $this->affFDR = $affFDR;

        return $this;
    }

    /**
     * Get affFDR
     *
     * @return boolean 
     */
    public function getAffFDR() {
        return $this->affFDR;
    }

    /**
     * Set crFDR
     *
     * @param boolean $crFDR
     * @return Role
     */
    public function setCrFDR($crFDR) {
        $this->crFDR = $crFDR;

        return $this;
    }

    /**
     * Get crFDR
     *
     * @return boolean 
     */
    public function getCrFDR() {
        return $this->crFDR;
    }

    /**
     * Set upFDR
     *
     * @param boolean $upFDR
     * @return Role
     */
    public function setUpFDR($upFDR) {
        $this->upFDR = $upFDR;

        return $this;
    }

    /**
     * Get upFDR
     *
     * @return boolean 
     */
    public function getUpFDR() {
        return $this->upFDR;
    }

    /**
     * Set delFDR
     *
     * @param boolean $delFDR
     * @return Role
     */
    public function setDelFDR($delFDR) {
        $this->delFDR = $delFDR;

        return $this;
    }

    /**
     * Get delFDR
     *
     * @return boolean 
     */
    public function getDelFDR() {
        return $this->delFDR;
    }

    /**
     * Set affFDRPanne
     *
     * @param boolean $affFDRPanne
     * @return Role
     */
    public function setAffFDRPanne($affFDRPanne) {
        $this->affFDRPanne = $affFDRPanne;

        return $this;
    }

    /**
     * Get affFDRPanne
     *
     * @return boolean 
     */
    public function getAffFDRPanne() {
        return $this->affFDRPanne;
    }

    /**
     * Set crFDRPanne
     *
     * @param boolean $crFDRPanne
     * @return Role
     */
    public function setCrFDRPanne($crFDRPanne) {
        $this->crFDRPanne = $crFDRPanne;

        return $this;
    }

    /**
     * Get crFDRPanne
     *
     * @return boolean 
     */
    public function getCrFDRPanne() {
        return $this->crFDRPanne;
    }

    /**
     * Set upFDRPanne
     *
     * @param boolean $upFDRPanne
     * @return Role
     */
    public function setUpFDRPanne($upFDRPanne) {
        $this->upFDRPanne = $upFDRPanne;

        return $this;
    }

    /**
     * Get upFDRPanne
     *
     * @return boolean 
     */
    public function getUpFDRPanne() {
        return $this->upFDRPanne;
    }

    /**
     * Set delFDRPanne
     *
     * @param boolean $delFDRPanne
     * @return Role
     */
    public function setDelFDRPanne($delFDRPanne) {
        $this->delFDRPanne = $delFDRPanne;

        return $this;
    }

    /**
     * Get delFDRPanne
     *
     * @return boolean 
     */
    public function getDelFDRPanne() {
        return $this->delFDRPanne;
    }

    /**
     * Set affFDRAutrAgence
     *
     * @param boolean $affFDRAutrAgence
     * @return Role
     */
    public function setAffFDRAutrAgence($affFDRAutrAgence) {
        $this->affFDRAutrAgence = $affFDRAutrAgence;

        return $this;
    }

    /**
     * Get affFDRAutrAgence
     *
     * @return boolean 
     */
    public function getAffFDRAutrAgence() {
        return $this->affFDRAutrAgence;
    }

    /**
     * Set crFDRAutrAgence
     *
     * @param boolean $crFDRAutrAgence
     * @return Role
     */
    public function setCrFDRAutrAgence($crFDRAutrAgence) {
        $this->crFDRAutrAgence = $crFDRAutrAgence;

        return $this;
    }

    /**
     * Get crFDRAutrAgence
     *
     * @return boolean 
     */
    public function getCrFDRAutrAgence() {
        return $this->crFDRAutrAgence;
    }

    /**
     * Set upFDRAutrAgence
     *
     * @param boolean $upFDRAutrAgence
     * @return Role
     */
    public function setUpFDRAutrAgence($upFDRAutrAgence) {
        $this->upFDRAutrAgence = $upFDRAutrAgence;

        return $this;
    }

    /**
     * Get upFDRAutrAgence
     *
     * @return boolean 
     */
    public function getUpFDRAutrAgence() {
        return $this->upFDRAutrAgence;
    }

    /**
     * Set delFDRAutrAgence
     *
     * @param boolean $delFDRAutrAgence
     * @return Role
     */
    public function setDelFDRAutrAgence($delFDRAutrAgence) {
        $this->delFDRAutrAgence = $delFDRAutrAgence;

        return $this;
    }

    /**
     * Get delFDRAutrAgence
     *
     * @return boolean 
     */
    public function getDelFDRAutrAgence() {
        return $this->delFDRAutrAgence;
    }

    /**
     * Set crClientCompeFDL
     *
     * @param boolean $crClientCompeFDL
     * @return Role
     */
    public function setCrClientCompeFDL($crClientCompeFDL) {
        $this->crClientCompeFDL = $crClientCompeFDL;

        return $this;
    }

    /**
     * Get crClientCompeFDL
     *
     * @return boolean 
     */
    public function getCrClientCompeFDL() {
        return $this->crClientCompeFDL;
    }

    /**
     * Set affClientCompeFDL
     *
     * @param boolean $affClientCompeFDL
     * @return Role
     */
    public function setAffClientCompeFDL($affClientCompeFDL) {
        $this->affClientCompeFDL = $affClientCompeFDL;

        return $this;
    }

    /**
     * Get affClientCompeFDL
     *
     * @return boolean 
     */
    public function getAffClientCompeFDL() {
        return $this->affClientCompeFDL;
    }

    /**
     * Set upClientCompeFDL
     *
     * @param boolean $upClientCompeFDL
     * @return Role
     */
    public function setUpClientCompeFDL($upClientCompeFDL) {
        $this->upClientCompeFDL = $upClientCompeFDL;

        return $this;
    }

    /**
     * Get upClientCompeFDL
     *
     * @return boolean 
     */
    public function getUpClientCompeFDL() {
        return $this->upClientCompeFDL;
    }

    /**
     * Set delClientCompeFDL
     *
     * @param boolean $delClientCompeFDL
     * @return Role
     */
    public function setDelClientCompeFDL($delClientCompeFDL) {
        $this->delClientCompeFDL = $delClientCompeFDL;

        return $this;
    }

    /**
     * Get delClientCompeFDL
     *
     * @return boolean 
     */
    public function getDelClientCompeFDL() {
        return $this->delClientCompeFDL;
    }

    /**
     * Set crClientNnCompeFDL
     *
     * @param boolean $crClientNnCompeFDL
     * @return Role
     */
    public function setCrClientNnCompeFDL($crClientNnCompeFDL) {
        $this->crClientNnCompeFDL = $crClientNnCompeFDL;

        return $this;
    }

    /**
     * Get crClientNnCompeFDL
     *
     * @return boolean 
     */
    public function getCrClientNnCompeFDL() {
        return $this->crClientNnCompeFDL;
    }

    /**
     * Set affClientNnCompeFDL
     *
     * @param boolean $affClientNnCompeFDL
     * @return Role
     */
    public function setAffClientNnCompeFDL($affClientNnCompeFDL) {
        $this->affClientNnCompeFDL = $affClientNnCompeFDL;

        return $this;
    }

    /**
     * Get affClientNnCompeFDL
     *
     * @return boolean 
     */
    public function getAffClientNnCompeFDL() {
        return $this->affClientNnCompeFDL;
    }

    /**
     * Set upClientNnCompeFDL
     *
     * @param boolean $upClientNnCompeFDL
     * @return Role
     */
    public function setUpClientNnCompeFDL($upClientNnCompeFDL) {
        $this->upClientNnCompeFDL = $upClientNnCompeFDL;

        return $this;
    }

    /**
     * Get upClientNnCompeFDL
     *
     * @return boolean 
     */
    public function getUpClientNnCompeFDL() {
        return $this->upClientNnCompeFDL;
    }

    /**
     * Set delClientNnCompeFDL
     *
     * @param boolean $delClientNnCompeFDL
     * @return Role
     */
    public function setDelClientNnCompeFDL($delClientNnCompeFDL) {
        $this->delClientNnCompeFDL = $delClientNnCompeFDL;

        return $this;
    }

    /**
     * Get delClientNnCompeFDL
     *
     * @return boolean 
     */
    public function getDelClientNnCompeFDL() {
        return $this->delClientNnCompeFDL;
    }

    /**
     * Set affectationVehicule
     *
     * @param boolean $affectationVehicule
     * @return Role
     */
    public function setAffectationVehicule($affectationVehicule) {
        $this->affectationVehicule = $affectationVehicule;

        return $this;
    }

    /**
     * Get affectationVehicule
     *
     * @return boolean 
     */
    public function getAffectationVehicule() {
        return $this->affectationVehicule;
    }

    /**
     * Set cloturerFDR
     *
     * @param boolean $cloturerFDR
     * @return Role
     */
    public function setCloturerFDR($cloturerFDR) {
        $this->cloturerFDR = $cloturerFDR;

        return $this;
    }

    /**
     * Get cloturerFDR
     *
     * @return boolean 
     */
    public function getCloturerFDR() {
        return $this->cloturerFDR;
    }

    /**
     * Set cloturerFDRAffr
     *
     * @param boolean $cloturerFDRAffr
     * @return Role
     */
    public function setCloturerFDRAffr($cloturerFDRAffr) {
        $this->cloturerFDRAffr = $cloturerFDRAffr;

        return $this;
    }

    /**
     * Get cloturerFDRAffr
     *
     * @return boolean 
     */
    public function getCloturerFDRAffr() {
        return $this->cloturerFDRAffr;
    }

    /**
     * Set confRecDocCtm
     *
     * @param boolean $confRecDocCtm
     * @return Role
     */
    public function setConfRecDocCtm($confRecDocCtm) {
        $this->confRecDocCtm = $confRecDocCtm;

        return $this;
    }

    /**
     * Get confRecDocCtm
     *
     * @return boolean 
     */
    public function getConfRecDocCtm() {
        return $this->confRecDocCtm;
    }

    /**
     * Set confRecDocClient
     *
     * @param boolean $confRecDocClient
     * @return Role
     */
    public function setConfRecDocClient($confRecDocClient) {
        $this->confRecDocClient = $confRecDocClient;

        return $this;
    }

    /**
     * Get confRecDocClient
     *
     * @return boolean 
     */
    public function getConfRecDocClient() {
        return $this->confRecDocClient;
    }

    /**
     * Set editCompteur
     *
     * @param boolean $editCompteur
     * @return Role
     */
    public function setEditCompteur($editCompteur) {
        $this->editCompteur = $editCompteur;

        return $this;
    }

    /**
     * Get editCompteur
     *
     * @return boolean 
     */
    public function getEditCompteur() {
        return $this->editCompteur;
    }

    /**
     * Set editerPercentAssurParam
     *
     * @param boolean $editerPercentAssurParam
     * @return Role
     */
    public function setEditerPercentAssurParam($editerPercentAssurParam) {
        $this->editerPercentAssurParam = $editerPercentAssurParam;

        return $this;
    }

    /**
     * Get editerPercentAssurParam
     *
     * @return boolean 
     */
    public function getEditerPercentAssurParam() {
        return $this->editerPercentAssurParam;
    }

    /**
     * Set affClient
     *
     * @param boolean $affClient
     * @return Role
     */
    public function setAffClient($affClient) {
        $this->affClient = $affClient;

        return $this;
    }

    /**
     * Get affClient
     *
     * @return boolean 
     */
    public function getAffClient() {
        return $this->affClient;
    }

    /**
     * Set crClient
     *
     * @param boolean $crClient
     * @return Role
     */
    public function setCrClient($crClient) {
        $this->crClient = $crClient;

        return $this;
    }

    /**
     * Get crClient
     *
     * @return boolean 
     */
    public function getCrClient() {
        return $this->crClient;
    }

    /**
     * Set upClient
     *
     * @param boolean $upClient
     * @return Role
     */
    public function setUpClient($upClient) {
        $this->upClient = $upClient;

        return $this;
    }

    /**
     * Get upClient
     *
     * @return boolean 
     */
    public function getUpClient() {
        return $this->upClient;
    }

    /**
     * Set delClient
     *
     * @param boolean $delClient
     * @return Role
     */
    public function setDelClient($delClient) {
        $this->delClient = $delClient;

        return $this;
    }

    /**
     * Get delClient
     *
     * @return boolean 
     */
    public function getDelClient() {
        return $this->delClient;
    }

    /**
     * Set affVehicule
     *
     * @param boolean $affVehicule
     * @return Role
     */
    public function setAffVehicule($affVehicule) {
        $this->affVehicule = $affVehicule;

        return $this;
    }

    /**
     * Get affVehicule
     *
     * @return boolean 
     */
    public function getAffVehicule() {
        return $this->affVehicule;
    }

    /**
     * Set crVehicule
     *
     * @param boolean $crVehicule
     * @return Role
     */
    public function setCrVehicule($crVehicule) {
        $this->crVehicule = $crVehicule;

        return $this;
    }

    /**
     * Get crVehicule
     *
     * @return boolean 
     */
    public function getCrVehicule() {
        return $this->crVehicule;
    }

    /**
     * Set upVehicule
     *
     * @param boolean $upVehicule
     * @return Role
     */
    public function setUpVehicule($upVehicule) {
        $this->upVehicule = $upVehicule;

        return $this;
    }

    /**
     * Get upVehicule
     *
     * @return boolean 
     */
    public function getUpVehicule() {
        return $this->upVehicule;
    }

    /**
     * Set delVehicule
     *
     * @param boolean $delVehicule
     * @return Role
     */
    public function setDelVehicule($delVehicule) {
        $this->delVehicule = $delVehicule;

        return $this;
    }

    /**
     * Get delVehicule
     *
     * @return boolean 
     */
    public function getDelVehicule() {
        return $this->delVehicule;
    }

    /**
     * Set affChauffeur
     *
     * @param boolean $affChauffeur
     * @return Role
     */
    public function setAffChauffeur($affChauffeur) {
        $this->affChauffeur = $affChauffeur;

        return $this;
    }

    /**
     * Get affChauffeur
     *
     * @return boolean 
     */
    public function getAffChauffeur() {
        return $this->affChauffeur;
    }

    /**
     * Set crChauffeur
     *
     * @param boolean $crChauffeur
     * @return Role
     */
    public function setCrChauffeur($crChauffeur) {
        $this->crChauffeur = $crChauffeur;

        return $this;
    }

    /**
     * Get crChauffeur
     *
     * @return boolean 
     */
    public function getCrChauffeur() {
        return $this->crChauffeur;
    }

    /**
     * Set upChauffeur
     *
     * @param boolean $upChauffeur
     * @return Role
     */
    public function setUpChauffeur($upChauffeur) {
        $this->upChauffeur = $upChauffeur;

        return $this;
    }

    /**
     * Get upChauffeur
     *
     * @return boolean 
     */
    public function getUpChauffeur() {
        return $this->upChauffeur;
    }

    /**
     * Set delChauffeur
     *
     * @param boolean $delChauffeur
     * @return Role
     */
    public function setDelChauffeur($delChauffeur) {
        $this->delChauffeur = $delChauffeur;

        return $this;
    }

    /**
     * Get delChauffeur
     *
     * @return boolean 
     */
    public function getDelChauffeur() {
        return $this->delChauffeur;
    }

    /**
     * Set affUtilisateur
     *
     * @param boolean $affUtilisateur
     * @return Role
     */
    public function setAffUtilisateur($affUtilisateur) {
        $this->affUtilisateur = $affUtilisateur;

        return $this;
    }

    /**
     * Get affUtilisateur
     *
     * @return boolean 
     */
    public function getAffUtilisateur() {
        return $this->affUtilisateur;
    }

    /**
     * Set crUtilisateur
     *
     * @param boolean $crUtilisateur
     * @return Role
     */
    public function setCrUtilisateur($crUtilisateur) {
        $this->crUtilisateur = $crUtilisateur;

        return $this;
    }

    /**
     * Get crUtilisateur
     *
     * @return boolean 
     */
    public function getCrUtilisateur() {
        return $this->crUtilisateur;
    }

    /**
     * Set upUtilisateur
     *
     * @param boolean $upUtilisateur
     * @return Role
     */
    public function setUpUtilisateur($upUtilisateur) {
        $this->upUtilisateur = $upUtilisateur;

        return $this;
    }

    /**
     * Get upUtilisateur
     *
     * @return boolean 
     */
    public function getUpUtilisateur() {
        return $this->upUtilisateur;
    }

    /**
     * Set delUtilisateur
     *
     * @param boolean $delUtilisateur
     * @return Role
     */
    public function setDelUtilisateur($delUtilisateur) {
        $this->delUtilisateur = $delUtilisateur;

        return $this;
    }

    /**
     * Get delUtilisateur
     *
     * @return boolean 
     */
    public function getDelUtilisateur() {
        return $this->delUtilisateur;
    }

    /**
     * Set affDepot
     *
     * @param boolean $affDepot
     * @return Role
     */
    public function setAffDepot($affDepot) {
        $this->affDepot = $affDepot;

        return $this;
    }

    /**
     * Get affDepot
     *
     * @return boolean 
     */
    public function getAffDepot() {
        return $this->affDepot;
    }

    /**
     * Set crDepot
     *
     * @param boolean $crDepot
     * @return Role
     */
    public function setCrDepot($crDepot) {
        $this->crDepot = $crDepot;

        return $this;
    }

    /**
     * Get crDepot
     *
     * @return boolean 
     */
    public function getCrDepot() {
        return $this->crDepot;
    }

    /**
     * Set upDepot
     *
     * @param boolean $upDepot
     * @return Role
     */
    public function setUpDepot($upDepot) {
        $this->upDepot = $upDepot;

        return $this;
    }

    /**
     * Get upDepot
     *
     * @return boolean 
     */
    public function getUpDepot() {
        return $this->upDepot;
    }

    /**
     * Set delDepot
     *
     * @param boolean $delDepot
     * @return Role
     */
    public function setDelDepot($delDepot) {
        $this->delDepot = $delDepot;

        return $this;
    }

    /**
     * Get delDepot
     *
     * @return boolean 
     */
    public function getDelDepot() {
        return $this->delDepot;
    }

    /**
     * Set affFiliale
     *
     * @param boolean $affFiliale
     * @return Role
     */
    public function setAffFiliale($affFiliale) {
        $this->affFiliale = $affFiliale;

        return $this;
    }

    /**
     * Get affFiliale
     *
     * @return boolean 
     */
    public function getAffFiliale() {
        return $this->affFiliale;
    }

    /**
     * Set crFiliale
     *
     * @param boolean $crFiliale
     * @return Role
     */
    public function setCrFiliale($crFiliale) {
        $this->crFiliale = $crFiliale;

        return $this;
    }

    /**
     * Get crFiliale
     *
     * @return boolean 
     */
    public function getCrFiliale() {
        return $this->crFiliale;
    }

    /**
     * Set upFiliale
     *
     * @param boolean $upFiliale
     * @return Role
     */
    public function setUpFiliale($upFiliale) {
        $this->upFiliale = $upFiliale;

        return $this;
    }

    /**
     * Get upFiliale
     *
     * @return boolean 
     */
    public function getUpFiliale() {
        return $this->upFiliale;
    }

    /**
     * Set delFiliale
     *
     * @param boolean $delFiliale
     * @return Role
     */
    public function setDelFiliale($delFiliale) {
        $this->delFiliale = $delFiliale;

        return $this;
    }

    /**
     * Get delFiliale
     *
     * @return boolean 
     */
    public function getDelFiliale() {
        return $this->delFiliale;
    }

    /**
     * Set affManutentionnaire
     *
     * @param boolean $affManutentionnaire
     * @return Role
     */
    public function setAffManutentionnaire($affManutentionnaire) {
        $this->affManutentionnaire = $affManutentionnaire;

        return $this;
    }

    /**
     * Get affManutentionnaire
     *
     * @return boolean 
     */
    public function getAffManutentionnaire() {
        return $this->affManutentionnaire;
    }

    /**
     * Set crManutentionnaire
     *
     * @param boolean $crManutentionnaire
     * @return Role
     */
    public function setCrManutentionnaire($crManutentionnaire) {
        $this->crManutentionnaire = $crManutentionnaire;

        return $this;
    }

    /**
     * Get crManutentionnaire
     *
     * @return boolean 
     */
    public function getCrManutentionnaire() {
        return $this->crManutentionnaire;
    }

    /**
     * Set upManutentionnaire
     *
     * @param boolean $upManutentionnaire
     * @return Role
     */
    public function setUpManutentionnaire($upManutentionnaire) {
        $this->upManutentionnaire = $upManutentionnaire;

        return $this;
    }

    /**
     * Get upManutentionnaire
     *
     * @return boolean 
     */
    public function getUpManutentionnaire() {
        return $this->upManutentionnaire;
    }

    /**
     * Set delManutentionnaire
     *
     * @param boolean $delManutentionnaire
     * @return Role
     */
    public function setDelManutentionnaire($delManutentionnaire) {
        $this->delManutentionnaire = $delManutentionnaire;

        return $this;
    }

    /**
     * Get delManutentionnaire
     *
     * @return boolean 
     */
    public function getDelManutentionnaire() {
        return $this->delManutentionnaire;
    }

    /**
     * Set affIndisponibilite
     *
     * @param boolean $affIndisponibilite
     * @return Role
     */
    public function setAffIndisponibilite($affIndisponibilite) {
        $this->affIndisponibilite = $affIndisponibilite;

        return $this;
    }

    /**
     * Get affIndisponibilite
     *
     * @return boolean 
     */
    public function getAffIndisponibilite() {
        return $this->affIndisponibilite;
    }

    /**
     * Set crIndisponibilite
     *
     * @param boolean $crIndisponibilite
     * @return Role
     */
    public function setCrIndisponibilite($crIndisponibilite) {
        $this->crIndisponibilite = $crIndisponibilite;

        return $this;
    }

    /**
     * Get crIndisponibilite
     *
     * @return boolean 
     */
    public function getCrIndisponibilite() {
        return $this->crIndisponibilite;
    }

    /**
     * Set upIndisponibilite
     *
     * @param boolean $upIndisponibilite
     * @return Role
     */
    public function setUpIndisponibilite($upIndisponibilite) {
        $this->upIndisponibilite = $upIndisponibilite;

        return $this;
    }

    /**
     * Get upIndisponibilite
     *
     * @return boolean 
     */
    public function getUpIndisponibilite() {
        return $this->upIndisponibilite;
    }

    /**
     * Set delIndisponibilite
     *
     * @param boolean $delIndisponibilite
     * @return Role
     */
    public function setDelIndisponibilite($delIndisponibilite) {
        $this->delIndisponibilite = $delIndisponibilite;

        return $this;
    }

    /**
     * Get delIndisponibilite
     *
     * @return boolean 
     */
    public function getDelIndisponibilite() {
        return $this->delIndisponibilite;
    }

    /**
     * Set affSecteur
     *
     * @param boolean $affSecteur
     * @return Role
     */
    public function setAffSecteur($affSecteur) {
        $this->affSecteur = $affSecteur;

        return $this;
    }

    /**
     * Get affSecteur
     *
     * @return boolean 
     */
    public function getAffSecteur() {
        return $this->affSecteur;
    }

    /**
     * Set crSecteur
     *
     * @param boolean $crSecteur
     * @return Role
     */
    public function setCrSecteur($crSecteur) {
        $this->crSecteur = $crSecteur;

        return $this;
    }

    /**
     * Get crSecteur
     *
     * @return boolean 
     */
    public function getCrSecteur() {
        return $this->crSecteur;
    }

    /**
     * Set upSecteur
     *
     * @param boolean $upSecteur
     * @return Role
     */
    public function setUpSecteur($upSecteur) {
        $this->upSecteur = $upSecteur;

        return $this;
    }

    /**
     * Get upSecteur
     *
     * @return boolean 
     */
    public function getUpSecteur() {
        return $this->upSecteur;
    }

    /**
     * Set delSecteur
     *
     * @param boolean $delSecteur
     * @return Role
     */
    public function setDelSecteur($delSecteur) {
        $this->delSecteur = $delSecteur;

        return $this;
    }

    /**
     * Get delSecteur
     *
     * @return boolean 
     */
    public function getDelSecteur() {
        return $this->delSecteur;
    }

    /**
     * Set affTypePrestation
     *
     * @param boolean $affTypePrestation
     * @return Role
     */
    public function setAffTypePrestation($affTypePrestation) {
        $this->affTypePrestation = $affTypePrestation;

        return $this;
    }

    /**
     * Get affTypePrestation
     *
     * @return boolean 
     */
    public function getAffTypePrestation() {
        return $this->affTypePrestation;
    }

    /**
     * Set crTypePrestation
     *
     * @param boolean $crTypePrestation
     * @return Role
     */
    public function setCrTypePrestation($crTypePrestation) {
        $this->crTypePrestation = $crTypePrestation;

        return $this;
    }

    /**
     * Get crTypePrestation
     *
     * @return boolean 
     */
    public function getCrTypePrestation() {
        return $this->crTypePrestation;
    }

    /**
     * Set upTypePrestation
     *
     * @param boolean $upTypePrestation
     * @return Role
     */
    public function setUpTypePrestation($upTypePrestation) {
        $this->upTypePrestation = $upTypePrestation;

        return $this;
    }

    /**
     * Get upTypePrestation
     *
     * @return boolean 
     */
    public function getUpTypePrestation() {
        return $this->upTypePrestation;
    }

    /**
     * Set delTypePrestation
     *
     * @param boolean $delTypePrestation
     * @return Role
     */
    public function setDelTypePrestation($delTypePrestation) {
        $this->delTypePrestation = $delTypePrestation;

        return $this;
    }

    /**
     * Get delTypePrestation
     *
     * @return boolean 
     */
    public function getDelTypePrestation() {
        return $this->delTypePrestation;
    }

    /**
     * Set affTypeConsommation
     *
     * @param boolean $affTypeConsommation
     * @return Role
     */
    public function setAffTypeConsommation($affTypeConsommation) {
        $this->affTypeConsommation = $affTypeConsommation;

        return $this;
    }

    /**
     * Get affTypeConsommation
     *
     * @return boolean 
     */
    public function getAffTypeConsommation() {
        return $this->affTypeConsommation;
    }

    /**
     * Set crTypeConsommation
     *
     * @param boolean $crTypeConsommation
     * @return Role
     */
    public function setCrTypeConsommation($crTypeConsommation) {
        $this->crTypeConsommation = $crTypeConsommation;

        return $this;
    }

    /**
     * Get crTypeConsommation
     *
     * @return boolean 
     */
    public function getCrTypeConsommation() {
        return $this->crTypeConsommation;
    }

    /**
     * Set upTypeConsommation
     *
     * @param boolean $upTypeConsommation
     * @return Role
     */
    public function setUpTypeConsommation($upTypeConsommation) {
        $this->upTypeConsommation = $upTypeConsommation;

        return $this;
    }

    /**
     * Get upTypeConsommation
     *
     * @return boolean 
     */
    public function getUpTypeConsommation() {
        return $this->upTypeConsommation;
    }

    /**
     * Set delTypeConsommation
     *
     * @param boolean $delTypeConsommation
     * @return Role
     */
    public function setDelTypeConsommation($delTypeConsommation) {
        $this->delTypeConsommation = $delTypeConsommation;

        return $this;
    }

    /**
     * Get delTypeConsommation
     *
     * @return boolean 
     */
    public function getDelTypeConsommation() {
        return $this->delTypeConsommation;
    }

    /**
     * Set affRole
     *
     * @param boolean $affRole
     * @return Role
     */
    public function setAffRole($affRole) {
        $this->affRole = $affRole;

        return $this;
    }

    /**
     * Get affRole
     *
     * @return boolean 
     */
    public function getAffRole() {
        return $this->affRole;
    }

    /**
     * Set crRole
     *
     * @param boolean $crRole
     * @return Role
     */
    public function setCrRole($crRole) {
        $this->crRole = $crRole;

        return $this;
    }

    /**
     * Get crRole
     *
     * @return boolean 
     */
    public function getCrRole() {
        return $this->crRole;
    }

    /**
     * Set upRole
     *
     * @param boolean $upRole
     * @return Role
     */
    public function setUpRole($upRole) {
        $this->upRole = $upRole;

        return $this;
    }

    /**
     * Get upRole
     *
     * @return boolean 
     */
    public function getUpRole() {
        return $this->upRole;
    }

    /**
     * Set delRole
     *
     * @param boolean $delRole
     * @return Role
     */
    public function setDelRole($delRole) {
        $this->delRole = $delRole;

        return $this;
    }

    /**
     * Get delRole
     *
     * @return boolean 
     */
    public function getDelRole() {
        return $this->delRole;
    }

    /**
     * Set affVille
     *
     * @param boolean $affVille
     * @return Role
     */
    public function setAffVille($affVille) {
        $this->affVille = $affVille;

        return $this;
    }

    /**
     * Get affVille
     *
     * @return boolean 
     */
    public function getAffVille() {
        return $this->affVille;
    }

    /**
     * Set crVille
     *
     * @param boolean $crVille
     * @return Role
     */
    public function setCrVille($crVille) {
        $this->crVille = $crVille;

        return $this;
    }

    /**
     * Get crVille
     *
     * @return boolean 
     */
    public function getCrVille() {
        return $this->crVille;
    }

    /**
     * Set upVille
     *
     * @param boolean $upVille
     * @return Role
     */
    public function setUpVille($upVille) {
        $this->upVille = $upVille;

        return $this;
    }

    /**
     * Get upVille
     *
     * @return boolean 
     */
    public function getUpVille() {
        return $this->upVille;
    }

    /**
     * Set delVille
     *
     * @param boolean $delVille
     * @return Role
     */
    public function setDelVille($delVille) {
        $this->delVille = $delVille;

        return $this;
    }

    /**
     * Get delVille
     *
     * @return boolean 
     */
    public function getDelVille() {
        return $this->delVille;
    }

    /**
     * Set cancelFDR
     *
     * @param boolean $cancelFDR
     * @return Role
     */
    public function setCancelFDR($cancelFDR) {
        $this->cancelFDR = $cancelFDR;

        return $this;
    }

    /**
     * Get cancelFDR
     *
     * @return boolean 
     */
    public function getCancelFDR() {
        return $this->cancelFDR;
    }

    /**
     * Set cancelClientCompeFDL
     *
     * @param boolean $cancelClientCompeFDL
     * @return Role
     */
    public function setCancelClientCompeFDL($cancelClientCompeFDL) {
        $this->cancelClientCompeFDL = $cancelClientCompeFDL;

        return $this;
    }

    /**
     * Get cancelClientCompeFDL
     *
     * @return boolean 
     */
    public function getCancelClientCompeFDL() {
        return $this->cancelClientCompeFDL;
    }

    /**
     * Set cancelClientNnCompeFDL
     *
     * @param boolean $cancelClientNnCompeFDL
     * @return Role
     */
    public function setCancelClientNnCompeFDL($cancelClientNnCompeFDL) {
        $this->cancelClientNnCompeFDL = $cancelClientNnCompeFDL;

        return $this;
    }

    /**
     * Get cancelClientNnCompeFDL
     *
     * @return boolean 
     */
    public function getCancelClientNnCompeFDL() {
        return $this->cancelClientNnCompeFDL;
    }

    /**
     * Set editerPlageHoraireParam
     *
     * @param boolean $editerPlageHoraireParam
     * @return Role
     */
    public function setEditerPlageHoraireParam($editerPlageHoraireParam) {
        $this->editerPlageHoraireParam = $editerPlageHoraireParam;

        return $this;
    }

    /**
     * Get editerPlageHoraireParam
     *
     * @return boolean 
     */
    public function getEditerPlageHoraireParam() {
        return $this->editerPlageHoraireParam;
    }

    /**
     * Set affModification
     *
     * @param boolean $affModification
     * @return Role
     */
    public function setAffModification($affModification) {
        $this->affModification = $affModification;

        return $this;
    }

    /**
     * Get affModification
     *
     * @return boolean 
     */
    public function getAffModification() {
        return $this->affModification;
    }

    /**
     * Set delModification
     *
     * @param boolean $delModification
     * @return Role
     */
    public function setDelModification($delModification) {
        $this->delModification = $delModification;

        return $this;
    }

    /**
     * Get delModification
     *
     * @return boolean 
     */
    public function getDelModification() {
        return $this->delModification;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Role
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set affectationChauffManu
     *
     * @param boolean $affectationChauffManu
     * @return Role
     */
    public function setAffectationChauffManu($affectationChauffManu) {
        $this->affectationChauffManu = $affectationChauffManu;

        return $this;
    }

    /**
     * Get affectationChauffManu
     *
     * @return boolean 
     */
    public function getAffectationChauffManu() {
        return $this->affectationChauffManu;
    }

    /**
     * Set imprimerFDR
     *
     * @param boolean $imprimerFDR
     * @return Role
     */
    public function setImprimerFDR($imprimerFDR) {
        $this->imprimerFDR = $imprimerFDR;

        return $this;
    }

    /**
     * Get imprimerFDR
     *
     * @return boolean 
     */
    public function getImprimerFDR() {
        return $this->imprimerFDR;
    }

    /**
     * Set rechercherFDR
     *
     * @param boolean $rechercherFDR
     * @return Role
     */
    public function setRechercherFDR($rechercherFDR) {
        $this->rechercherFDR = $rechercherFDR;

        return $this;
    }

    /**
     * Get rechercherFDR
     *
     * @return boolean 
     */
    public function getRechercherFDR() {
        return $this->rechercherFDR;
    }

    /**
     * Set imprimerFDL
     *
     * @param boolean $imprimerFDL
     * @return Role
     */
    public function setImprimerFDL($imprimerFDL) {
        $this->imprimerFDL = $imprimerFDL;

        return $this;
    }

    /**
     * Get imprimerFDL
     *
     * @return boolean 
     */
    public function getImprimerFDL() {
        return $this->imprimerFDL;
    }

    /**
     * Set rechercherFDL
     *
     * @param boolean $rechercherFDL
     * @return Role
     */
    public function setRechercherFDL($rechercherFDL) {
        $this->rechercherFDL = $rechercherFDL;

        return $this;
    }

    /**
     * Get rechercherFDL
     *
     * @return boolean 
     */
    public function getRechercherFDL() {
        return $this->rechercherFDL;
    }

    /**
     * Set ttEtatAfficherParFdl
     *
     * @param boolean $ttEtatAfficherParFdl
     * @return Role
     */
    public function setTtEtatAfficherParFdl($ttEtatAfficherParFdl) {
        $this->ttEtatAfficherParFdl = $ttEtatAfficherParFdl;

        return $this;
    }

    /**
     * Get ttEtatAfficherParFdl
     *
     * @return boolean 
     */
    public function getTtEtatAfficherParFdl() {
        return $this->ttEtatAfficherParFdl;
    }

    /**
     * Set affBonCarburantHuile
     *
     * @param boolean $affBonCarburantHuile
     * @return Role
     */
    public function setAffBonCarburantHuile($affBonCarburantHuile) {
        $this->affBonCarburantHuile = $affBonCarburantHuile;

        return $this;
    }

    /**
     * Get affBonCarburantHuile
     *
     * @return boolean 
     */
    public function getAffBonCarburantHuile() {
        return $this->affBonCarburantHuile;
    }

    /**
     * Set crBonCarburantHuile
     *
     * @param boolean $crBonCarburantHuile
     * @return Role
     */
    public function setCrBonCarburantHuile($crBonCarburantHuile) {
        $this->crBonCarburantHuile = $crBonCarburantHuile;

        return $this;
    }

    /**
     * Get crBonCarburantHuile
     *
     * @return boolean 
     */
    public function getCrBonCarburantHuile() {
        return $this->crBonCarburantHuile;
    }

    /**
     * Set upBonCarburantHuile
     *
     * @param boolean $upBonCarburantHuile
     * @return Role
     */
    public function setUpBonCarburantHuile($upBonCarburantHuile) {
        $this->upBonCarburantHuile = $upBonCarburantHuile;

        return $this;
    }

    /**
     * Get upBonCarburantHuile
     *
     * @return boolean 
     */
    public function getUpBonCarburantHuile() {
        return $this->upBonCarburantHuile;
    }

    /**
     * Set delBonCarburantHuile
     *
     * @param boolean $delBonCarburantHuile
     * @return Role
     */
    public function setDelBonCarburantHuile($delBonCarburantHuile) {
        $this->delBonCarburantHuile = $delBonCarburantHuile;

        return $this;
    }

    /**
     * Get delBonCarburantHuile
     *
     * @return boolean 
     */
    public function getDelBonCarburantHuile() {
        return $this->delBonCarburantHuile;
    }

    /**
     * Set affPeage
     *
     * @param boolean $affPeage
     * @return Role
     */
    public function setAffPeage($affPeage) {
        $this->affPeage = $affPeage;

        return $this;
    }

    /**
     * Get affPeage
     *
     * @return boolean 
     */
    public function getAffPeage() {
        return $this->affPeage;
    }

    /**
     * Set crPeage
     *
     * @param boolean $crPeage
     * @return Role
     */
    public function setCrPeage($crPeage) {
        $this->crPeage = $crPeage;

        return $this;
    }

    /**
     * Get crPeage
     *
     * @return boolean 
     */
    public function getCrPeage() {
        return $this->crPeage;
    }

    /**
     * Set upPeage
     *
     * @param boolean $upPeage
     * @return Role
     */
    public function setUpPeage($upPeage) {
        $this->upPeage = $upPeage;

        return $this;
    }

    /**
     * Get upPeage
     *
     * @return boolean 
     */
    public function getUpPeage() {
        return $this->upPeage;
    }

    /**
     * Set delPeage
     *
     * @param boolean $delPeage
     * @return Role
     */
    public function setDelPeage($delPeage) {
        $this->delPeage = $delPeage;

        return $this;
    }

    /**
     * Get delPeage
     *
     * @return boolean 
     */
    public function getDelPeage() {
        return $this->delPeage;
    }


    /**
     * Set reporting
     *
     * @param boolean $reporting
     * @return Role
     */
    public function setReporting($reporting)
    {
        $this->reporting = $reporting;

        return $this;
    }

    /**
     * Get reporting
     *
     * @return boolean 
     */
    public function getReporting()
    {
        return $this->reporting;
    }

    /**
     * Set upCloturerFDR
     *
     * @param boolean $upCloturerFDR
     * @return Role
     */
    public function setUpCloturerFDR($upCloturerFDR)
    {
        $this->upCloturerFDR = $upCloturerFDR;

        return $this;
    }

    /**
     * Get upCloturerFDR
     *
     * @return boolean 
     */
    public function getUpCloturerFDR()
    {
        return $this->upCloturerFDR;
    }

    /**
     * Set upCloturerFDRAffr
     *
     * @param boolean $upCloturerFDRAffr
     * @return Role
     */
    public function setUpCloturerFDRAffr($upCloturerFDRAffr)
    {
        $this->upCloturerFDRAffr = $upCloturerFDRAffr;

        return $this;
    }

    /**
     * Get upCloturerFDRAffr
     *
     * @return boolean 
     */
    public function getUpCloturerFDRAffr()
    {
        return $this->upCloturerFDRAffr;
    }
}
