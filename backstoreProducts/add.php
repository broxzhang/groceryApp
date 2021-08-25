<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$productslist = simplexml_load_file('database/products.xml');
		$product = $productslist->addChild('product');
		$product->addChild('id', $_POST['id']);
		$product->addChild('productName', $_POST['productName']);
		$product->addChild('aisles', $_POST['aisles']);
		$product->addChild('price', $_POST['price']);
        $product->addChild('category', $_POST['category']);
        $product->addChild('type', $_POST['type']);
        $product->addChild('avg', $_POST['avg']);
        $product->addChild('photo', $_POST['photo']);
        $product->addChild('description', $_POST['description']);
		file_put_contents('database/products.xml', $productslist->asXML());
		$_SESSION['message'] = 'Product added successfully';
		header('location: backStoreProductsList.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: backStoreProductsList.php');
	}

?>