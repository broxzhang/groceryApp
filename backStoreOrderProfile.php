<?php

// if (isset($_POST['add'])) {

//   $id = $_POST['id'];
//   $customerID = $_POST['customerID'];
//   $productname = preg_replace('/[^A-Za-z0-9]/', '', $_POST['productname']);
//   $quantity = $_POST['quantity'];
//   $totalprice = $_POST['totalprice'];

//   $xml = new SimpleXMLElement('<orderlist></orderlist>');
//   $xml->addChild('id', $id);
//   $xml->addChild('customerID', $customerID);
//   $xml->addChild('productName', $productName);
//   $xml->addChild('quantity', $quantity);
//   $xml->addChild('totalprice',  $totalprice);
//   $xml->asXML('productTest/orderlist.xml');
//   $xml->asXML('database/orderlist.xml');
//   // header('Location:backStoreOrderList.php');
//   die;
// }
function debug_to_console($data)
{
  $output = $data;
  if (is_array($output))
    $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$errors = array();
if (isset($_POST['add'])) {
  $id =  $_POST['id'];
  $customer =  $_POST['customer'];
  $products =  $_POST['products'];
  $totalprice = $_POST['totalprice'];

  if ($id == '') {
    $errors[] = 'Order# is blank';
  }
  if ($customer == '') {
    $errors[] = 'Customer ID# is blank';
  }
  if ($products == '') {
    $errors[] = 'Products is blank';
  }

  if ($totalprice == '') {
    $errors[] = 'Total Price is blank';
  }

  if (count($errors) == 0) {
    if (file_exists('database/orderlist.xml')) { //new

      //open an already exsisted xml file
      $xml = new DOMDocument();
      $xml->load('database/orderlist.xml');
      //getting the root.
      $orderlist = $xml->getElementsByTagName('orderlist')->item(0);
      
      $order = $xml->createElement('order');
      $orderlist->appendChild($order);

      $id = $xml->createElement('id');
      $order->appendChild($id);
      $id_txt = $xml->createTextNode($_POST['id']);
      $id->appendChild($id_txt);

      $customer = $xml->createElement('customer');
      $order->appendChild($customer);
      $customer_txt = $xml->createTextNode($_POST['customer']);
      $customer->appendChild($customer_txt);


      $products = $xml->createElement('products');
      $order->appendChild($products);
      $products_txt = $xml->createTextNode($_POST['products']);
      $products->appendChild($products_txt);

      $totalprice = $xml->createElement('totalprice');
      $order->appendChild($totalprice);
      $totalprice_txt = $xml->createTextNode($_POST['totalprice']);
      $totalprice->appendChild($totalprice_txt);

      $Atr = $xml->createAttribute('id');
      $order->appendChild($Atr);
      $Atr_txt = $xml->createTextNode($_POST['id']);
      $Atr->appendChild($Atr_txt);

      

      // adding this new product to the xml file now.
      $xml->formatOutput = true;
      $xml->save('database/orderlist.xml');

      echo " Order " . $_POST['id'] . " has been added sucsessfully!!";
      header('Refresh:2;url=backStoreOrderList.php');
      die;
    } // for if.
    else { //new
      $xml = new DOMDocument('1.0');
      // create a root tag.
      $orderlist = $xml->createElement('orderlist');

      $xml->appendChild($orderlist);
      $xml->formatOutput = true;
      $xml->save('database/orderlist.xml');

      //open an already exsisted xml file
      $xml = new DOMDocument();
      $xml->load('database/orderlist.xml');

      $orderlist = $xml->getElementsByTagName('orderlist')->item(0);
      
      $order = $xml->createElement('order');
      $orderlist->appendChild($order);

      $id = $xml->createElement('id');
      $order->appendChild($id);
      $id_txt = $xml->createTextNode($_POST['id']);
      $id->appendChild($id_txt);

      $customer = $xml->createElement('customer');
      $order->appendChild($customer);
      $customer_txt = $xml->createTextNode($_POST['customer']);
      $customer->appendChild($customer_txt);


      $products = $xml->createElement('products');
      $order->appendChild($products);
      $products_txt = $xml->createTextNode($_POST['products']);
      $products->appendChild($products_txt);

      $totalprice = $xml->createElement('totalprice');
      $order->appendChild($totalprice);
      $totalprice_txt = $xml->createTextNode($_POST['totalprice']);
      $totalprice->appendChild($totalprice_txt);

      $Atr = $xml->createAttribute('id');
      $order->appendChild($Atr);
      $Atr_txt = $xml->createTextNode($_POST['id']);
      $Atr->appendChild($Atr_txt);


      // adding this new product to the xml file now.
      $xml->formatOutput = true;
      $xml->save('database/orderlist.xml');


      echo " New order file has been added"; //new
      // echo " product " . $_POST['product'] . " has been added sucsessfully!!";
      header('Refresh:4;url=backStoreOrderList.php'); //new
      die; //new
    } //new for else.
  } //new if(count($errors)
} //if(isset($_POST['add']))
?>

<!-- =============    end of addind to xml file    ============= -->





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>Concordia Store</title>
  <link rel="stylesheet" type="text/css" href="style/backStore.css">

</head>

<body>

  <h1>Back Store Mangement</h1>




  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="product-list.html">Product List</a>
    <a href="backStoreUserList.html">User List</a>
    <a href="backStoreOrderList.html">Order List</a>
    <div class="subnav">
      <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="#company">Company</a>
        <a href="#team">Team</a>
        <a href="#">Careers</a>
        <a href="#">HR</a>
      </div>
    </div>

    <a href="#contact">Contact</a>
  </div>


  <h2>Order Profile</h2>

  <div class="container">

    <form action="" method="post">

      <?php
      // if(count($errors) > 0){
      echo '<ul>';
      foreach ($errors as $e) {
        echo '<li>' . $e . '</li>';
      }
      echo '</ul>';
      // }
      ?>

      <label for="order">Order#</label>
      <input type="text" id="order" name="id" placeholder="23e3dfadf">

      <label for="customer">Customer ID#</label>
      <input type="text" id="customer" name="customer" placeholder="joe234">

      <label for="products">Products</label>
      <input type="text" id="customer" name="products" placeholder="Please follow the format: Plums (qty): 10; Fresh Canadian Atlantic Salmon Fillet (qty): 2;">


      <label for="order">Total Price $</label>
      <input type="number" id="customer" name="totalprice" placeholder="1.00"><br> <br>

      <input type="submit" name="add" value="Save">
      <!-- <button type="submit" name="add" value="add product" />add</button> -->

  </div>

  </form>
  </div>






</body>




<footer>
  all rights reserved.
</footer>

</html>