<?php
	session_start();
	$productName = $_GET['productName'];

	$productslist = simplexml_load_file('../database/products.xml');

	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;

	foreach($productslist->products->product as $product){
		if($product->productName == $productName){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($productslist->products->product[$index]);
	file_put_contents('../database/products.xml', $productslist->asXML());

	$_SESSION['message'] = 'Member deleted successfully';
	header('location: backStoreProductsList.php');

?>
