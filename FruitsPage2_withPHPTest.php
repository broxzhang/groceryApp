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


    <style type="text/css">
    header{

	
        /* put your background here */
        background-image: url("img/fruits.jpg");
        height: max-content;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /* margin-top: 40px;
        background-size:auto; */
        border-radius: 30px;
        margin-top: 120px;
    }
</style>
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

    <?php
    $doc = new DOMDocument();
    $doc->load('database/products.xml');
    $products = $doc->getElementsByTagName("fruit");
    
    foreach ($products as $fruit) {
        $names = $fruit->getElementsByTagName("name");
        $name = $names->item(0)->nodeValue;
        $prices = $fruit->getElementsByTagName("price");
        $price = $prices->item(0)->nodeValue;
        $images = $fruit->getElementsByTagName("image");
        $image = $images->item(0)->nodeValue;
    
        
    
        echo "
            <div class='container'>
            
                <a href='p3Apples.html'>
                    <div class='catgegories'>
                        <img src='".$image."' class='item-image'>
                        <div class='iamge-title'>$name</div>
                        <div class='item-price'> $".$price."</div>
                        <a href='shoppingcart.html' class='b-menu'>
                            <img id='test' src='img/addToCart.png'>
                        </a>
                    </div>
                </a>
            </div>
        ";
    

    };
    
        ?>






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