<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productprices
 *
 * @ORM\Table(name="productprices", indexes={@ORM\Index(name="ProductId", columns={"ProductId"})})
 * @ORM\Entity
 */
class Productprices
{
    /**
     * @var float
     *
     * @ORM\Column(name="ProductPrice", type="float", precision=10, scale=0, nullable=false)
     */
    private $productprice;

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
     * Set productprice
     *
     * @param float $productprice
     * @return Productprices
     */
    public function setProductprice($productprice)
    {
        $this->productprice = $productprice;

        return $this;
    }

    /**
     * Get productprice
     *
     * @return float 
     */
    public function getProductprice()
    {
        return $this->productprice;
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
     * @return Productprices
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
     * @return Productprices
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
     * @return Productprices
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
