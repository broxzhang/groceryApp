<?php
	session_start();
	if(isset($_POST['edit'])){
		$productslist = simplexml_load_file('../database/products.xml');
		foreach($productslist->products->product as $product){
			if($product->productName == $_POST['productName']{
				$product->aisles = $_POST['aisles'];
				$product->price = $_POST['price'];
				$product->category = $_POST['category'];
				$product->type = $_POST['type'];
				$product->avg = $_POST['avg'];
				$product->photo = $_POST['photo'];
				$product->description = $_POST['description'];
				break;
			}
		}

		file_put_contents('../database/products.xml', $productslist->asXML());
		$_SESSION['message'] = 'Product updated successfully';
		header('location: backStoreProductsList.php');
	}
	else{
		$_SESSION['message'] = 'Select Product to edit first';
		header('location: backStoreProductsList.php');
	}

?>
