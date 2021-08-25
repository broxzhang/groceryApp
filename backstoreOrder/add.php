<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$orderlist = simplexml_load_file('../database/orderlist.xml');
		$order = $orderlist->addChild('order');
		$order->addChild('id', $_POST['id']);
		$order->addChild('customer', $_POST['customer']);
		$order->addChild('products', $_POST['products']);
		$order->addChild('totalprice', $_POST['totalprice']);
		file_put_contents('../database/orderlist.xml', $orderlist->asXML());
		$_SESSION['message'] = 'Order added successfully';
		header('location: backStoreOrderList.php');
	}
	else{
		$_SESSION['message'] = 'Fill up add form first';
		header('location: backStoreOrderList.php');
	}

?>