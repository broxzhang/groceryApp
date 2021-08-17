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
        <?php include('html/header.html')  ?>
        <div class="main-container col-10">
            <div class="menu-container col-md-2 col-10">
                <span class="mt-3">
                    <h4>Fish & Seafood</h4>
                </span>
                <span class='filter'>Fresh Fish</span>
                <span class='filter'>Fresh Seafood</span>
                <span class='filter'>Frozen Fish</span>
                <span class='filter'>Frozen Seafood</span>
                <span class='filter'>Prepared Fish</span>
                <span class='filter'>Prepared Seafood</span>
            </div>



            <div class="mt-5 d-flex flex-row flex-wrap col-md-8 col-10">

                <?php
                    $xml = simplexml_load_file("database/products.xml") or die('Cann0t find xml file');
                    // echo($xml->products->seaf00d->product);
                    $seafood =  $xml->products;
                    // print_r($seafood);
                    foreach ($xml->products->product as $food) {
                        $avgStr = 0;
                        $pizKg = 0;
                        $id = $food['id'];
                        if($food->aisles == 'seafood'){
                                echo '<div class="card col-md-4" style="min-width: 250px">
                                    <img class="card-img-top" src="',$food->photo,'" alt="seafood image" >
                                    </a>
                                    <div class="card-body">
                                    <h5 class="card-title">',$food->productName,'</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">',$avgStr,'</li>
                                        <li class="list-group-item">',$pizKg,'/kg', $food->price,'/lb</li>
                                    </ul>
                                    </div>
                                    <div class="card-body">
                                    <a href="shoppingCart.php?itemid=',$food['id'],'"> 
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