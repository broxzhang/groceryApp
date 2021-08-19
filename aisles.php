<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisles</title>
</head>

<body>
    <div class="d-flex flex-column col-12">
        <?php include('html/header.html') ?>

        <div class="main-container col-10">
            <div class="d-flex flex-row flex-wrap" style="margin-top: 5rem">
                <?php
                $parameter = $_SERVER['QUERY_STRING'];
                // echo $parameter;
                $xml = simplexml_load_file('database/products.xml') or die('cannot load xml');
                // $items = $xml->products;
                foreach ($xml->products->product as $item) {
                    $itemId = $item['id'];

                    if ($item->aisles == $parameter) {
                        echo '<div class="card col-md-3 border" style="min-width: 250px">
                                        <a href="seafood-detail.html?itemid=', $item['id'], '">
                                            <img class="card-img-top border-bottom" src="', $item->photo, '" alt="seafood image" >
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">', $item->productName, '</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">', $item->price, '/lb</li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
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

    </div>
</body>


</html>