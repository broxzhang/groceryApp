
<!-- this will delete a specific product from the xml file if the file exsists,
and it will echo a msg if the file doesnt exsist.-->

<?php


$errors = array();
if(isset($_POST['remove'])){
    $name = preg_replace('/[^A-Za-z0-9]/', '', $_POST['name']);

    $id =  $_POST['id'];
    // $price = $_POST['price'];

     if($name == ''){
        $errors[] = 'product Name is blank';}
        if($id == ''){
           $errors[] = 'product id is blank';}
     //    if($price == ''){
     //       $errors[] = 'price is blank';
     // }

     if(count($errors) == 0){
   if(file_exists('pro.xml')){

$xml1 = simplexml_load_file('pro.xml');

function delete($id,$filename='pro.xml'){

  $data = simplexml_load_file($filename);
  for ($i=0,$length = count($data->product);$i<$length; $i++){

    if($data->product[$i]->name==$id){
  unset($data->product[$i]);
  echo" product ". $_POST['name'] . " has been deleted sucsessfully!!";
    header('Refresh:3;url=test.php');//new
    break;
  }
else{
    echo" the product that you are trying to delete doesnt exsist in this folder!!";
    header('Refresh:3;url=test.php');//new
      break;
}


}//end of for loop.
file_put_contents($filename,$data->saveXML());

}// end of function delete.
delete($_POST['name']);



    die;//new
}// for this  if(file_exists('pro.xml').
else{
    echo" the file you are trying to delete from doesnt exsist!!";
}
}// for this    if(count($errors) == 0).
}// if(isset($_POST['remove']).
 ?>

<!-- =============    end of deletion from xml file    ============= -->



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
    <a href="backStoreOrderList.php">Order List</a>
    <div class="subnav">
      <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="#company">Company</a>
        <a href="#team">Team</a>
        <a href="#">Careers</a>
        <a href="#">HR</a>
      </div>
    </div>


    <a href="">Contact</a>
  </div>



  <!-- editing from here -->
  <h2>Order Manage</h2>



 
  <br><br>
  <a href="backStoreOrderProfile.php"><button class="btn Add" > Add Oder</button></a>
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
<td><?php echo $ftpxml->products; ?>
   
<td>
    <?php echo $ftpxml->totalprice; ?>

<?php
    echo '<td><a href="backStoreOrderProfile.php" ><button class="btn Edit" id="btn" input value="Check" type=submit > Edit </button></a>';
    echo '<td><button class="btn Delete" id="btn" name="remove" input value="Check" type=submit > Delete </button></td>';
?>

<?php
} ?>






<!-- javascript -->
<script src="js/backStoreOrderList.js"></script>

<script>
  function remove() {
  var myobj = document.getElementById("demo");
  
}

</script>

</body>


</html>