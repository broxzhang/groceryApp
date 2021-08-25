<?php
	session_start();
	$id = $_GET['id'];

	$productslist = simplexml_load_file('../database/products.xml');

	//we're are going to create iterator to assign to each product
	$index = 0;
	$i = 0;

	foreach($productslist->product as $product){
		if($product->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($productslist->products->product[$index]);
	file_put_contents('../database/products.xml', $productslist->asXML());

	$_SESSION['message'] = 'Product deleted successfully';
	header('location: backStoreProductsList.php');

?>
