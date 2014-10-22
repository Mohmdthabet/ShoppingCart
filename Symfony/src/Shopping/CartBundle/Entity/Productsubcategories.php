<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Productsubcategories
 *
 * @ORM\Table(name="productsubcategories", indexes={@ORM\Index(name="ProductCategoryId", columns={"ProductCategoryId"})})
 * @ORM\Entity
 */
class Productsubcategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="ProductSubcategoryName", type="string", length=255, nullable=false)
     */
    private $productsubcategoryname;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Shopping\CartBundle\Entity\Productcategories
     *
     * @ORM\ManyToOne(targetEntity="Shopping\CartBundle\Entity\Productcategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductCategoryId", referencedColumnName="id")
     * })
     */
    private $productcategoryid;



    /**
     * Set productsubcategoryname
     *
     * @param string $productsubcategoryname
     * @return Productsubcategories
     */
    public function setProductsubcategoryname($productsubcategoryname)
    {
        $this->productsubcategoryname = $productsubcategoryname;

        return $this;
    }

    /**
     * Get productsubcategoryname
     *
     * @return string 
     */
    public function getProductsubcategoryname()
    {
        return $this->productsubcategoryname;
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
     * Set productcategoryid
     *
     * @param \Shopping\CartBundle\Entity\Productcategories $productcategoryid
     * @return Productsubcategories
     */
    public function setProductcategoryid(\Shopping\CartBundle\Entity\Productcategories $productcategoryid = null)
    {
        $this->productcategoryid = $productcategoryid;

        return $this;
    }

    /**
     * Get productcategoryid
     *
     * @return \Shopping\CartBundle\Entity\Productcategories 
     */
    public function getProductcategoryid()
    {
        return $this->productcategoryid;
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
     * @return Productsubcategories
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
     * @return Productsubcategories
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
