<?php
	session_start();
	$id = $_GET['id'];

	$products = simplexml_load_file('../database/products.xml');

	//we're are going to create iterator to assign to each product
	$index = 0;
	$i = 0;

	foreach($products->product as $product){
		if($product->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($products->products->product[$index]);
	file_put_contents('../database/products.xml', $products->asXML());

	$_SESSION['message'] = 'Product deleted successfully';
	header('location: backStoreProductsList.php');

?>
