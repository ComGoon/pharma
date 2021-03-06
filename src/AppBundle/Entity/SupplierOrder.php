<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Prescription
 *
 * @ORM\Table(name="supplier_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierOrderRepository")
 */
class SupplierOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="string", unique=true)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=80)
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Supplier",inversedBy="supplierOrder")
     * @Assert\NotBlank(message="Veuillez remplir ce champs")
     */

    private $supplier;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pharmacy",inversedBy="supplierOrder")
     * @Assert\NotBlank(message="Veuillez remplir ce champs")
     */
    private $pharmacy;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\OrderMedication", mappedBy="supplierOrder")
     */
    private $orderMedications;



    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return SupplierOrder
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return SupplierOrder
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return SupplierOrder
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set pharmacy
     *
     * @param \AppBundle\Entity\Pharmacy $pharmacy
     *
     * @return SupplierOrder
     */
    public function setPharmacy(\AppBundle\Entity\Pharmacy $pharmacy = null)
    {
        $this->pharmacy = $pharmacy;

        return $this;
    }

    /**
     * Get pharmacy
     *
     * @return \AppBundle\Entity\Pharmacy
     */
    public function getPharmacy()
    {
        return $this->pharmacy;
    }




    public function __construct()
    {

    }


    /**
     * Set medications
     *
     * @param \AppBundle\Entity\OrderMedication $medications
     *
     * @return SupplierOrder
     */
    public function setMedications(\AppBundle\Entity\OrderMedication $medications = null)
    {
        $this->medications = $medications;

        return $this;
    }

    /**
     * Get medications
     *
     * @return \AppBundle\Entity\OrderMedication
     */
    public function getMedications()
    {
        return $this->orderMedications;
    }

    /**
     * Add prescriptionMedication
     *
     * @param \AppBundle\Entity\OrderMedication $orderMedication
     *
     * @return Prescription
     */
    public function addOrderMedications(\AppBundle\Entity\OrderMedication $orderMedication)
    {
        $this->orderMedications[] = $orderMedication;

//        return $this;
    }

    /**
     * Remove orderMedications
     *
     * @param \AppBundle\Entity\OrderMedication $orderMedication
     */
    public function removeOrderMedications(\AppBundle\Entity\OrderMedication $orderMedication)
    {
        $this->orderMedications->removeElement($orderMedication);
    }

    /**
     * Get orderMedications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderMedications()
    {
        return $this->orderMedications;
    }

    /**
     * Set supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return SupplierOrder
     */
    public function setSupplier(\AppBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \AppBundle\Entity\Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Add orderMedication
     *
     * @param \AppBundle\Entity\OrderMedication $orderMedication
     *
     * @return SupplierOrder
     */
    public function addOrderMedication(\AppBundle\Entity\OrderMedication $orderMedication)
    {
        $this->orderMedications[] = $orderMedication;

        return $this;
    }

    /**
     * Remove orderMedication
     *
     * @param \AppBundle\Entity\OrderMedication $orderMedication
     */
    public function removeOrderMedication(\AppBundle\Entity\OrderMedication $orderMedication)
    {
        $this->orderMedications->removeElement($orderMedication);
    }
}
