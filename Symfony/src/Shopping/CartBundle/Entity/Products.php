<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Products
 *
 * @ORM\Table(name="products", indexes={@ORM\Index(name="ProductSubcategoryId", columns={"ProductSubcategoryId"})})
 * @ORM\Entity
 */

class Products
{
    /**
     * @var string
     *
     * @ORM\Column(name="ProductName", type="string", length=255, nullable=false)
     */
    private $productname;


    /**
     * @var string
     *
     * @ORM\Column(name="ProductDescription", type="text", nullable=false)
     */
    private $productdescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Shopping\CartBundle\Entity\Productsubcategories
     *
     * @ORM\ManyToOne(targetEntity="Shopping\CartBundle\Entity\Productsubcategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductSubcategoryId", referencedColumnName="id")
     * })
     */
    private $productsubcategoryid;

    /**
     * Set productname
     *
     * @param string $productname
     * @return Products
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string 
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * Set productdescription
     *
     * @param string $productdescription
     * @return Products
     */
    public function setProductdescription($productdescription)
    {
        $this->productdescription = $productdescription;

        return $this;
    }

    /**
     * Get productdescription
     *
     * @return string 
     */
    public function getProductdescription()
    {
        return $this->productdescription;
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
     * Set productsubcategoryid
     *
     * @param \Shopping\CartBundle\Entity\Productsubcategories $productsubcategoryid
     * @return Products
     */
    public function setProductsubcategoryid(\Shopping\CartBundle\Entity\Productsubcategories $productsubcategoryid = null)
    {
        $this->productsubcategoryid = $productsubcategoryid;

        return $this;
    }

    /**
     * Get productsubcategoryid
     *
     * @return \Shopping\CartBundle\Entity\Productsubcategories 
     */
    public function getProductsubcategoryid()
    {
        return $this->productsubcategoryid;
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
     * @return Products
     */
    public function setDatecreated()
    {
        $this->datecreated = date('Y-m-d H:i:s',time());

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
     * @return Products
     */
    public function setDateupdated()
    {
        $this->dateupdated = date('Y-m-d H:i:s',time());

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
