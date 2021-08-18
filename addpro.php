<?php
$errors = array();
if(isset($_POST['add'])){
    $productname = preg_replace('/[^A-Za-z0-9]/', '', $_POST['productname']);

    $price = $_POST['price'];
    $category = $_POST['category'];

    $type = $_POST['type'];
    $color = $_POST['color'];
    // if(file_exists('users/' . $username . '.xml')){
    //     $errors[] = 'Username already exists';
    // }
    // if($username == ''){
    //     $errors[] = 'Username is blank';
    // }
    // if($email == ''){
    //     $errors[] = 'Email is blank';
    // }
    // if($password == '' || $c_password == ''){
    //     $errors[] = 'Passwords are blank';
    // }
    // if($password != $c_password){
    //     $errors[] = 'Passwords do not match';
    // }
    // if($street_No == ''){
    //     $errors[] = 'Street No is blank';
    // }
    // if($post_Code == ''){
    //     $errors[] = 'Post Code is blank';
    // }
    // if(count($errors) == 0){
        $xml = new SimpleXMLElement('<products></products>');
        $xml->addChild('productname',$productname);
        $xml->addChild('price',$price);
        $xml->addChild('category', $category);
        $xml->addChild('type',  $type);
        $xml->addChild('color',$color);
        $xml->asXML('productTest/'. $productname . '.xml');
        header('backstoreMain.html');
        die;
  // }
}
?>
<!DOCTYPE html>

<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<html >
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>adding some shit</title>
    <link rel="stylesheet" type="text/css" href="style/sign-up.css">

</head>

<body>
    <form class="main-container" method="post" action="">
      <?php
      // if(count($errors) > 0){
          echo '<ul>';
          foreach($errors as $e){
              echo '<li>' . $e . '</li>';
          }
          echo '</ul>';
      // }
      ?>
        <div style="display: flex; flex-flow: column;">
            <div class="input-container">
                <h1>addig products</h1>
            </div>
            <div class="input-container">
                <input type="text" name="productname" placeholder="product name" size="20">
            </div>
            <!-- <div class="input-container">
                <input type="text" placeholder="Last Name" size="20">
            </div> -->
            <div class="input-container">
                <input type="text" name="price" placeholder="price" size="20">

            </div>
            <div class="input-container">
                <input type="text" name="category" placeholder="category" size="20">
            </div>
            <!-- <div class="input-container">
                <input type="password" name="c_password" placeholder="Confirm password" size="20" >
            </div> -->
            <div class="input-container">
                <input type="text"  name="type" placeholder="type" size="20">
            </div>
            <div class="input-container">
                <input type="text"  name="color" placeholder="color" size="20">
            </div>
        </div>
        <div class="input-container">
          <button type="submit" name="add" value="add product" />add</button>
        </div>

    </form>
</body>

</html>
