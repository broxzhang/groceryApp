<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<style>
    .item-container {
        box-sizing: content-box;
        box-shadow: 3px 2px 2px blue;
        border: solid #000000 5px !important;
        margin: 20px;

    }

    .info-container {
        min-height: 50vh;
        text-align: center;
    }

    .item-image {
        width: 100px;
        height: 100px;
    }

    .item-image:hover {
        filter: grayscale(0) contrast(100%);
    }
</style>

<body>
    <div class="d-flex flex-column col-12">
        <?php include('html/header.php') ?>

        <div class="d-flex flex-column col-10" style="margin: 80px auto">
            <h3>My Cart (<?php echo $_SESSION['numberOfItems']  ?> products)</h3>
            <div class="d-flex flex-row">
                <div class="d-flex flex-column col-7 bg-white ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-image">
                                    <tbody>
                                        <?php
                                        $cart = $_SESSION['Cart'];
                                        $ids = array();
                                        foreach ($cart as $item) {
                                            // echo array_key_exists($item->itemId, $ids);
                                            // echo $item->itemId;
                                            // print_r($ids);
                                            // echo '<br />';
                                            if (array_key_exists($item->itemId, $ids)) {
                                                $ids[$item->itemId] = (intval($ids[$item->itemId]) + intval($item->numberOfItem));
                                            } else {
                                                $ids[$item->itemId] = intval($item->numberOfItem);
                                            }
                                        }
                                        $total = 0;
                                        $itemStr = '';
                                        $xml = simplexml_load_file('database/products.xml') or die('cannot load xml');
                                        foreach ($xml->product as $item) {
                                            foreach ($ids as $key => $value) {
                                                if ($item['id'] == $key) {
                                                    echo '<tr>
                                                                <td class="w-25">
                                                                    <img src="', $item->photo, '" class="img-fluid img-thumbnail" alt="Sheep">
                                                                </td>
                                                                <td class=" text-center">', $item->productName, '</td>
                                                                <td class=" text-center">$ ', $item->price, '</td>
                                                                <td class=" text-center">', $value, '</td>
                                                            </tr>';

                                                    $total += $item->price * $value;
                                                    $itemStr .= $item->productName . ' (qty): ' . $value . ';';
                                                }
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column col-3">
                    <div class="d-flex flex-column justify-content-evenly info-container">
                        <h4>Cart Summary</h4>
                        <div>Subtotal: <?php echo $total ?></div>
                        <div>GST: <?php echo round($total * .05, 2) ?></div>
                        <div>QST: <?php echo round($total * .0998, 2) ?></div>
                        <div>Estimated Total: <?php echo round($total * 1.1498, 2) ?></div>
                        <div>
                            <button class="btn btn-primary" onclick="checkout(<?php echo $_SESSION['username'] ?>,'<?php echo $itemStr ?>',<?php echo round($total * 1.1498, 2) ?>)">Check Out</button>
                        </div>
                        <div>
                            <a class="btn btn-primary" href="index.php">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include('html/footer.html') ?>
    </div>

</body>
<script>
    function checkout(username, items, price) {
        console.log(items);
        let post = {
            customer: username,
            products: items,
            totalprice: price
        }

        $.ajax({
            url: "backstoreOrder/add.php",
            type: "post",
            data: post,
            success: function(res) {
                console.log(res);
            }
        })
    }
</script>

</html>