<?php
session_start();
if (isset($_SESSION["Cart"])) {
    $cart = ($_SESSION["Cart"]);
} else {
    $cart = array();
}

// $key = array_search("10", array_column(json_decode(json_encode($cart), TRUE), 'itemId'));

// print_r($cart[$key]);

$newItem = (object) ($_POST);
array_push($cart, $newItem);

$combinedCart = array();

$_SESSION["Cart"] = $cart;

$numOfItem = 0;

foreach ($cart as $item) {
    $numOfItem +=  intval($item->numberOfItem);
}

echo $numOfItem;

$_SESSION["numberOfItems"] = $numOfItem;

exit();
