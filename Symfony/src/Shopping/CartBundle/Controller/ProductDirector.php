<?php

namespace Shopping\CartBundle\Controller;



class ProductDirector {
    private $productBuilder;

    public function __construct($productBuilder){
        $this->productBuilder = new OldProductBuilder();
    }

    public function getproduct(){
        return $this->productBuilder->getproduct();
    }
    public function makeproduct(){
        $this->productBuilder->buildProductName();
        $this->productBuilder->buildProductDescription();
        $this->productBuilder->buildProductcategoryid();
        $this->productBuilder->buildProductamountquantity();
        $this->productBuilder->buildProductprice();
        $this->productBuilder->buildProductsubcategoryid();
        $this->productBuilder->buildProductsubcategoryname();
        $this->productBuilder->buildProducttypeid();
    }
} 