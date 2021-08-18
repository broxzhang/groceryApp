<?php
$errors = array();
if(isset($_POST['add'])){
    $productname = preg_replace('/[^A-Za-z0-9]/', '', $_POST['productname']);

    $price = $_POST['price'];
    $category = $_POST['category'];

    $type = $_POST['type'];
    $color = $_POST['color'];

        $xml = new SimpleXMLElement('<products></products>');
        $xml->addChild('productname',$productname);
        $xml->addChild('price',$price);
        $xml->addChild('category', $category);
        $xml->addChild('type',  $type);
        $xml->addChild('color',$color);
        $xml->asXML('database/orderlist.xml');
        header('Location:backStoreOrderList.php');
        die;
  // }
}
?>



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
    <form action="action_page.php">

      <label for="fname">Order#</label>
      <input type="text" id="order" order="firstname" placeholder="23e3dfadf">
      <!-- <label for="item">Item</label>
      <select id="item" name="Item">
        <option value="vegetable">Vegetables</option>
        <option value="fruits">Fruits</option>
        <option value="beverages">Beverages</option>
        <option value="dairy">Dairy & Eggs</option>
        <option value="eggs">Eggs</option>
        <option value="eggs">Snacks</option>
      </select>
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" min="0" max="99" value="1">
      <br><br> -->

      <!-- <label for="Vendor">Vendor</label>
      <input type="text" id="lname" name="Vendor" placeholder="Condordia"> -->


      <label for="order">Customer ID#</label>
      <input type="text" id="customer" name="customer" placeholder="joe234">

      <label for="order">Total Price $</label>
      <input type="number" id="customer" name="customer" placeholder="1.00"><br> <br> 

      <label for="subject">Description</label>
      <textarea id="subject" name="subject" placeholder="Please follow the follow the formate:&#10;1. Apples (Tyepe: Gala; Quantity: 5); &#10;2. Milk (Typel: skim; Quantity:2)&#10;...." style="height:200px"></textarea>

      <!-- <input type="submit" value="Save">
      <input type="reset" value="Reset"> -->

      
      <!-- <input type="submit" name="submit" value="Save">
      <input type="reset" name="reset" value="reset"> -->
      
      <input type="submit" name="submit" value="Save">
      

  </div>

  </form>
  </div>






</body>




<footer>
  all rights reserved.
</footer>

</html>