<?php
	session_start();
	if(isset($_POST['edit'])){
		$root = simplexml_load_file('../database/users.xml');
		foreach($root->user as $user){
			if($user->username == $_POST['username']){
				$user->password = $_POST['password'];
				$user->isAdmin = $_POST['isAdmin'];
				$user->fName = $_POST['fName'];
				$user->lName = $_POST['lName'];
				$user->phone_number = $_POST['phone_number'];
				$user->email = $_POST['email'];;
				break;
			}
		}

		file_put_contents('../database/users.xml', $root->asXML());
		$_SESSION['message'] = 'User edit successfully';
		header('location: backStoreUserList.php');
	}
	else{
		$_SESSION['message'] = 'Select a User to edit';
		header('location: backStoreUserList.php');
	}

?>