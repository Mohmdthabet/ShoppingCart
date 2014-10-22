<?php

namespace Shopping\CartBundle\Controller;


interface ProductPlan {
    //plan to build any product
    public function setProductname($productname);
    public function setProductdescription($productdescription);
    public function setProductsubcategoryid($productsubcategoryid);
    public function setProductamountquantity($productamountquantity);
    public function setProductprice($productprice);
    public function setProducttypeid($producttypeid);
} 