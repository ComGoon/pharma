<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Prescription extends \AppBundle\Entity\Prescription implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'reference', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'dateAdd', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'patient', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'pharmacy', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'doctor', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'prescriptionMedication'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'reference', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'dateAdd', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'patient', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'pharmacy', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'doctor', '' . "\0" . 'AppBundle\\Entity\\Prescription' . "\0" . 'prescriptionMedication'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Prescription $proxy) {
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
    public function setPatient(\AppBundle\Entity\Patient $patient = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPatient', [$patient]);

        return parent::setPatient($patient);
    }

    /**
     * {@inheritDoc}
     */
    public function getPatient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatient', []);

        return parent::getPatient();
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
    public function setDoctor(\AppBundle\Entity\Doctor $doctor = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDoctor', [$doctor]);

        return parent::setDoctor($doctor);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoctor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoctor', []);

        return parent::getDoctor();
    }

    /**
     * {@inheritDoc}
     */
    public function addPrescriptionMedication(\AppBundle\Entity\PrescriptionMedication $prescriptionMedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPrescriptionMedication', [$prescriptionMedication]);

        return parent::addPrescriptionMedication($prescriptionMedication);
    }

    /**
     * {@inheritDoc}
     */
    public function removePrescriptionMedication(\AppBundle\Entity\PrescriptionMedication $prescriptionMedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePrescriptionMedication', [$prescriptionMedication]);

        return parent::removePrescriptionMedication($prescriptionMedication);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrescriptionMedication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrescriptionMedication', []);

        return parent::getPrescriptionMedication();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
