<?php

namespace Fdr\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="fdr_utilisateur")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->modifications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->expiresAt= new \DateTime();
        $this->expiresAt->modify('+12 month');
    }

    /**
   * @ORM\OneToMany(targetEntity="Fdr\AdminBundle\Entity\Modification",mappedBy="user")
   * @ORM\JoinColumn(nullable=true)
   */
    private $modifications;
    /**
   * @ORM\OneToMany(targetEntity="Fdr\AdminBundle\Entity\FeuilleDeRoute",mappedBy="user",cascade={"persist"})
   * @ORM\JoinColumn(nullable=true)
   */
    private $feuilleDeRoutes;
    
    /**
   * @ORM\OneToMany(targetEntity="Fdr\AdminBundle\Entity\MissionAffretement",mappedBy="user",cascade={"persist"})
   * @ORM\JoinColumn(nullable=true)
   */
    private $missionAffretements; 
    
    /**
   * @Assert\NotBlank()
   * @ORM\ManyToOne(targetEntity="Fdr\AdminBundle\Entity\Depot",inversedBy="users")
   * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
   */
  
    private $depot;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alpha", message="La valeur du nom n'est pas valide.")
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Type(type="alpha", message="La valeur {{ value }} n'est pas valide.")
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un {{ type }}.") 
     * @ORM\Column(name="matricule", type="string", length=100,nullable=true)
     */
    private $matricule;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un {{ type }}.") 
     * @ORM\Column(name="cin", type="string", length=100, nullable=true,unique=true)
     */
    private $cin;
    
    /**
     * @var string
     * @Assert\Regex("/[\d\-\ ]+/")
     * @Assert\Length(min = "10")
     * @ORM\Column(name="tel", type="string", length=100, nullable=true, unique=true)
     */
    private $tel;

    /**
     * @var string
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un {{ type }}.")
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;
    
    protected $email;
    protected $username;
    //protected $expiresAt;
    public function __toString()
    {
        return (string) $this->getUsername();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return User
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return User
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     * @return User
     */
    public function addModification(\Fdr\AdminBundle\Entity\Modification $modifications)
    {
        $this->modifications[] = $modifications;

        return $this;
    }

    /**
     * Remove modifications
     *
     * @param \Fdr\AdminBundle\Entity\Modification $modifications
     */
    public function removeModification(\Fdr\AdminBundle\Entity\Modification $modifications)
    {
        $this->modifications->removeElement($modifications);
    }

    /**
     * Get modifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModifications()
    {
        return $this->modifications;
    }


    /**
     * Set depot
     *
     * @param \Fdr\AdminBundle\Entity\Depot $depot
     * @return User
     */
    public function setDepot(\Fdr\AdminBundle\Entity\Depot $depot)
    {
        $this->depot = $depot;

        return $this;
    }

    /**
     * Get depot
     *
     * @return \Fdr\AdminBundle\Entity\Depot 
     */
    public function getDepot()
    {
        return $this->depot;
    }
    
    /*******************************/
    /*******************************/
    /**
     * @return User
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }
    
    

    /**
     * Add missionAffretements
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements
     * @return User
     */
    public function addMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements)
    {
        $this->missionAffretements[] = $missionAffretements;

        return $this;
    }

    /**
     * Remove missionAffretements
     *
     * @param \Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements
     */
    public function removeMissionAffretement(\Fdr\AdminBundle\Entity\MissionAffretement $missionAffretements)
    {
        $this->missionAffretements->removeElement($missionAffretements);
    }

    /**
     * Get missionAffretements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMissionAffretements()
    {
        return $this->missionAffretements;
    }

    /**
     * Add feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     * @return User
     */
    public function addFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes)
    {
        $this->feuilleDeRoutes[] = $feuilleDeRoutes;

        return $this;
    }

    /**
     * Remove feuilleDeRoutes
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes
     */
    public function removeFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes)
    {
        $this->feuilleDeRoutes->removeElement($feuilleDeRoutes);
    }

    /**
     * Get feuilleDeRoutes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFeuilleDeRoutes()
    {
        return $this->feuilleDeRoutes;
    }
}
