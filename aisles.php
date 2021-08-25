<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisles</title>
</head>

<style>
    .item-container {
        box-sizing: content-box;
        box-shadow: 3px 2px 2px blue;
        border: solid #000000 5px !important;
        margin: 20px;
        width: 250px;
    }

    .item-image {
        width: 250;
        height: 250;
        filter: grayscale(100%) contrast(25%);
        transition: filter 0.5s ease;
    }

    .item-image:hover {
        filter: grayscale(0) contrast(100%);
    }
</style>


<body>
    <div class="d-flex flex-column col-12">
        <?php include('html/header.php') ?>

        <div class="mt-4 d-flex flex-row col-10 m-auto">
            <div class="d-flex flex-row flex-wrap" style="margin-top: 5rem">
                <?php
                $parameter = $_SERVER['QUERY_STRING'];
                // echo $parameter;
                $xml = simplexml_load_file('database/products.xml') or die('cannot load xml');
                // $items = $xml->products;
                foreach ($xml->product as $item) {
                    $itemId = $item['id'];

                    if ($item->aisles == $parameter) {
                        echo '<div class="item-container card d-flex flex-column justify-content-lg-between" style="min-width: 250px">
                                        <a href="aisles-detail.php?', $item['id'], '">
                                                <img class= "item-image card-img-top border-bottom" src="', $item->photo, '" alt="seafood image" >
                                        </a>
                                        <div class="d-flex flex-column card-body justify-content-between">
                                            <h5 class="card-title">', $item->productName, '</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">$', $item->price, '</li>
                                            </ul>
                                        </div>
                                        <div class="card-body d-flex" style="height: 60px">
                                            <a onclick="addItemToCart(', $item['id'], ')"> 
                                                <i class="fas fa-shopping-cart">Add To Cart</i>
                                            </a>
                                        </div>
                                    </div>';
                    }
                }
                ?>
            </div>
        </div>


        <?php include('html/footer.html') ?>
    </div>
</body>
<script>
    function addItemToCart(id) {
        console.log(id);

        let obj = {
            itemId: id,
            numberOfItem: 1
        }

        $.ajax({
            url: "php/addToCart.php",
            type: "post",
            data: obj,
            success: function(res) {
                location.reload();
                console.log(res);
            }
        })

    }
</script>

</html>