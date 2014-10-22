<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productstypes
 *
 * @ORM\Table(name="productstypes", indexes={@ORM\Index(name="ProductId", columns={"ProductId"}), @ORM\Index(name="ProductTypeId", columns={"ProductTypeId"})})
 * @ORM\Entity
 */
class Productstypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Shopping\CartBundle\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Shopping\CartBundle\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductId", referencedColumnName="id")
     * })
     */
    private $productid;

    /**
     * @var \Shopping\CartBundle\Entity\Types
     *
     * @ORM\ManyToOne(targetEntity="Shopping\CartBundle\Entity\Types")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductTypeId", referencedColumnName="id")
     * })
     */
    private $producttypeid;



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
     * Set productid
     *
     * @param \Shopping\CartBundle\Entity\Products $productid
     * @return Productstypes
     */
    public function setProductid(\Shopping\CartBundle\Entity\Products $productid = null)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return \Shopping\CartBundle\Entity\Products 
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set producttypeid
     *
     * @param \Shopping\CartBundle\Entity\Types $producttypeid
     * @return Productstypes
     */
    public function setProducttypeid(\Shopping\CartBundle\Entity\Types $producttypeid = null)
    {
        $this->producttypeid = $producttypeid;

        return $this;
    }

    /**
     * Get producttypeid
     *
     * @return \Shopping\CartBundle\Entity\Types 
     */
    public function getProducttypeid()
    {
        return $this->producttypeid;
    }
    /**
     * @var \DateTime
     */
    private $datecreated;

    /**
     * @var \DateTime
     */
    private $dateupdated;


    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     * @return Productstypes
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    /**
     * Get datecreated
     *
     * @return \DateTime 
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set dateupdated
     *
     * @param \DateTime $dateupdated
     * @return Productstypes
     */
    public function setDateupdated($dateupdated)
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    /**
     * Get dateupdated
     *
     * @return \DateTime 
     */
    public function getDateupdated()
    {
        return $this->dateupdated;
    }
}
