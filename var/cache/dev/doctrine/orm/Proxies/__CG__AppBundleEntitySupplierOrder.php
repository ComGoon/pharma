<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SupplierOrder extends \AppBundle\Entity\SupplierOrder implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'reference', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'dateAdd', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'supplier', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'pharmacy', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'orderMedications'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'reference', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'dateAdd', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'supplier', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'pharmacy', '' . "\0" . 'AppBundle\\Entity\\SupplierOrder' . "\0" . 'orderMedications'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SupplierOrder $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdd($dateAdd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdd', [$dateAdd]);

        return parent::setDateAdd($dateAdd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdd', []);

        return parent::getDateAdd();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setPharmacy(\AppBundle\Entity\Pharmacy $pharmacy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPharmacy', [$pharmacy]);

        return parent::setPharmacy($pharmacy);
    }

    /**
     * {@inheritDoc}
     */
    public function getPharmacy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPharmacy', []);

        return parent::getPharmacy();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedications(\AppBundle\Entity\OrderMedication $medications = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedications', [$medications]);

        return parent::setMedications($medications);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedications()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedications', []);

        return parent::getMedications();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrderMedications(\AppBundle\Entity\OrderMedication $orderMedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrderMedications', [$orderMedication]);

        return parent::addOrderMedications($orderMedication);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrderMedications(\AppBundle\Entity\OrderMedication $orderMedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrderMedications', [$orderMedication]);

        return parent::removeOrderMedications($orderMedication);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderMedications()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderMedications', []);

        return parent::getOrderMedications();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupplier(\AppBundle\Entity\Supplier $supplier = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupplier', [$supplier]);

        return parent::setSupplier($supplier);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupplier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupplier', []);

        return parent::getSupplier();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrderMedication(\AppBundle\Entity\OrderMedication $orderMedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrderMedication', [$orderMedication]);

        return parent::addOrderMedication($orderMedication);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrderMedication(\AppBundle\Entity\OrderMedication $orderMedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrderMedication', [$orderMedication]);

        return parent::removeOrderMedication($orderMedication);
    }

}