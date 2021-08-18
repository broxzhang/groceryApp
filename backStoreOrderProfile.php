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
      <input type="text" id="order" order="firstname" placeholder="23e3dfadf" name="id">



      <label for="order">Customer ID#</label>
      <input type="text" id="customer" name="customerID" placeholder="joe234">

      <label for="order">Product Name</label>
      <input type="text" id="customer" name="productName" placeholder="apple">

      <label for="order">Quantity</label>
      <input type="number" id="customer" name="quantity" placeholder="1">

      <label for="order">Total Price $</label>
      <input type="number" id="customer" name="totalprice" placeholder="1.00"><br> <br>

      <input type="submit" name="add" value="Save">


  </div>

  </form>
  </div>

  <?php
  $errors = array();
  if (isset($_POST['add'])) {

    $xml = simplexml_load_file("database/orderlist.xml");


    foreach ($xml->oder as $ftpxml) {
      $id == $ftpxml->id;
    }




    $productname = preg_replace('/[^A-Za-z0-9]/', '', $_POST['productname']);

    $price = $_POST['price'];
    $category = $_POST['category'];

    $type = $_POST['type'];
    $color = $_POST['color'];

    $xml = new SimpleXMLElement('<orders></oders>');
    $xml->addChild('id', $id);
    $xml->addChild('customerID', $customerID);
    $xml->addChild('productName', $productName);
    $xml->addChild('quantity', $quantity);
    $xml->addChild('totalprice',  $totalprice);
    $xml->asXML('database/orderlist.xml');
    header('Location:index.php');

    die;
    // }
  }
  ?>




</body>




<footer>
  all rights reserved.
</footer>

</html>