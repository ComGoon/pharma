<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Supplier
 *
 * @ORM\Table(name="supplier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierRepository")
 */
class Supplier
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
     * @var string
     *
     * @ORM\Column(name="name_society", type="string", length=100, unique=true)
     * @Assert\NotBlank(message="Entrez le nom de votre societé .")
     * @Assert\Length(
     *     min=3,
     *     max=150,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long."
     * )
     */
    private $nameSociety;

    /**
     * @var int
     *
     * @ORM\Column(name="bank_account_numbers", type="integer", unique=true)
     * @Assert\Type(
     *     type="numeric",
     *     message="Poids doit etre de type numeric"
     * )
     */
    private $bankAccountNumbers;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User",cascade={"persist","remove"})
     * @Assert\Valid
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\SupplierStock",mappedBy="suppliers")
     */
    private $medications;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\SupplierOrder",mappedBy="supplier")
     *
     */
    private $Order;

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
     * Set nameSociety
     *
     * @param string $nameSociety
     *
     * @return Supplier
     */
    public function setNameSociety($nameSociety)
    {
        $this->nameSociety = $nameSociety;

        return $this;
    }

    /**
     * Get nameSociety
     *
     * @return string
     */
    public function getNameSociety()
    {
        return $this->nameSociety;
    }

    /**
     * Set bankAccountNumbers
     *
     * @param integer $bankAccountNumbers
     *
     * @return Supplier
     */
    public function setBankAccountNumbers($bankAccountNumbers)
    {
        $this->bankAccountNumbers = $bankAccountNumbers;

        return $this;
    }

    /**
     * Get bankAccountNumbers
     *
     * @return int
     */
    public function getBankAccountNumbers()
    {
        return $this->bankAccountNumbers;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Supplier
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set medications
     *
     * @param \AppBundle\Entity\SupplierStock $medications
     *
     * @return Supplier
     */
    public function setMedications(\AppBundle\Entity\SupplierStock $medications = null)
    {
        $this->medications = $medications;

        return $this;
    }

    /**
     * Get medications
     *
     * @return \AppBundle\Entity\SupplierStock
     */
    public function getMedications()
    {
        return $this->medications;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Order = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add medication
     *
     * @param \AppBundle\Entity\SupplierStock $medication
     *
     * @return Supplier
     */
    public function addMedication(\AppBundle\Entity\SupplierStock $medication)
    {
        $this->medications[] = $medication;

        return $this;
    }

    /**
     * Remove medication
     *
     * @param \AppBundle\Entity\SupplierStock $medication
     */
    public function removeMedication(\AppBundle\Entity\SupplierStock $medication)
    {
        $this->medications->removeElement($medication);
    }

    /**
     * Add order
     *
     * @param \AppBundle\Entity\SupplierOrder $order
     *
     * @return Supplier
     */
    public function addOrder(\AppBundle\Entity\SupplierOrder $order)
    {
        $this->Order[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param \AppBundle\Entity\SupplierOrder $order
     */
    public function removeOrder(\AppBundle\Entity\SupplierOrder $order)
    {
        $this->Order->removeElement($order);
    }

    /**
     * Get order
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrder()
    {
        return $this->Order;
    }
}
