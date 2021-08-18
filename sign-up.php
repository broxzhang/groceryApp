<?php
$errors = array();

if(isset($_POST['login'])){
    $username = preg_replace('/[^A-Za-z0-9]/', '', $_POST['username']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $street_No = $_POST['street_No'];
    $post_Code = $_POST['post_Code'];

    if(file_exists('users/' . $username . '.xml')){
        $errors[] = 'Username already exists';
    }
    if($username == ''){
        $errors[] = 'Username is blank';
    }
    if($email == ''){
        $errors[] = 'Email is blank';
    }
    if($password == '' || $c_password == ''){
        $errors[] = 'Passwords are blank';
    }
    if($password != $c_password){
        $errors[] = 'Passwords do not match';
    }
    if($street_No == ''){
        $errors[] = 'Street No is blank';
    }
    if($post_Code == ''){
        $errors[] = 'Post Code is blank';
    }
    if(count($errors) == 0){
        $xml = new SimpleXMLElement('<user></user>');
        $xml->addChild('password',$password);
        $xml->addChild('email', $email);
        $xml->addChild('street_no',  $street_No);
        $xml->addChild('postal_code',$post_Code);
        $xml->asXML('users/'. $username . '.xml');
        session_start();
        session_unset();
        session_destroy();
        header('Location:log.php');
        die;
    }
}
?>
<!DOCTYPE html>

<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<html >
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style/sign-up.css">

</head>

<body>
    <form class="main-container" method="post" action="">
      <?php
      if(count($errors) > 0){
          echo '<ul>';
          foreach($errors as $e){
              echo '<li>' . $e . '</li>';
          }
          echo '</ul>';
      }
      ?>

        <div style="display: flex; flex-flow: column;">
        
             <!-- <a href="index.php" class="a-menu">
             <img id="test" src="img/home.png"> Home  </a> -->

                   
            <div class="input-container">
                <h2>Create User Account</h2>
            </div>
            <div class="input-container">
                <input type="text" name="username" placeholder="User Name" size="10">
            </div>
            
            <div class="input-container">
                <input type="text" name="email" placeholder="Email" size="20">

            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Password" size="20">
            </div>
            <div class="input-container">
                <input type="password" name="c_password" placeholder="Confirm password" size="20" >
            </div>
            <div class="input-container">
                <input type="text"  name="street_No" placeholder="Street No." size="20">
            </div>
            <div class="input-container">
                <input type="text"  name="post_Code" placeholder="Post Code" size="20">
            </div>
        </div>
        <div class="input-container">
          <button type="submit" name="login" value="Create Account" >Register</button>
        </div>
        <div class="input-container">
          <button type="submit" name="home"  ><a href="index.php">Home</button>
        </div>

    </form>
</body>

</html>
