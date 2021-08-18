<!-- =========================================================== -->
<?php

$error = false;

if(isset($_POST['emplogin'])){
    $adminname = preg_replace('/[^A-Za-z0-9]/', '', $_POST['adminname']);
    $password = $_POST['password'];
    if(file_exists('admins/' .  $adminname . '.xml')){
        $xml = new SimpleXMLElement('admins/' .  $adminname . '.xml', 0, true);
        if($password == $xml->password){
            session_start();
            session_unset();
            session_destroy();
            session_start();
          
            $_SESSION['adminname'] =  $adminname;
            
            header('Location: backstoreMain.html');
            die;
        }
    }
    $error = true;
}

?>

<!-- ============================================================ -->


<!DOCTYPE html>
<html lang="en">
<!-- new -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>CS Store</title>
    <link rel="stylesheet" type="text/css" href="style/logStyle.css" />

</head>


<body>
    <div id="content2">
        <!-- <div id="sami"> -->


          <div class="parallax">

            <div class="menu" id="sticky">
                <ul class="menu-ul">
                    <a href="index.php" class="a-menu">

                        <li> <img id="test" src="img/home.png"> Home </li>

                    </a>
                    <a href="#" class="a-menu">

                        <li>
                            <div class="subnav">
                                <button class="subnavbtn"> Aisles <img id="test" src="img/arrow_down.png"><i
                                        class="fa fa-caret-down"></i></button>

                                        <div class="subnav-content">
                                            <a href="FruitsPage2.html">Fruit</a>
                                            <a href="VegetablesPage2.php">Vegetables</a>
                                            <a href="BeveragesPage2.html">Beverages</a>
                                            <a href="Dairy&EggsP2.html">Dairy & Eggs</a>
                                            <a href="seafood.html"> Seafood</a>
                                            <a href="SnacksPage2.html"> Snacks </a>
                                        </div>
                            </div>
                    </a>

                    <a href="#" class="a-menu">

                        <li>
                            <div class="subnav">
                                <button class="subnavbtn"> Login <img id="test" src="img/login.png"><i
                                        class="fa fa-caret-down"></i></button>
                                <div class="subnav-content">
                                    <a href="log.php">User login</a>
                                    <a href="employees-log.php">employees login</a>

                                </div>
                            </div>
                    </a>
                    <a href="shoppingcart.html" class="a-menu">
                        <li><img id="test" src="img/shopping_cart.png">Shopping cart</li>

                    </a>
                    <a href="empSignUp.php" class="a-menu">
                        <li> <img id="test" src="img/sign up.png"> Sign Up</li>

                    </a>
                </ul>

            </div>
        </div>
    <!-- </div> --></div>
        <div class="center">


            <h1>Admin Login</h1>
            <form method="post" action="">
              <div class="txt_field">
               
                <input type="text" required name="adminname" size="20" />
                <label>Username</label>
              </div>
              <div class="txt_field">
                <input type="password" required name="password" size="20" />
               
                <label>Password</label>
              </div>
              <?php
              if($error){
                  echo '<p>Invalid username and/or password</p>';
                //   header('Refresh: 2; URL = employees-log.php');
              }

              ?>
             
             <p><input type="submit"  value="Login" name="emplogin" /></p>
       
                     <div class="pass"><a href="empSignUp.php">Sign up</a></div>
            </form>
          </div>






<!-- =================footer=========================== -->
<footer class="footer">


        <div class="row">


         <div class="column" style="background-color:none;">
             <h3>Get to Know Us</h3>
             <p>
            <a href="VegetablesPage2.html"> Supplier Relations</a><br><br>
            <a href="VegetablesPage2.html"> Corporate Site</a><br><br>
            <a href="aboutMission.html">   About Mission<br> <br></a>
            <a href="ContactUs.html"> Contact Us</a><br><br>
         </p></div>
           <div class="column" style="background-color:none;">
             <h3>What we offer?</h3>
             <p>
                 <a href="VegetablesPage2.html"> Gift Card<br><br>
                     <a href="VegetablesPage2.html">  Online grocery<br><br>
                         <a href="VegetablesPage2.html"> Our partners<br><br>
                             <a href="VegetablesPage2.html"> Our Private Brands
                             </p></div>
                             <div class="column" style="background-color:none;">
                                 <h3>My concordia</h3>
                                 <p>
                                   <a href="VegetablesPage2.html">  Products to Discover<br><br>
                                       <a href="VegetablesPage2.html"> Online Grocery Services<br><br>
                                           <a href="VegetablesPage2.html">  Flyer<br><br>
                                               <a href="VegetablesPage2.html">  Coupons
                                               </p> </div>
                             <div class="column" style="background-color:none;">
                               <h3>Like us on social media</h3>
                               <p>
                                   <a href="VegetablesPage2.html">   <img id="test" src="img/facebook.png">  Facebook<br>
                                       <a href="VegetablesPage2.html">   <img id="test" src="img/instagram.png"> Instagram<br>
                                           <a href="VegetablesPage2.html"><img id="test" src="img/twitter.png">   twitter<br>
                                               <a href="VegetablesPage2.html">  <img id="test" src="img/tiktok.png">  tiktok
                               </p>  </div>

       </div>
       <div id="end">
        &nbsp;&nbsp;&nbsp Newsletter<br>
        &nbsp;&nbsp;&nbsp  Sign up to Concordia.ca to receive offers and much more! Learn more
      &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;  All rights resrved    <img id="test" src="img/copyrights.png"> <br><br>

      </p></div>





</body>

</html>