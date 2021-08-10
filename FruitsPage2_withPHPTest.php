<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Concordia Store</title>
    <link rel="stylesheet" type="text/css" href="style/p2Style.css" />
<? require_once("./php/fruit.php");
?>
</head>
<header>
    <h1>Fruits</h1>



</header>

<body>

    <div class="parallax">

        <div class="menu" id="sticky">
            <ul class="menu-ul">
                <a href="index.html" class="a-menu">

                    <li> <img id="test" src="img/home.png"> Home </li>

                </a>
                <a href="#" class="a-menu">

                    <li>
                        <div class="subnav">
                            <button class="subnavbtn"> Aisles <img id="test" src="img/arrow_down.png"><i
                                    class="fa fa-caret-down"></i></button>

                            <div class="subnav-content">
                                <a href="FruitsPage2.html">Fruit</a>
                                <a href="VegetablesPage2.html">Vegetables</a>
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
                                <a href="log.html">User login</a>
                                <a href="employees.html">employees login</a>

                            </div>
                        </div>
                </a>
                <a href="shoppingcart.html" class="a-menu">
                    <li><img id="test" src="img/shopping_cart.png">Shopping cart</li>

                </a>
                <a href="sign-up.html" class="a-menu">
                    <li> <img id="test" src="img/sign up.png"> Sign Up</li>

                </a>
            </ul>
            <!-- <div class="search-box">
                <form>
                    <input type="text" placeholder="Search...." name="search" class="search-input" />
                    <button type="submit">
                        <img src="img/search.png">
                    </button>
                </form>
            </div> -->

        </div>
    </div>

    <!-- -product begining -->

    <div class="container">
        <a href="p3Apples.html">
            <form class="catgegories" action="FruitsPage2_withPHPTest.php" method="post">
                <img src="img/banana.webp" class="item-image">
                <div class="iamge-title"> Bananas </div>
                <div class="item-price"> $2.50 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </form>
        </a>
        <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/apple.webp" class="item-image">
                <div class="iamge-title"> Apples </div>
                <div class="item-price" style="color: red;"> $1.23 (On Sale)</div>
                
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>

        <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/dragonfruit.webp" class="item-image">
                <div class="iamge-title"> Dragon Fruits </div>
                <div class="item-price"> $1.50 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>
        <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/Avocado.webp" class="item-image">
                <div class="iamge-title"> Avocado </div>
                <div class="item-price" style="color: red;"> $3.50 (On Sale)</div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>
        <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/pears.webp" class="item-image">
                <div class="iamge-title"> Pears </div>
                <div class="item-price"> $4.50 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>
        <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/peaches.webp" class="item-image">
                <div class="iamge-title"> Peaches </div>
                <div class="item-price"> $1.50 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>
        <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/oranges.jpg" class="item-image">
                <div class="iamge-title"> Oranges </div>
                <div class="item-price" style="color: red;"> $0.50 (On Sale)</div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>  <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/plums.jpg" class="item-image">
                <div class="iamge-title"> Plums </div>
                <div class="item-price" style="color: red;"> $0.50 (On Sale)</div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>
        <a href="p3Apples.html">
            <div class="catgegories">
                <img src="img/berries.jpg" class="item-image">
                <div class="iamge-title"> Berries </div>
                <div class="item-price"> $2.40 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </div>
        </a>
    </div>
    <br> <br> <br> <br>

    <!-- -product end -->
    <footer id="footer">

        <div class="row">


            <div class="column" style="background-color:none;">
                <h3>Get to Know Us</h3>
                <p>
                    <a href="index.html"> Supplier Relations</a><br>
                    <a href="index.html"> Corporate Site</a><br>
                    <a href="aboutMission.html"> About Mission<br> </a>
                    <a href="ContactUs.html"> Contact Us</a><br>
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>What we offer?</h3>
                <p>
                    <a href="index.html"> Gift Card<br>
                        <a href="index.html"> Online grocery<br>
                            <a href="index.html"> Our partners<br>
                                <a href="index.html"> Our Private Brands<br>
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>My concordia</h3>
                <p>
                    <a href="index.html"> Products to Discover<br>
                        <a href="index.html"> Online Grocery Services<br>
                            <a href="index.html"> Flyer<br>
                                <a href="index.html"> Coupons<br>
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>Like us on social media</h3>
                <p>
                    <a href="index.html"> <img id="test" src="img/facebook.png"> Facebook<br>
                        <a href="index.html"> <img id="test" src="img/instagram.png"> Instagram<br>
                            <a href="index.html"><img id="test" src="img/twitter.png"> twitter<br>
                                <a href="index.html"> <img id="test" src="img/tiktok.png"> tiktok<br>
                </p>
            </div>


            


        </div>
        <div id="end">
            <p>&nbsp;&nbsp;&nbsp; Newsletter<br>
                &nbsp; &nbsp; Sign up to Concordia.ca to receive offers and much more! Learn more
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp; All rights resrved <img id="test" src="img/copyrights.png"> <br><br>

            </p>
        </div>
    </footer>


</body>

</html>