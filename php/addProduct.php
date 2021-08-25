<?php

function appendEl($el, $parent){
  global $xml;
  $node=$xml->createElement($el);
  $parent->appendChild($node);
  return $node;
}
function appendVal($value, $parent)
{
  global $xml;
  $value=$xml->createTextNode($value);
  $parent->appendChild($value);
  return $value;
}

      $name = $_POST["name"];
      $p = $_POST["price"];
      $aisle = $_POST["Aisle"];
      $size = $_POST["Size"];
      $img = $_POST["image"];
      $desc = $_POST["description"];
      $categ =$_POST["category"];
      $ave = $_POST["average"];
      $typ = $_POST["type"];

      $xml=new DomDocument('1.0');
      $xml->load("products.xml");
      $root=$xml->getElementByTagName("products")->item(0);
      $product=appendEl("product", $root);


      $product->setAttribute("id", 18);
      
      $productName=appendEl("productName", $product);
      appendVal("$name", $productName);
      $price=appendEl("price", $product);
      appendVal("$p", $price);
      $aisles=appendEl("aisles", $product);
      appendVal("$aisles", $aisle);
      $image=appendEl("photo", $product);
      appendVal("$img", $image);
      $description=appendEl("description", $product);
      appendVal("$desc", $description);
      $category=appendEl("category", $product);
      appendVal("$categ", $category);
      $type=appendEl("type", $product);
      appendVal("$typ", $type);
      $average=appendEl("avg", $product);
      appendVal("$ave", $average);

     
      $xml->formatOutput=true;
      $xml->save("products.xml");
