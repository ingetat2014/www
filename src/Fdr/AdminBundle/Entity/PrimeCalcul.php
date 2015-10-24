<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Fdr\AdminBundle\Entity;

/**
 * Description of PrimeCalcul
 *
 * @author Mariam
 */
class PrimeCalcul {
    
    private $entity;
    private $chauffeurMatricule;
    private $chauffNom;
    private $kmParcouru;
    private $quantiteLitre;
    private $nbJours;
    private $nbRepas;
    private $nbDecoucher;
    private $nbPetitDej;
    private $remorque;
    private $nbManutention;
    private $typePrestation;
    private $vehicule;
    private $prise;
    private $chauffId;
    private $date;
    
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    public function getChauffId()
    {
        return $this->chauffId;
    }
    public function setChauffId($chauffId)
    {
        $this->chauffId = $chauffId;
    }
    public function getVehicule()
    {
        return $this->vehicule;
    }
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    }
     public function getPrise()
    {
        return $this->prise;
    }
    public function setPrise($prise)
    {
        $this->prise = $prise;
    }
    public function getTypePrestation()
    {
        return $this->typePrestation;
    }
    public function setTypePrestation($typePrestation)
    {
        $this->typePrestation = $typePrestation;
    }
    public function getNbJours()
    {
        return $this->nbJours;
    }
    public function setNbJours($nbJours)
    {
        $this->nbJours = $nbJours;
    }
     public function getNbRepas()
    {
        return $this->nbRepas;
    }
    public function setNbRepas($nbRepas)
    {
        $this->nbRepas = $nbRepas;
    }
     public function getNbDecoucher()
    {
        return $this->nbDecoucher;
    }
    public function setNbDecoucher($nbDecoucher)
    {
        $this->nbDecoucher = $nbDecoucher;
    }
     public function getNbPetitDej()
    {
        return $this->nbPetitDej;
    }
    public function setNbPetitDej($nbPetitDej)
    {
        $this->nbPetitDej = $nbPetitDej;
    }
     public function getRemorque()
    {
        return $this->remorque;
    }
    public function setRemorque($remorque)
    {
        $this->remorque = $remorque;
    }
     public function getNbManutention()
    {
        return $this->nbManutention;
    }
    public function setNbManutention($nbManutention)
    {
        $this->nbManutention = $nbManutention;
    }
    public function getEntity()
    {
        return $this->entity;
    }
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }
    public function getChauffeurMatricule()
    {
        return $this->chauffeurMatricule;
    }
    public function setChauffeurMatricule($chauffeurMatricule)
    {
        $this->chauffeurMatricule = $chauffeurMatricule;
    }
    
    public function getChauffNom()
    {
        return $this->chauffNom;
    }
    public function setChauffNom($chauffNom)
    {
        $this->chauffNom = $chauffNom;
    }
    public function getKmParcouru()
    {
        return $this->kmParcouru;
    }
    public function setKmParcouru($kmParcouru)
    {
        $this->kmParcouru = $kmParcouru;
    }
    public function getQuantiteLitre()
    {
        return $this->quantiteLitre;
    }
    public function setQuantiteLitre($quantiteLitre)
    {
        $this->quantiteLitre = $quantiteLitre;
    }
     public function __construct()
    {
         
    }
    
    public function __toString() {
        return $this->entity;
    }
    
}
