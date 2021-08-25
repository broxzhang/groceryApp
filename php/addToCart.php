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


$ids = array();

$NewCart = array();


$numOfItem = 0;

foreach ($cart as $item) {
    $numOfItem +=  intval($item->numberOfItem);
}

foreach ($cart as $item) {
    if (array_key_exists($item->itemId, $ids)) {
        $ids[$item->itemId] = (intval($ids[$item->itemId]) + intval($item->numberOfItem));
    } else {
        $ids[$item->itemId] = intval($item->numberOfItem);
    }
}


foreach ($ids as $key => $value) {
    if ($key != "" and $key != "?10") {
        array_push($NewCart,  (object)([
            'itemId' => $key,
            'numberOfItem' => $value
        ]));
    }
}
print_r($NewCart);

$_SESSION["Cart"] = $NewCart;


echo $numOfItem;

$_SESSION["numberOfItems"] = $numOfItem;

exit();
