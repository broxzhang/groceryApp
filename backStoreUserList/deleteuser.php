<?php
	session_start();
	$username = $_GET['username'];

	$root = simplexml_load_file('../database/users.xml');

	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;

	foreach($root->user as $user){
		if($user->username == $username){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($root->user[$index]);
	file_put_contents('../database/users.xml', $root->asXML());

	$_SESSION['message'] = 'User deleted successfully';
	header('location: backStoreUserList.php');

?>