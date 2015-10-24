<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientFdrV
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fdr\AdminBundle\Entity\ClientFdrVRepository")
 */
class ClientFdrV {

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="clientFdrVs")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="FeuilleDeRoute", inversedBy="clientFdrVs")
     * @ORM\JoinColumn(nullable=true,onDelete="CASCADE")
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
     *
     * @ORM\Column(name="secteur", type="string", length=100)
     */
    private $secteur;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set secteur
     *
     * @param string $secteur
     * @return ClientFdrV
     */
    public function setSecteur($secteur) {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return string 
     */
    public function getSecteur() {
        return $this->secteur;
    }

    /**
     * Set client
     *
     * @param \Fdr\AdminBundle\Entity\Client $client
     * @return ClientFdrV
     */
    public function setClient(\Fdr\AdminBundle\Entity\Client $client) {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Fdr\AdminBundle\Entity\Client 
     */
    public function getClient() {
        return $this->client;
    }

    /**
     * Set feuilleDeRoute
     *
     * @param \Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoute
     * @return ClientFdrV
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
        return (string)$this->client;
    }

}
