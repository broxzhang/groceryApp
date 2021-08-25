<?php
	session_start();
	if(isset($_POST['adduser'])){
		//open xml file
		$userlist = simplexml_load_file('database/users.xml');
		$user = $userlist->addChild('user');
    $user->addChild('username', $_POST['username']);
		$user->addChild('fName', $_POST['fName']);
		$user->addChild('lName', $_POST['lName']);
		$user->addChild('phone_number', $_POST['phone_number']);
		$user->addChild('email', $_POST['email']);
		file_put_contents('database/users.xml', $userlist->asXML());
		$_SESSION['message'] = 'New user added successfully';
		header('location: backStoreUserList.php');
	}
	else{
		$_SESSION['message'] = 'Please fill the form';
		header('location: backStoreUserList.php');
	}

?>