<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productcategories
 *
 * @ORM\Table(name="productcategories")
 * @ORM\Entity
 */
class Productcategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="ProductCategoryName", type="string", length=255, nullable=false)
     */
    private $productcategoryname;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set productcategoryname
     *
     * @param string $productcategoryname
     * @return Productcategories
     */
    public function setProductcategoryname($productcategoryname)
    {
        $this->productcategoryname = $productcategoryname;

        return $this;
    }

    /**
     * Get productcategoryname
     *
     * @return string 
     */
    public function getProductcategoryname()
    {
        return $this->productcategoryname;
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
     * @return Productcategories
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
     * @return Productcategories
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
