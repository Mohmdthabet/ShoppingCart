<?php

namespace Shopping\CartBundle\Controller;


class Product implements ProductPlan{

    private $productid;
    private $productname;
    private $productdescription;
    private $productsubcategoryid;
    private $productsubcategoryname;
    private $productcategoryid;
    private $productamountquantity;
    private $productprice;
    private $producttypeid;


    public function setProductname($name)
    {
        $productname = $name;
    }

    public function setProductdescription($description)
    {
       $productdescription = $description;

    }

    public function setProductsubcategoryid($subcategoryid)
    {
        $productsubcategoryid = $subcategoryid;

    }

    public function setProductsubcategoryname($subcategoryname)
    {
        $productsubcategoryname = $subcategoryname;

    }

    public function setProductcategoryid($categoryid)
    {
        $productcategoryid = $categoryid;;

    }

    public function setProductamountquantity($amountquantity)
    {
        $productamountquantity = $amountquantity;

    }

    public function setProductprice($price)
    {
        $productprice = $price;
    }

    public function setProducttypeid($typeid)
    {
        $producttypeid = $typeid;
    }


    public function getProductId()
    {
        return $this->productid;
    }

    public function getProductname()
    {
        return $this->productname;
    }

    public function getProductdescription()
    {
        return $this->productdescription;
    }

    public function getProductsubcategoryid()
    {
        return $this->productsubcategoryid;
    }

    public function getProductsubcategoryname()
    {
        return $this->productsubcategoryname;
    }

    public function getProductcategoryid()
    {
        return $this->productcategoryid;
    }

    public function getProductamountquantity()
    {
        return $this->productamountquantity;
    }

    public function getProductprice()
    {
        return $this->productprice;
    }

    public function getProducttypeid()
    {
        return $this->producttypeid;
    }
}