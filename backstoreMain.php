<?php
session_start();
 //set the session on the login page
 
 //on the second page you check if that session is true, else redirect to the login page  
  if($_SESSION['loggedIn']){
    $_SESSION['loggedIn'] = true;  

  }
      //allow
  else{
      //redirect to the login page
      header('Location: /login.html'); 
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
    <a href="index.php">Home</a>

    <a href="backstoreProducts/backStoreProductsList.php">Product List</a>
    <a href="backStoreUserList/backStoreUserList.php">User List</a>
    <a href="backstoreOrder/backStoreOrderList.php">Order List</a>
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
    <?php
    if (isset($_SESSION['adminname'])) {
       $admin2 = $_SESSION['adminname'];
      echo "<h2 align='left'> <font color= #red font face='mambo' size='5pt'>
    &nbsp;&nbsp;&nbsp;&nbsp; $admin2 is logged in</font> </h2>";
    }
    ?>
  </div>
  <!-- editing from here -->
</body>
<footer>
  all rights reserved.
</footer>

</html>