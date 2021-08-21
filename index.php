<!-- ============================== php =================================== -->

<!-- ============================== php =================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>CS Store</title>
    <!-- <link rel="stylesheet" type="text/css" href="style/homeStyle.css" /> -->

</head>
<?php include('html/header.php')  ?>

<!-- ============================== php =================================== -->
<!-- <?php

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

        ?> -->
<!-- ============================== php =================================== -->

<body>
    <!-- -========================cover video========================== -->

    <video id="vid" width=100% hight=50% controls muted autoplay loop style="font-size: small; margin-top:50px">
        <source src="img/sami3.mp4">
    </video>

    <div class="mt-4 d-flex flex-row col-10 m-auto">
        <div class="d-flex flex-row flex-wrap" style="margin-top: 5rem">
            <?php
            $parameter = $_SERVER['QUERY_STRING'];
            // echo $parameter;
            $xml = simplexml_load_file('database/products.xml') or die('cannot load xml');
            // $items = $xml->products;
            foreach ($xml->products->product as $item) {
                $itemId = $item['id'];

                if ($item->onsale) {
                    echo '<div class="card col-md-3 border d-flex flex-column justify-content-lg-between" style="min-width: 250px">
                                        <a href="seafood-detail.html?itemid=', $item['id'], '">
                                                <img class="card-img-top border-bottom" style="width: 250px; height: 250px" src="', $item->photo, '" alt="seafood image" >
                                        </a>
                                        <div class="d-flex flex-column card-body justify-content-between">
                                            <h5 class="card-title">', $item->productName, '</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">', $item->price, '/lb</li>
                                            </ul>
                                        </div>
                                        <div class="card-body d-flex" style="height: 60px">
                                            <a href="shoppingCart.php?itemid=', $item['id'], '"> 
                                                <i class="fas fa-shopping-cart">Add To Cart</i>
                                            </a>
                                        </div>
                                    </div>';
                }
            }
            ?>
        </div>
    </div>

    <?php include('html/footer.html')  ?>


</body>

</html>