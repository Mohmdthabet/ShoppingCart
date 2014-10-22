<?php

namespace Shopping\CartBundle\Controller;


interface ProductBuilder {
    public function buildProductName();
    public function buildProductdescription();
    public function buildProductsubcategoryid();
    public function buildProductsubcategoryname();
    public function buildProductcategoryid();
    public function buildProductamountquantity();
    public function buildProductprice();
    public function buildProducttypeid();
    public function getproduct();
}