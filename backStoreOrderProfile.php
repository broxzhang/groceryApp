<?php
$errors = array();


if (isset($_POST['add'])) {

  $id = $_POST['id'];
  $customerID = $_POST['customerID'];
  $productname = preg_replace('/[^A-Za-z0-9]/', '', $_POST['productname']);
  $quantity = $_POST['quantity'];
  $totalprice = $_POST['totalprice'];

  $xml = new SimpleXMLElement('<orderlist></orderlist>');
  $xml->addChild('id', $id);
  $xml->addChild('customerID', $customerID);
  $xml->addChild('productName', $productName);
  $xml->addChild('quantity', $quantity);
  $xml->addChild('totalprice',  $totalprice);
  $xml->asXML('productTest/orderlist.xml');
  $xml->asXML('database/orderlist.xml');
  // header('Location:backStoreOrderList.php');
  die;
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

      <label for="fname">Order#</label>
      <input type="text" id="order" name="id" placeholder="23e3dfadf">

      <label for="order">Customer ID#</label>
      <input type="text" id="customer" name="customerID" placeholder="joe234">

      <label for="order">Product Name</label>
      <input type="text" id="customer" name="productName" placeholder="apple">

      <label for="order">Quantity</label>
      <input type="number" id="customer" name="quantity" placeholder="1">

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