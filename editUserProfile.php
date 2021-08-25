<?php
	session_start();
	if(isset($_POST['edit'])){
		$userlist = simplexml_load_file('database/users.xml');
		foreach($userlist->user as $user){
			if($user->userid == $_POST['username'] && $user->customer = $_POST['username']){
				$user->fName = $_POST['fName'];
				$user->lName = $_POST['lName'];
				$user->phone_number = $_POST['phone_number'];
				$user->email = $_POST['email'];;
				break;
			}
		}

		file_put_contents('database/users.xml', $userlist->asXML());
		$_SESSION['message'] = 'User edit successfully';
		header('location: backStoreUserList.php');
	}
	else{
		$_SESSION['message'] = 'Select a User to edit';
		header('location: backStoreUserList.php');
	}

?>