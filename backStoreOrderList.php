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
    <a href="backStoreProductList.php">Product List</a>
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



  <!-- editing from here -->
  <h2>Order Manage</h2>



 
  <br><br>
  <a href="backStoreOrderProfile.html"><button class="btn Add" > Add Oder</button></a>
  <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names, products, orders.."
    title="Type in a name"> -->

   
  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>


<!-- php -->
<?php
// Loading the XML file
$xml = simplexml_load_file("database/orderlist.xml");
echo "
<div style='overflow-x:auto;'>
<table border=1 cellpadding=5 id='order' style='border-collapse: collapse;' bordercolor='#DDDDDD'>
  <tr>
   
    <th>Order #</th>  
    <th>Customer ID# </th>
    <th>Items</th>
    <th>Total Prices (CND)</th>
    <th>Edit
    <th>Delete
    

</tr>";
foreach ($xml->oder as $ftpxml) {
?>
<tr>
<td><?php echo $ftpxml->id; ?>
<td><?php echo $ftpxml->customerID; ?>
<td>
    <?php
    foreach ($ftpxml->products->product as $ftpxml2) {
        echo $ftpxml2->productName . ", qty:";
        echo $ftpxml2->quantity . "; ";
    } ?>
<td>
    <?php echo $ftpxml->totalprice; ?>

<?php
    echo '<td><a href="backStoreOrderProfile.html" ><button class="btn Edit" id="btn" input value="Check" type=submit > Edit </button></a>';
    echo '<td><button class="btn Delete" id="btn" input value="Check" type=submit > Delete</button></td>';
?>

<?php
} ?>






<!-- javascript -->
<script src="js/backStoreOrderList.js"></script>



</body>


</html>
