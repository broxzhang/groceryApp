<!-- ==================================================================== -->
<?php
$error = false;

if (isset($_POST['login'])) {

    $username = preg_replace('/[^A-Za-z0-9]/', '', $_POST['username']);
    $password = $_POST['password'];
    if (file_exists('database/users.xml')) {
        $xml1 = simplexml_load_file('database/users.xml');

        function check($id, $filename = 'database/users.xml')
        {

            $data = simplexml_load_file($filename);
            for ($i = 0, $length = count($data->user); $i < $length; $i++) {

                if (
                    $data->user[$i]->username == $_POST['username'] &&
                    $data->user[$i]->password == $_POST['password'] &&
                    $data->user[$i]->isAdmin == "false"
                ) {

                    session_start();
                    session_unset();
                    session_destroy();
                    session_start();
                    $username = preg_replace('/[^A-Za-z0-9]/', '', $_POST['username']);
                    $password = $_POST['password'];
                    $_SESSION['username'] = $username;
                    header('Refresh:1;url=index.php?logged');
                    die;
                } else if (
                    $data->user[$i]->username == $_POST['username'] &&
                    $data->user[$i]->password == $_POST['password'] &&
                    $data->user[$i]->isAdmin == "true"
                ) {

                    session_start();
                    session_unset();
                    session_destroy();
                    session_start();
                    $username = preg_replace('/[^A-Za-z0-9]/', '', $_POST['username']);
                    $password = $_POST['password'];
                    $_SESSION['adminname'] = "Admin " . $username;
                    header('Refresh:1;url=backstoreMain.php?logged');
                    
                    die;
                }
            } //end of for loop.
        } // end of function delete.
        check($_POST['username']);
    }
    $error = true;
}
?>
<!-- ==================================================================== -->
<!DOCTYPE html>
<html lang="en">
<!-- new -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>CS Store</title>
    <!-- <link rel="stylesheet" type="text/css" href="style/logStyle.css" /> -->

</head>


<body>


    <div class="container4">
        <video class="videoPlayer" controls muted autoplay loop>
            <source src="img/videoBanana.mp4">
    </div>
    </video>
    <div id="content2">
        <!-- <div id="sami"> -->


        <div class="parallax">

            <div class="menu" id="sticky">
                <ul class="menu-ul">
                    <a href="index.php" class="a-menu">

                        <li> <img id="test" src="img/home.png"> Home </li>

                    </a>
                    <a href="#" class="a-menu">

                        <li>
                            <div class="subnav">
                                <button class="subnavbtn"> Aisles <img id="test" src="img/arrow_down.png"><i class="fa fa-caret-down"></i></button>

                                <div class="subnav-content">
                                    <a href="FruitsPage2.html">Fruit</a>
                                    <a href="VegetablesPage2.php">Vegetables</a>
                                    <a href="BeveragesPage2.html">Beverages</a>
                                    <a href="Dairy&EggsP2.html">Dairy & Eggs</a>
                                    <a href="seafood.html"> Seafood</a>
                                    <a href="SnacksPage2.html"> Snacks </a>
                                </div>
                            </div>
                    </a>

                    <a href="#" class="a-menu">

                        <li>
                            <div class="subnav">
                                <button class="subnavbtn"> Login <img id="test" src="img/login.png"><i class="fa fa-caret-down"></i></button>
                                <div class="subnav-content">
                                    <a href="log.php">User login</a>
                                    <a href="employees-log.php">employees login</a>

                                </div>
                            </div>
                    </a>
                    <a href="shoppingcart.html" class="a-menu">
                        <li><img id="test" src="img/shopping_cart.png">Shopping cart</li>

                    </a>
                    <a href="sign-up.php" class="a-menu">
                        <li> <img id="test" src="img/sign up.png"> Sign Up</li>

                    </a>
                </ul>

            </div>
        </div>
    </div>
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="">
            <div class="txt_field">

                <input type="text" required name="username" size="20" />
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password" size="20" />

                <label>Password</label>
            </div>
            <?php
            if ($error) {
                echo '<p>Invalid username and/or password</p>';
            }

            ?>

            <p><input type="submit" value="Login" name="login" /></p>
            <div class="pass"><a href="sign-up.php">Sign up</a></div>
        </form>
    </div>
    <!-- =================footer=========================== -->
    <footer class="footer">
        <div class="row">
            <div class="column" style="background-color:none;">
                <h3>Get to Know Us</h3>
                <p>
                    <a href="VegetablesPage2.html"> Supplier Relations</a><br><br>
                    <a href="VegetablesPage2.html"> Corporate Site</a><br><br>
                    <a href="aboutMission.html"> About Mission<br> <br></a>
                    <a href="ContactUs.html"> Contact Us</a><br><br>
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>What we offer?</h3>
                <p>
                    <a href="VegetablesPage2.html"> Gift Card<br><br>
                        <a href="VegetablesPage2.html"> Online grocery<br><br>
                            <a href="VegetablesPage2.html"> Our partners<br><br>
                                <a href="VegetablesPage2.html"> Our Private Brands
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>My concordia</h3>
                <p>
                    <a href="VegetablesPage2.html"> Products to Discover<br><br>
                        <a href="VegetablesPage2.html"> Online Grocery Services<br><br>
                            <a href="VegetablesPage2.html"> Flyer<br><br>
                                <a href="VegetablesPage2.html"> Coupons
                </p>
            </div>
            <div class="column" style="background-color:none;">
                <h3>Like us on social media</h3>
                <p>
                    <a href="VegetablesPage2.html"> <img id="test" src="img/facebook.png"> Facebook<br>
                        <a href="VegetablesPage2.html"> <img id="test" src="img/instagram.png"> Instagram<br>
                            <a href="VegetablesPage2.html"><img id="test" src="img/twitter.png"> twitter<br>
                                <a href="VegetablesPage2.html"> <img id="test" src="img/tiktok.png"> tiktok
                </p>
            </div>

        </div>
        <div id="end">
            &nbsp;&nbsp;&nbsp Newsletter<br>
            &nbsp;&nbsp;&nbsp Sign up to Concordia.ca to receive offers and much more! Learn more
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; All rights resrved <img id="test" src="img/copyrights.png"> <br><br>

            </p>
        </div>
    </footer>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container4 {
            width: 100%;
            height: 100%;
            position: absolute;
            padding: 0;
            margin: 0;
            left: 0px;
            top: 0px;
            z-index: -1000;
            overflow: hidden;
        }

        .videoPlayer {
            min-height: 100%;
            min-width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        html,
        body {

            height: 100%;
        }

        #content2 {
            min-height: 100%;
        }

        .footer {
            margin-top: -50px;
            background-color: #2184c2;
            color: whitesmoke;
            text-align: center;
            flex-shrink: 0;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 23%;
            padding: 10px;
            text-align: left;
        }

        /* Clear floats after the columns */
        .row:after {

            content: "";
            display: table;
            clear: both;
        }

        a:link {
            text-decoration: none;
        }

        h3 {

            color: azure;
        }

        #end {
            text-align: left;
            color: #fff;
        }

        #sticky {
            z-index: 3;
            position: fixed;
            top: 0;
            width: 100%;

        }

        .menu {
            background: #477cdd;
            text-align: center;
        }

        .menu-ul {

            margin: 0;
            padding: 0;
            display: inline;
        }

        .menu-ul li {
            float: left;
            padding: 25px 25px 0px 25px;
            display: inline-block;
            list-style: none;
            font-size: 17px;

        }

        .a-menu {
            text-decoration: none;
            color: white;
        }

        .menu-ul li:hover {
            background: none;
            transform: scale(1.2);

        }


        i {
            font-size: 20px;
            margin: 0 10px 0 0;
        }

        button {

            background: none;
            border: none;
            outline: none;

        }

        /* The subnavigation menu */
        .subnav {
            float: left;
            overflow: hidden;
        }

        /* Subnav button */
        .subnav .subnavbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 0;
            background-color: none;
            font-family: inherit;
            margin: 0;
        }

        /* Add a red background color to navigation links on hover */
        .navbar a:hover,
        .subnav:hover .subnavbtn {
            background-color: none;
        }

        /* Style the subnav content - positioned absolute */
        .subnav-content {
            display: none;
            position: absolute;
            left: 0;
            background-color: white;
            width: 100%;
            z-index: 1;
        }

        /* Style the subnav links */
        .subnav-content a {
            float: left;
            color: rgb(36, 169, 187);
            text-decoration: none;
        }

        /* Add a grey background color on hover */
        .subnav-content a:hover {
            background-color: white;
            color: rgb(36, 169, 187);
        }

        /* When you move the mouse over the subnav container, open the subnav content */
        .subnav:hover .subnav-content {
            display: grid;

        }


        /* <======delete me later===========log in============================ --> */
        .content {
            flex: 1 0 auto;
        }

        .center {
            position: absolute;
            top: 58%;
            left: 50%;
            transform: translate(-50%, -55%);
            width: 340px;
            background-Color: rgba(255, 255, 255, 0.5);
            border-radius: 30px;
            box-shadow: 90px 40px 15px rgba(96, 111, 124, 0.05);
        }

        .center h1 {

            color: #2184c2;
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid silver;
        }

        .center form {
            text-align: center;
            padding: 30px 40px;
            box-sizing: border-box;
        }

        form .txt_field {
            position: relative;
            border-bottom: 2px solid #adadad;
            margin: 30px 0;
        }

        .txt_field input {
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
            text-align: center;
        }

        .txt_field label {
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%);
            font-size: 23px;
            pointer-events: none;
            transition: .3s;
        }

        .txt_field span::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2184c2;
            transition: .3s;
        }

        .txt_field input:focus~label,
        .txt_field input:valid~label {
            top: -5px;
            color: #2e8acc;
        }

        .txt_field input:focus~span::before,
        .txt_field input:valid~span::before {
            width: 100%;
        }

        .pass {
            margin: 10px 0 50px 5px;
            color: #a6a6a6;
            cursor: pointer;
        }

        .pass:hover {
            text-decoration: underline;
        }

        input[type="submit"] {
            text-align: center;
            width: 80%;
            height: 50px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 25px;
            font-size: 24px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }

        input[type="submit"]:hover {
            border-color: #2691d9;
            transition: .3s;
        }

        .signup_link {
            margin: 30px 0;
            text-align: center;
            font-size: 19px;
            color: #2691d9;
        }

        .signup_link a {
            color: #2691d9;
            text-decoration: none;
        }

        .signup_link a:hover {
            text-decoration: underline;
        }
    </style>

</body>

</html>