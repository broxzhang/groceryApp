<!-- ============================== php =================================== -->
<?php
session_start();
?>
<!-- ============================== php =================================== -->
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
    <?php include('html/header.html')  ?>

    <!-- ============================== php =================================== -->
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
    <!-- ============================== php =================================== -->
</header>

<body>
    <!-- -========================cover video========================== -->

    <video class="video" id="vid" width=100% hight=50% controls muted autoplay loop font-size: small; margin-top:160px;>

        <source src="img/sami3.mp4">
    </video>
    <!-- -==================================================================== -->

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


                <!-- ============================== php =================================== -->
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
                    echo "    <li> <div class='subnav'>  <button class='subnavbtn'> Login <img id='test' src='img/login.png'><i class='fa fa-caret-down'></i></button>";
                    echo "    <div class='subnav-content'>  <a href='log.php'>User login.</a>";
                    echo "      <a href='employees-log.php'>employees login.</a> </div></div></a>";


                    echo "   <a href='#' class='a-menu'>";
                    echo "   <li>  <div class='subnav'>  <button class='subnavbtn'> SignUp <img id='test' src='img/sign up.png'><i class='fa fa-caret-down'></i></button>";
                    echo "    <div class='subnav-content'>  <a href='sign-up.php'>User Signup.</a>";
                    echo "      <a href='empSignUp.php'>employees Signup.</a> </div></div></a>";
                }
                ?>

                <!-- ============================== php =================================== -->
            </ul>


        </div>
    </div>


    <div class="container">


        <div class="catgegories">
            <a href="tomatoes.php">
                <div class="gallery"><img src="img/tomatoes.jpg" class="item-image"></div>
                <div class="iamge-title"> Tomatoes </div>
        </div>
        </a>
        <div class="catgegories">

            <a href="PepsiPage3.html">
                <div class="gallery"><img src="img/pepsi.jpg" class="item-image"></div>
                <div class="iamge-title">Pepsi </div>
        </div>
        </a>

        <div class="catgegories">
            <a href="seafood-detail.html">
                <div class="gallery"><img src="img/salmon_fillet.jpeg" class="item-image"></div>
                <div class="iamge-title"> Salmon Fillet </div>
        </div>
        </a>
        <div class="catgegories">

            <a href="p3Apples.html">
                <div class="gallery"><img src="img/apples1.jpg" class="item-image"></div>
                <div class="iamge-title"> Apples </div>
        </div>
        </a>
    </div>
    <!-- =========================offers video=============================================== -->
    <div class="container2">

        <div class="catgegories2">

            <a href="tomatoes.html"> <video id="vid" width=100% hight=100% autoplay loop controls muted>
                    <source src="img/offers1.mp4">
                </video> =>CLICK HERE FOR MORE SPECIAL OFFERS!!<= </div>
            </a>

        </div>
        <hr>
    </div>
    <!-- =========================end of  offers video=============================================== -->
    <!-- -========================products part 1========================== -->
    <div class="container">
        <div class="catgegories">
            <a href="ChipsPage3.html">
                <div class="gallery"> <img src="img/laysstax.jpg" class="item-image"></div>
                <div class="iamge-title"> Lays </div>
        </div>
        </a>
        <div class="catgegories">

            <a href="Dairy&EggsP3_Eggs.html">
                <div class="gallery"> <img src="img/eggs.jpg" class="item-image"></div>
                <div class="iamge-title"> Eggs </div>
        </div>
        </a>

        <div class="catgegories">
            <a href="#link">
                <div class="gallery"><img src="img/banana1.jpg" class="item-image"></div>
                <div class="iamge-title"> Bananas </div>
        </div>
        </a>
        <div class="catgegories">

            <a href="#link">
                <div class="gallery"><img src="img/apples1.jpg" class="item-image"></div>
                <div class="iamge-title"> Apples </div>
        </div>
        </a>
        <hr>
    </div>
    <!-- </div></div> -->
    <!-- =================================================================================================== -->
    <!-- -end -->

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



    </footer>

</body>

</html>