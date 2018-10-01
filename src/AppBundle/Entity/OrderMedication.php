<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderMedication
 *
 * @ORM\Table(name="order_medication")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderMedicationsRepository")
 */
class OrderMedication
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
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SupplierOrder",inversedBy="orderMedications"))
     * @ORM\JoinColumn(name="supplierOrder_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $supplierOrder;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Medication",inversedBy="orderMedications"))
     * @ORM\JoinColumn(name="medication_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $medication;


    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float",nullable=true)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer",nullable=false)
     */
    private $quantity;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Constructor
     */
    public function __construct()
    {
//        $this->supplierOrder = new \Doctrine\Common\Collections\ArrayCollection();
//        $this->medication = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add supplierOrder
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrder
     *
     * @return OrderMedication
     */
    public function addSupplierOrder(\AppBundle\Entity\SupplierOrder $supplierOrder)
    {
        $this->supplierOrder = $supplierOrder;

        return $this;
    }

    /**
     * Remove supplierOrder
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrder
     */
    public function removeSupplierOrder(\AppBundle\Entity\SupplierOrder $supplierOrder)
    {
        $this->supplierOrder->removeElement($supplierOrder);
    }

    /**
     * Get supplierOrder
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSupplierOrder()
    {
        return $this->supplierOrder;
    }

    /**
     * Add medication
     *
     * @param \AppBundle\Entity\Medication $medication
     *
     * @return OrderMedication
     */
    public function addMedication(\AppBundle\Entity\Medication $medication)
    {
        $this->medication = $medication;

        return $this;
    }

    /**
     * Remove medication
     *
     * @param \AppBundle\Entity\Medication $medication
     */
    public function removeMedication(\AppBundle\Entity\Medication $medication)
    {
        $this->medication->removeElement($medication);
    }

    /**
     * Get medication
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Get supplierOrders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSupplierOrders()
    {
        return $this->supplierOrder;
    }

    /**
     * Get medications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedications()
    {
        return $this->medication;
    }

    /**
     * Set supplierOrder
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrder
     *
     * @return OrderMedication
     */
    public function setSupplierOrders(\AppBundle\Entity\SupplierOrder $supplierOrder = null)
    {
        $this->supplierOrder = $supplierOrder;

        return $this;
    }

    /**
     * Set medications
     *
     * @param \AppBundle\Entity\Medication $medications
     *
     * @return OrderMedication
     */
    public function setMedications(\AppBundle\Entity\Medication $medications = null)
    {
        $this->medications = $medications;

        return $this;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return OrderMedication
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OrderMedication
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set supplierOrder
     *
     * @param \AppBundle\Entity\SupplierOrder $supplierOrder
     *
     * @return OrderMedication
     */
    public function setSupplierOrder(\AppBundle\Entity\SupplierOrder $supplierOrder = null)
    {
        $this->supplierOrder = $supplierOrder;

        return $this;
    }

    /**
     * Set medication
     *
     * @param \AppBundle\Entity\Medication $medication
     *
     * @return OrderMedication
     */
    public function setMedication(\AppBundle\Entity\Medication $medication = null)
    {
        $this->medication = $medication;

        return $this;
    }
}
