<?php
function component($productname, $productprice, $produtctimg){

    $element="
    
    <form class="catgegories" action="FruitsPage2_withPHPTest.php" method="post">
                <img src="img/banana.webp" class="item-image">
                <div class="iamge-title"> Bananas </div>
                <div class="item-price"> $2.50 </div>
                <a href="shoppingcart.html" class="b-menu">
                    <img id="test" src="img/addToCart.png"> </a>
            </form>



    ";
    echo$element
}





