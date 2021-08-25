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



// function sum($carry, $item)
// {
//     print_r($item->numberOfItem);
//     $carry += intval($item->numberOfItem);
//     return $carry;
// }
// $numOfItem = array_reduce($cart, "sum");
$numOfItem = 0;

foreach ($cart as $item) {
    $numOfItem +=  intval($item->numberOfItem);
}

echo $numOfItem;

$_SESSION["numberOfItems"] = $numOfItem;

exit();
