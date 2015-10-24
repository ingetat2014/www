<?php

namespace Proxies\__CG__\Fdr\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Filiale extends \Fdr\AdminBundle\Entity\Filiale implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'depots', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'feuilleDeRoutes', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'id', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'libelle', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'adresse');
        }

        return array('__isInitialized__', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'depots', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'feuilleDeRoutes', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'id', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'libelle', '' . "\0" . 'Fdr\\AdminBundle\\Entity\\Filiale' . "\0" . 'adresse');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Filiale $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelle($libelle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelle', array($libelle));

        return parent::setLibelle($libelle);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelle', array());

        return parent::getLibelle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function addDepot(\Fdr\AdminBundle\Entity\Depot $depots)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDepot', array($depots));

        return parent::addDepot($depots);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDepot(\Fdr\AdminBundle\Entity\Depot $depots)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDepot', array($depots));

        return parent::removeDepot($depots);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepots()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepots', array());

        return parent::getDepots();
    }

    /**
     * {@inheritDoc}
     */
    public function addFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFeuilleDeRoute', array($feuilleDeRoutes));

        return parent::addFeuilleDeRoute($feuilleDeRoutes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFeuilleDeRoute(\Fdr\AdminBundle\Entity\FeuilleDeRoute $feuilleDeRoutes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFeuilleDeRoute', array($feuilleDeRoutes));

        return parent::removeFeuilleDeRoute($feuilleDeRoutes);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeuilleDeRoutes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeuilleDeRoutes', array());

        return parent::getFeuilleDeRoutes();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
