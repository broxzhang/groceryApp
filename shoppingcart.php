<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Concordia Store</title>
    <link rel="stylesheet" type="text/css" href="style/p2Style.css" />
    <script>
    var total;
    var gst;
    var qst;
    var totaltaxed;
    var p;
    var q;

    function removeItem(event) {
        var butclicked = event.target;
        butclicked.parentElement.parentElement.remove();
        updateTotal();
    }

    function updateTotal() {
        var itemList = document.getElementsByClassName('list')[0];
        var items = document.getElementsByClassName('product');
        let total = 0;
        let numOfItems = 0;
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            var price = item.getElementsByClassName('price')[0];
            var qty = item.getElementsByClassName('qty')[0];
            var p = parseFloat(price.innerText.replace('$', ''));
            var q = qty.value;
            total = total + (p * q);
            numOfItems = Number(numOfItems) + Number(q);
        }
        total = (total).toFixed(2);
        var gst = (total * 0.05).toFixed(2);
        var qst = (total * 0.09975).toFixed(2);
        var totaltaxed = (total * 1.14975).toFixed(2);
        // var numOfItems;
        // document.getElementById('tot').textContent = '$' + total;
        // document.getElementById('gst').textContent = '$' + gst;
        // document.getElementById('qst').textContent = '$' + qst;
        // document.getElementById('totaltaxed').textContent = 'CAD $' + totaltaxed;

        // Store

        localStorage.total = total;
        localStorage.gst = gst;
        localStorage.qst = qst;
        localStorage.totaltaxed = totaltaxed;
        localStorage.p = p;
        localStorage.q = q;
        localStorage.numOfItems = numOfItems;

        // Retrieve
        document.getElementById('tot').textContent = '$' + localStorage.total;
        document.getElementById('gst').textContent = '$' + localStorage.gst;
        document.getElementById('qst').textContent = '$' + localStorage.qst;
        document.getElementById('totaltaxed').textContent = 'CAD $' + localStorage.totaltaxed;
        // document.getElementById('qty').value = localStorage.q;
        document.getElementById('numOfItems').textContent = localStorage.numOfItems;

    }
    window.onload = function() {

        document.getElementById('tot').textContent = '$' + localStorage.total;
        document.getElementById('gst').textContent = '$' + localStorage.gst;
        document.getElementById('qst').textContent = '$' + localStorage.qst;
        document.getElementById('totaltaxed').textContent = 'CAD $' + localStorage.totaltaxed;
        document.getElementById('qty').value = localStorage.q;
        document.getElementById('numOfItems').textContent = localStorage.numOfItems;
        updateTotal();


    }
    </script>
    <style type="text/css">
    h1 {
        background: rgba (0, 0, 0, 0.5);
        text-align: center;
        color: black;
        padding: 50px;
        font-variant: small-caps;
        font-size: 50px;
        font-family: fantasy;
        letter-spacing: 0px;
    }

    .cart {
        margin-bottom: 200px;
    }

    .product {
        display: flex;
        border: 1px solid silver;
        margin: 20px 20px 20px 20px;
        border-radius: 10px;
    }

    .product>img {
        width: 180px;
        height: 200px;
        object-fit: cover;
    }

    .info {
        padding: 20px;
        width: 100%;
    }

    .name,
    .price {
        margin-bottom: 20px;
    }

    .button {
        font-size: small;
        bottom: 20px;
        right: 20px;
        padding: 10px 25px;
        background-color: red;
        color: white;
        border-radius: 5px;
    }

    .button:hover {
        background-color: rgba(255, 0, 0, 0.233);
        color: red;
        font-weight: 600px;
        border: 1px solid red;
    }

    .qty>input {
        width: 40px;
        padding: 5px;
        text-align: center;
    }

    .refresh {
        text-align: center;
        font-size: medium;
        padding: 10px 25px;
        height: 40px;
        background-color: grey;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .refresh:hover {
        background-color: rgba(128, 128, 128, 0.171);
        color: grey;
        font-weight: 600px;
        border: 1px solid grey;
    }

    .total {
        margin: 20px 20px 20px 20px;
        padding: 20px 20px 20px 20px;
        border: 1px solid silver;
        border-radius: 10px;
    }

    .total p {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
        font-size: 20px;
    }

    .checkout {
        text-align: center;
        font-size: medium;
        padding: 10px 25px;
        height: 40px;
        background-color: green;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .checkout:hover {
        background-color: rgba(172, 221, 73, 0.438);
        color: green;
        font-weight: 600px;
        border: 1px solid green;
    }

    .continue {
        display: block;
        margin-right: 20px;
        text-align: right;
    }

    .contshop {
        text-align: center;
        font-size: medium;
        padding: 10px 25px;
        height: 40px;
        background-color: grey;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .contshop:hover {
        background-color: rgba(128, 128, 128, 0.171);
        color: grey;
        font-weight: 600px;
        border: 1px solid grey;
    }

    .qty {
        width: 70px;
        text-align: center;
    }
    </style>

</head>
<!-- <header>
    Your cart
</header> -->

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
    <br>
    <h1>
        Shopping cart
        <hr />
    </h1>

    <div class="cart">
        <div id="list">
            <div class="product" id="product">
                <img src="img/pepsi.jpg" />
                <div class="info">
                    <h3 class="name">
                        Pepsi
                    </h3>
                    <h3 class="price">
                        $3.99
                    </h3>
                    <p>
                        Qty:
                        <input class="qty" id="qty" value="1" type="number" onclick="updateTotal()"
                            onkeyup="updateTotal()">
                    </p>
                    <button class="button" type="button" onclick="removeItem(event)">
                        Remove this item
                    </button>
                </div>
            </div>
            <!-- <div class="product" id="product">
                <img src="img/nestea.jpg" />
                <div class="info">
                    <h3 class="name">
                        Nestea
                    </h3>
                    <h3 class="price">
                        $2.50
                    </h3>
                    <p>
                        Qty:
                        <input class="qty" id ='qty' value="3">
                    </p>
                    <button type="button" class="button" onclick="removeItem(event)">
                        Remove this item
                    </button>
                </div>
            </div> -->
        </div>
        <!-- <button type="button" class="refresh" onclick="updateTotal()" style="margin-left: 20px;">
            Refresh the total
        </button> -->
        <div class="total">
            <p class="t">
                <span>
                    Total before tax:
                </span>
                <span id="tot">
                    $11.49
                </span>
            </p>
            <p>
                <span>
                    Number of items:
                </span>
                <span id="numOfItems">
                    4
                </span>
            </p>
            <p>
                <span>
                    GST:
                </span>
                <span id="gst">
                    $0.57
                    <span>
            </p>
            <p>
                <span>
                    QST:
                </span>
                <span id="qst">
                    $1.15
                </span>
            </p>
            <p>
                <span>
                    Total:
                </span>
                <span id="totaltaxed">
                    CAD $13.21
                </span>
            </p>
            <button type="button" class="checkout">
                Proceed to checkout
            </button>
        </div>
        <div class="continue">
            <button type="button" class="contshop" onclick="window.location.href='index.html'">
                Continue shopping
            </button>
        </div>

    </div>
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