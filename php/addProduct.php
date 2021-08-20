<?php

      $name = $_POST["name"];
      $p = $_POST["price"];
      $aisle = $_POST["Aisle"];
      $size = $_POST["Size"];
      $img = $_POST["image"];
      $desc = $_POST["description"];

      $xml=new DomDocument('1.0');
      $xml->load("products.xml");
      $root=$xml->$xml->getElementByTagName("products")->item(0);
      $product=$xml->createElement("product");
      $product->setAttribute("id", 18);
      switch($aisle){
        case "fruits":
          $fruits->appendChild($product);
          break;
        case "vegetables":
          $vegetables->appendChild($product);
          break;
        case "beverages":
          $beverages->appendChild($product);
          break;
        case "dairy":
          $dairy->appendChild($product);
          break;
        case "seafood":
          $seafood->appendChild($product);
          break;
        case "snacks":
          $snacks->appendChild($product);
          break;
      }
      $productName=$xml->createElement("productName", $name);
      $product->appendChild($productName);
      $price=$xml->createElement("price", $p);
      $product->appendChild($price);
      $aisles=$xml->createElement("aisles", $aisle);
      $product->appendChild($aisles);
      $image=$xml->createElement("image", $img);
      $product->appendChild($image);
      $description=$xml->createElement("description", $desc);
      $product->appendChild($description);

      $xml->save("products.xml");
      


?>
