<?php
session_start();
if (isset($_POST['adduser'])) {
	//open xml file
	$root = simplexml_load_file('../database/users.xml');
	$user = $root->addChild('user');
	$user->addChild('username', $_POST['username']);
	$user->addChild('password', $_POST['password']);
	$user->addChild('isAdmin', $_POST['isAdmin']);
	$user->addChild('fName', $_POST['fName']);
	$user->addChild('lName', $_POST['lName']);
	$user->addChild('phone_number', $_POST['phone_number']);
	$user->addChild('email', $_POST['email']);
	file_put_contents('../database/users.xml', $root->asXML());
	$_SESSION['message'] = 'New user added successfully';
	header('location: backStoreUserList.php');
} else {
	$_SESSION['message'] = 'Please fill the form';
	header('location: backStoreUserList.php');
}
