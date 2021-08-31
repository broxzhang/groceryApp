<?php
session_start();
$cart = ($_SESSION["Cart"]);

print_r($_POST['itemId']);

$value = $_POST['numberOfItem'];
$id = $_POST['itemId'];


if ($value != 0) {
    foreach ($cart as $item) {
        if ($item->itemId == $id) {
            $item->numberOfItem = $value;
        }
    }
} else {
    foreach ($cart as $key => $item) {
        if ($item->itemId == $id) {
            unset($cart[$key]);
        }
    }
}

print_r($cart);

$_SESSION["Cart"] = $cart;

$numOfItem = 0;

foreach ($cart as $item) {
    $numOfItem +=  intval($item->numberOfItem);
}

$_SESSION["numberOfItems"] = $numOfItem;
