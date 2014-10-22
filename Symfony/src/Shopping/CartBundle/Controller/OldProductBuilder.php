<?php

namespace Shopping\CartBundle\Controller;
//use Shopping\CartBundle\Entity\Products as Products;


class OldProductBuilder implements ProductBuilder {
    private  $product;
    private $productprices;

    public function __construct()
    {
        $this->product = new Product();

    }

    public function buildProductName()
    {
        $this->product->setProductname("fankoosh");
    }

    public function buildProductdescription()
    {
       $this->product->setProductdescription("waaaw description");
    }

    public function buildProductsubcategoryid()
    {
        $this->product->setProductsubcategoryid(1);
    }

    public function buildProductsubcategoryname()
    {
        $this->product->setProductsubcategoryname("fazeeeh");
    }

    public function buildProductcategoryid()
    {
        $this->product->setProductcategoryid(2);
    }

    public function buildProductamountquantity()
    {
        $this->product->setProductamountquantity(10);
    }

    public function buildProductprice()
    {
        $this->product->setProductprice(3000);
    }

    public function buildProducttypeid()
    {
        $this->product->setProducttypeid(10);
    }

    public function getproduct(){
        return $this->product;
    }
}