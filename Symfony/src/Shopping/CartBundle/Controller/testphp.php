<?php
namespace Shopping\CartBundle\Controller;


$oldstyleproduct = new OldProductBuilder();
$productenginer = new ProductDirector($oldstyleproduct);
$productenginer->makeproduct();

$firstproduct = $productenginer->getproduct();

echo "product built";
echo "<br />product name".              $firstproduct->getProductname();
echo "<br /> product decription".       $firstproduct->getProductdescription();
echo "<br /> product subcatetgory id".  $firstproduct->getProductsubcategoryid();
echo "<br /> product subcategory name". $firstproduct->getProductsubcategoryname();
echo "<br /> product caegory id".       $firstproduct->getProductcategoryid();
echo "<br /> product quantity".         $firstproduct->getProductamountquantity();
echo "<br /> product price".            $firstproduct->getProductprice();
echo "<br /> product type id".          $firstproduct->getProducttypeid();

