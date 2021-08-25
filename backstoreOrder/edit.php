<?php
	session_start();
	if(isset($_POST['edit'])){
		$orderlist = simplexml_load_file('../database/orderlist.xml');
		foreach($orderlist->order as $order){
			if($order->id == $_POST['id'] && $order->customer = $_POST['id']){
				$order->customer = $_POST['customer'];
				$order->products = $_POST['products'];
				$order->totalprice = $_POST['totalprice'];
				break;
			}
		}

		file_put_contents('../database/orderlist.xml', $orderlist->asXML());
		$_SESSION['message'] = 'Order updated successfully';
		header('location: backStoreOrderList.php');
	}
	else{
		$_SESSION['message'] = 'Select Order to edit first';
		header('location: backStoreOrderList.php');
	}

?>