<!-- ============================== php 1 =================================== -->
<?php
session_start();
 ?>
<!-- ============================== php 1 end=================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS Store</title>
    <link rel="stylesheet" type="text/css" href="style/tomatoes.css" />
    <!-- <style>  #more {display: none;}</style> -->

    <header>
   
 <!-- ============================== php 2 =================================== -->     
 <?php
                
                if(isset($_SESSION['username'])){
                
                   $user2 =  $_SESSION['username'] ;
                echo "<h2 align='left'> <font color=#2184c2 font face='mambo' size='5pt'>
                 &nbsp;&nbsp;&nbsp;&nbsp; User  $user2 is logged in</font> </h2>"; }  
                                
                else if (isset($_SESSION['adminname'])){
                   $admin2= $_SESSION['adminname'] ;
                echo "<h2 align='left'> <font color= #2184c2 font face='mambo' size='5pt'>
                 &nbsp;&nbsp;&nbsp;&nbsp; Admin $admin2 is logged in</font> </h2>";}

                else{echo "<p align='left'>  <font color=#2184c2 font face='mambo' size='5pt'>
                      &nbsp;&nbsp;&nbsp;&nbsp; visitor</font> </p>";}
           
               ?> 
   <!-- ============================== php 2 end =================================== -->     
               </header>
<body>

<img src="img/tomatoes6.png" class=" top" alt="Tomatoes">

    <!-- <div id="content2">
        <div id="sami"> -->


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
        <a href="shoppingcart.html" class="a-menu">
            <li><img id="test" src="img/shopping_cart.png">Shopping cart</li></a>

<!-- ============================== php 3 =================================== -->
            <?php
            if(isset($_SESSION['username'])){
             
            echo "  <a href='logout.php'class='a-menu'>";
            echo "  <li> Log out<img id='test' src='img/login.png'> </li> </a>";
            }

            else if(isset($_SESSION['adminname'])){

                echo "  <a href='backstoreMain.html'class='a-menu'>";
                echo "  <li> Back Store<img id='test' src='img/admin.png'> </li> </a>";

                echo "  <a href='logout.php'class='a-menu'>";
                echo "  <li> Log out<img id='test' src='img/login.png'> </li> </a>";
            }
else{
echo"   <a href='#' class='a-menu'>";
echo"    <li> <div class='subnav'>  <button class='subnavbtn'> Login <img id='test' src='img/login.png'>
<i class='fa fa-caret-down'></i></button>";           
echo"    <div class='subnav-content'>  <a href='log.php'>User login.</a>";    
echo"      <a href='employees-log.php'>employees login.</a> </div></div></a>";


echo"   <a href='#' class='a-menu'>";
echo"   <li>  <div class='subnav'>  <button class='subnavbtn'> SignUp <img id='test' src='img/sign up.png'>
<i class='fa fa-caret-down'></i></button>";           
echo"    <div class='subnav-content'>  <a href='sign-up.php'>User Signup.</a>";    
echo"      <a href='empSignUp.php'>employees Signup.</a> </div></div></a>";
}
             ?>
            
<!-- ============================== php 3 end =================================== -->                       
  </ul></div></div>

            <!-- products begining -->
<!--  =================================================    1   =========================================================    -->
            <div class="container">

                

                <div class="catgegories">
                    <div class="iamge-title"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Cherry Grape </h2> <br>
                    <h5> price$0.39 /1</h5></div>

                    <div class="Quantity-title">
                   <br> <lable for=""> Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </lable>
                    <input type="number" min="0" max="99" name="" id="input" onkeyup="mult(this.value);">&nbsp;&nbsp;

                    <label for="">Total Price $</label>
                    <input type="text" id="totalPrice" name="" disabled></div>

                    <ul class="menu-ul">
                        <a href="shoppingcart.html" class="a-menu">
                            <li> <img id="test" src="img/shopping_cart_black.png"> </li>
                        </a>
                    </ul>

                   <br> <div class="popup" onclick="myFunction()"> <button class="More Description"> &nbsp;&nbsp;&nbsp;&nbsp;Detailed Description <img
                        id="test" src="img/more-info.png">
                    <span class="popuptext" id="myPopup">
                        Cherry and grape tomatoes are easy to grow and small, which is one of the reasons they are
                        recommended for those who have never before planted tomatoes. They usually get no more than
                        one inch in diameter
                        <br><br>
                        Product Number: 230120
                    </span>
                     </div>

                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                     <div class ="gallery">
                      <img src="img/tomatoes-cherry-grape.jpg" class="item-image"></div>

                    </div>
                   
<!--  ==================================================     2     ========================================================    -->     


<div class="catgegories">
    <div class="iamge-title"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Black Cherry </h2> <br>
    <h5> price$0.35 /1</h5></div>

    <div class="Quantity-title">
   <br> <lable for="">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </lable>
    <input type="number" name="" id="input2" onkeyup="mult2(this.value);">&nbsp;&nbsp;
      
    <label for="">Total Price $</label>
    <input type="number" id="totalPrice2" name="" disabled></div>

    <ul class="menu-ul">
        <a href="shoppingcart.html" class="a-menu">
            <li> <img id="test" src="img/shopping_cart_black.png"> </li>
        </a>
    </ul>

   <br> <div class="popup" onclick="myFunction2()"> <button class="More Description"> &nbsp;&nbsp;&nbsp;&nbsp; Detailed Description <img
        id="test" src="img/more-info.png">
    <span class="popuptext" id="myPopup3">
        The black cherry tomatoes are disease resistant and a type of heirloom tomato. It has
                            purplish-red fruit that grows in clusters of one inch, and it is known not for sweetness,
                            but for its true tomato taste.
                            <br><br>
                            Product Number: 575120
    </span>
     </div>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
     <div class ="gallery">
      <img src="img/tomatoes-black-cherry.jpg" class="item-image">

    </div></div>
 
<!--  ==================================================    3     ==================================================    -->
<div class="catgegories">
    <div class="iamge-title"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Black Zebra </h2> <br>
    <h5> price$0.40 /1</h5></div>

    <div class="Quantity-title">
   <br> <lable for="">Quantity: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </lable>
    <input type="number" name="" id="input3" onkeyup="mult3(this.value);">&nbsp;&nbsp;

    <label for="">Total Price $</label>
    <input type="text" id="totalPrice3" name="" disabled> </div>

    <ul class="menu-ul">
        <a href="shoppingcart.html" class="a-menu">
            <li> <img id="test" src="img/shopping_cart_black.png"> </li>
        </a>
    </ul>

   <br> <div class="popup" onclick="myFunction3()"> <button class="More Description">  &nbsp;&nbsp;&nbsp;&nbsp;Detailed Description <img
        id="test" src="img/more-info.png">
    <span class="popuptext" id="myPopup4">
         Black Zebras are indeterminate heirlooms that taste great and have purplish-black flesh and
                            green streaks. They are also resistant to many types of diseases.
                            <br><br>
                            Product Number: 755120
 
    </span>
     </div>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <div class ="gallery">
       <img src="img/tomatoes-black-zebra.jpg" class="item-image">

    </div></div> 
    
<!--  ====================================================================================================================    -->

        </div> </p>  </div>
    <footer class="footer">

        <div class="row">


            <div class="column" style="background-color:none;">
                <h3>Get to Know Us</h3>
                <p>
                    <a href="VegetablesPage2.html"> Supplier Relations</a><br><br>
                    <a href="VegetablesPage2.html"> Corporate Site</a><br><br>
                    <a href="aboutMission.html"> About Mission<br><br> </a>
                    <a href="ContactUs.html"> Contact Us</a><br><br>
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>What we offer?</h3>
                <p>
                    <a href="VegetablesPage2.html"> Gift Card<br><br>
                        <a href="VegetablesPage2.html"> Online grocery<br><br>
                            <a href="VegetablesPage2.html"> Our partners<br><br>
                                <a href="VegetablesPage2.html"> Our Private Brands
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>My concordia</h3>
                <p>
                    <a href="VegetablesPage2.html"> Products to Discover<br><br>
                        <a href="VegetablesPage2.html"> Online Grocery Services<br><br>
                            <a href="VegetablesPage2.html"> Flyer<br><br>
                                <a href="VegetablesPage2.html"> Coupons
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>Like us on social media</h3>
                <p>
                    <a href="VegetablesPage2.html"> <img id="test" src="img/facebook.png"> Facebook<br>
                        <a href="VegetablesPage2.html"> <img id="test" src="img/instagram.png"> Instagram<br>
                            <a href="VegetablesPage2.html"><img id="test" src="img/twitter.png"> twitter<br>
                                <a href="VegetablesPage2.html"> <img id="test" src="img/tiktok.png"> tiktok
                </p>
            </div>

        </div>
        <div id="end">
            &nbsp;&nbsp;&nbsp Newsletter<br>
            &nbsp;&nbsp;&nbsp Sign up to Concordia.ca to receive offers and much more! Learn more
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; All rights resrved <img id="test" src="img/copyrights.png"> <br><br>

            </p>
        </div>
    </footer>
    <!-- javascript -->
    <script src="js/tomatoes.js"></script>
</body>

</html>