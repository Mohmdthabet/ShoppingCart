<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carts
 *
 * @ORM\Table(name="carts")
 * @ORM\Entity
 */
class Carts
{
    /**
     * @var string
     *
     * @ORM\Column(name="CartName", type="string", length=255, nullable=false)
     */
    private $cartname;

    /**
     * @var string
     *
     * @ORM\Column(name="CartDescription", type="text", nullable=false)
     */
    private $cartdescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cartname
     *
     * @param string $cartname
     * @return Carts
     */
    public function setCartname($cartname)
    {
        $this->cartname = $cartname;

        return $this;
    }

    /**
     * Get cartname
     *
     * @return string 
     */
    public function getCartname()
    {
        return $this->cartname;
    }

    /**
     * Set cartdescription
     *
     * @param string $cartdescription
     * @return Carts
     */
    public function setCartdescription($cartdescription)
    {
        $this->cartdescription = $cartdescription;

        return $this;
    }

    /**
     * Get cartdescription
     *
     * @return string 
     */
    public function getCartdescription()
    {
        return $this->cartdescription;
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
     * @return Carts
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
     * @return Carts
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
