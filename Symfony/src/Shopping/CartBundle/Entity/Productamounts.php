<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productamounts
 *
 * @ORM\Table(name="productamounts", indexes={@ORM\Index(name="ProductId", columns={"ProductId"})})
 * @ORM\Entity
 */
class Productamounts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProductAmountQuantity", type="integer", nullable=false)
     */
    private $productamountquantity;

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
     * Set productamountquantity
     *
     * @param integer $productamountquantity
     * @return Productamounts
     */
    public function setProductamountquantity($productamountquantity)
    {
        $this->productamountquantity = $productamountquantity;

        return $this;
    }

    /**
     * Get productamountquantity
     *
     * @return integer 
     */
    public function getProductamountquantity()
    {
        return $this->productamountquantity;
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
     * Set productid
     *
     * @param \Shopping\CartBundle\Entity\Products $productid
     * @return Productamounts
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
     * @return Productamounts
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
     * @return Productamounts
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
