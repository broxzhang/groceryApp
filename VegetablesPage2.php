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
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>CS Store</title>
    <link rel="stylesheet" type="text/css" href="style/homeStyle.css" />

</head>
<header>

    <!-- ============================== php 2 end  =================================== -->
    <?php
    if (isset($_SESSION['username'])) {

        $user2 =  $_SESSION['username'];
        echo "<h2 align='left'> <font color=#2184c2 font face='mambo' size='5pt'>
                 &nbsp;&nbsp;&nbsp;&nbsp; User  $user2 is logged in</font> </h2>";
    } else if (isset($_SESSION['adminname'])) {
        $admin2 = $_SESSION['adminname'];
        echo "<h2 align='left'> <font color= #2184c2 font face='mambo' size='5pt'>
                 &nbsp;&nbsp;&nbsp;&nbsp; Admin $admin2 is logged in</font> </h2>";
    } else {
        echo "<p align='left'>  <font color=#2184c2 font face='mambo' size='5pt'>
                      &nbsp;&nbsp;&nbsp;&nbsp; visitor</font> </p>";
    }

    ?>
    <!-- ============================== php 2 end =================================== -->
</header>

<body>
    <img src="img/veg4.png" class="top" alt="Italian Trulli">

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
                    <li><img id="test" src="img/shopping_cart.png">Shopping cart</li>
                </a>


                <!-- ============================== php 3 =================================== -->
                <?php
                if (isset($_SESSION['username'])) {

                    echo "  <a href='logout.php'class='a-menu'>";
                    echo "  <li> Log out<img id='test' src='img/login.png'> </li> </a>";
                } else if (isset($_SESSION['adminname'])) {

                    echo "  <a href='backstoreMain.html'class='a-menu'>";
                    echo "  <li> Back Store<img id='test' src='img/admin.png'> </li> </a>";

                    echo "  <a href='logout.php'class='a-menu'>";
                    echo "  <li> Log out<img id='test' src='img/login.png'> </li> </a>";
                } else {
                    echo "   <a href='#' class='a-menu'>";
                    echo "    <li> <div class='subnav'>  <button class='subnavbtn'> Login <img id='test' src='img/login.png'>
<i class='fa fa-caret-down'></i></button>";
                    echo "    <div class='subnav-content'>  <a href='log.php'>User login.</a>";
                    echo "      <a href='employees-log.php'>employees login.</a> </div></div></a>";


                    echo "   <a href='#' class='a-menu'>";
                    echo "   <li>  <div class='subnav'>  <button class='subnavbtn'> SignUp <img id='test' src='img/sign up.png'>
<i class='fa fa-caret-down'></i></button>";
                    echo "    <div class='subnav-content'>  <a href='sign-up.php'>User Signup.</a>";
                    echo "      <a href='empSignUp.php'>employees Signup.</a> </div></div></a>";
                }
                ?>

                <!-- ============================== php 3 end =================================== -->
            </ul>
        </div>
    </div>

    <!-- begining  of products -->

    <div class="container">
        <!-- =================================================================================================== -->
        <div class="catgegories">
            <a href="tomatoes.php">
                <div class="gallery"><img src="img/tomatoes.jpg" class="item-image"></div>
                <div class="iamge-title"> Tomatoes </div>
                <div class="item-price"> $1.34 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>
        <div class="catgegories">

            <a href="tomatoes.php">
                <div class="gallery"><img src="img/cucumbers.jpg" class="item-image"></div>
                <div class="iamge-title"> Cucumbers </div>
                <div class="item-price"> $ 1.35 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>

        <div class="catgegories">
            <a href="tomatoes.php">
                <div class="gallery"> <img src="img/BROCCOLI.webp" class="item-image"></div>
                <div class="iamge-title"> Broccoli </div>
                <div class="item-price"> $1.36 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>
        <div class="catgegories">

            <a href="tomatoes.php">
                <div class="gallery"> <img src="img/Onions.jpg" class="item-image"></div>
                <div class="iamge-title"> Onions </div>
                <div class="item-price"> $1.37 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>
        <hr>

        <div class="catgegories">
            <a href="tomatoes.php">
                <div class="gallery"><img src="img/carrots.png" class="item-image"></div>
                <div class="iamge-title"> Carrots </div>
                <div class="item-price"> $1.38 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>
        <div class="catgegories">

            <a href="tomatoes.php">
                <div class="gallery"><img src="img/corn.jpg" class="item-image"></div>
                <div class="iamge-title"> Corn </div>
                <div class="item-price"> $1.39 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>


        <div class="catgegories">
            <a href="tomatoes.php">
                <div class="gallery"><img src="img/letuce.jpg" class="item-image"></div>
                <div class="iamge-title">Letuce</div>
                <div class="item-price"> $1.40 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>
        <div class="catgegories">

            <a href="tomatoes.php">
                <div class="gallery"> <img src="img/MUSHROOMS.jpg" class="item-image"></div>
                <div class="iamge-title">Mushrooms </div>
                <div class="item-price"> $1.50 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
        </div>
        </a>
    </div>

    <!-- ============================end  of products======================================================= -->

    </div>
    </div>
    <footer class="footer">


        <div class="row">


            <div class="column" style="background-color:none;">
                <h3>Get to Know Us</h3>
                <p>
                    <a href="VegetablesPage2.html"> Supplier Relations</a><br><br>
                    <a href="VegetablesPage2.html"> Corporate Site</a><br><br>
                    <a href="aboutMission.html"> About Mission<br> <br></a>
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
</body>

</html>