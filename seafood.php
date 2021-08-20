<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sea food</title>
</head>


<body>
    <div class="seafood-container">
        <?php include('html/header.php')  ?>
        <div class="main-container col-10">
            <div class="mt-5 d-flex flex-row flex-wrap">
                <?php
                $xml = simplexml_load_file("database/products.xml") or die('Cann0t find xml file');
                // echo($xml->products->seaf00d->product);
                $seafood =  $xml->products;
                // print_r($seafood);
                foreach ($xml->products->product as $food) {
                    $avgStr = 0;
                    $pizKg = 0;
                    $id = $food['id'];
                    if ($food->aisles == 'beverages') {
                        echo '<div class="card col-md-3 border" style="min-width: 250px">
                                    <img class="card-img-top border-bottom" src="', $food->photo, '" alt="seafood image" >
                                    </a>
                                    <div class="card-body">
                                    <h5 class="card-title">', $food->productName, '</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">', $food->price, '/lb</li>
                                    </ul>
                                    </div>
                                    <div class="card-body">
                                    <a href="shoppingCart.php?itemid=', $food['id'], '"> 
                                    <i class="fas fa-shopping-cart">Add To Cart</i>
                                    </a>
                                    </div>
                                </div>';
                    }
                }
                ?>
            </div>
        </div>
        <!-- <script type="module" src="js/seafood.js"></script> -->

</body>

</html>