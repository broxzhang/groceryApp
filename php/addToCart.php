<?php
session_start();
if (isset($_SESSION["Cart"])) {
    $cart = ($_SESSION["Cart"]);
} else {
    $cart = array();
}

array_push($cart, json_encode($_POST));

$_SESSION["Cart"] = $cart;
echo count($_SESSION["Cart"]);
exit();
