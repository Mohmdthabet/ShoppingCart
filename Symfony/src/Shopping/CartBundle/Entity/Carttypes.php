<?php

namespace Shopping\CartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carttypes
 *
 * @ORM\Table(name="carttypes")
 * @ORM\Entity
 */
class Carttypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="cartTypeName", type="string", length=255, nullable=false)
     */
    private $carttypename;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set carttypename
     *
     * @param string $carttypename
     * @return Carttypes
     */
    public function setCarttypename($carttypename)
    {
        $this->carttypename = $carttypename;

        return $this;
    }

    /**
     * Get carttypename
     *
     * @return string 
     */
    public function getCarttypename()
    {
        return $this->carttypename;
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
     * @return Carttypes
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
     * @return Carttypes
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
