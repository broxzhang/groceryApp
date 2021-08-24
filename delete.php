<?php
	$id = $_GET['id'];

	$orderlist = simplexml_load_file('database/orderlist.xml');
	
	$position = 0;
	$i = 0;

	foreach($orderlist->order as $order){
		if($order->id == $id){
			$position = $i;
			break;
		}
		$i++;
	}
	
	unset($orderlist->order[$position]);
	file_put_contents('database/orderlist.xml', $orderlist->asXML());

	header('location: backStoreOrderList.php');

?>