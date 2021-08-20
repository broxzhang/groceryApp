<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>


<body>
    <div class="d-flex flex-column col-12">
        <?php include('html/header.php') ?>


        <?php
        $parameter = $_SERVER['QUERY_STRING'];
        // echo $parameter;
        $xml = simplexml_load_file('database/products.xml') or die('cannot load xml');
        // $items = $xml->products;
        foreach ($xml->products->product as $item) {

            if ($item['id'] == $parameter) {
                echo '
                <div class="d-flex flex-column mt-4">
                <div class="d-flex flex-row col-10 mt-5 m-auto">
                    <div class="col-4">
                        <img src="', $item->photo, '" alt="item-pic" class="img-thumbnail">
                        <figcaption class="figure-caption text-right">A ', $item->aisles, ' image.</figcaption>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 flex-column">
                        <h3>', $item->productName, '</h3>
                        <h4 class="mt-4 text-center" id="priceContainer">$', $item->price, '</h4>
                        <hr />
                        <div class="mt-3 d-flex flex-row justify-content-evenly">
                            <button class="btn btn-primary" onclick="addOne()">+</button>
                            <input id="inputQty" class=" text-center" value="1" />
                            <button class="btn btn-primary" onclick="minusOne()">-</button>
                        </div>
                        
                        <button type="button" class="btn btn-danger mt-5">
                            <i class="fa fa-shopping-cart"></i>Add
                        </button>
                        <hr />
                        <div class="mt-4">
                            <h3 data-toggle="collapse" href="#descripExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Product Description
                            </h3>
                            <div class="collapse" id="descripExample">
                                <div class="card card-body">
                                ', $item->description, '
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
                
                ';
            }
        }
        ?>


        <?php include('html/footer.html') ?>
    </div>

</body>

<script>
    $(document).ready(function() {
        const queryString = window.location.search;


        if (!localStorage.getItem('itemId')) {
            localStorage.setItem('itemId', queryString)
        } else {
            if (localStorage.getItem('itemId') != queryString) {
                localStorage.clear()
            }
        }

        if (localStorage.getItem('qty') && localStorage.getItem('totalPrice')) {
            const price = localStorage.getItem('totalPrice');
            const qty = localStorage.getItem('qty')
            $('#inputQty').val(qty)
            $('#priceContainer').html('$' + (price))
        }
    });
    const price = $('#priceContainer').html().replace('$', '');
    const addOne = () => {
        let qty = Number($('#inputQty').val())
        qty++;
        $('#inputQty').val(qty)

        $('#priceContainer').html('$' + (price * qty))

        localStorage.setItem('qty', qty)
        localStorage.setItem('totalPrice', price * qty)
    }


    const minusOne = () => {
        let qty = Number($('#inputQty').val())
        if (qty >= 1) {
            qty--;
        }
        $('#inputQty').val(qty)

        $('#priceContainer').html('$' + (price * qty))
        localStorage.setItem('qty', qty)
        localStorage.setItem('totalPrice', price * qty)
    }
</script>

</html>