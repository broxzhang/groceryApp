<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Concordia Store</title>
    <link rel="stylesheet" type="text/css" href="style/backStore.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>

<body>

    <h1>Back Store Mangement</h1>



    <div class="navbar">
        <a href="../index.php">Home</a>
        <a href="product-list.html">Product List</a>
        <a href="backStoreUserList.php">User List</a>
        <a href="backStoreOrderList.php">Order List</a>
        <div class="subnav">
            <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
            <div class="subnav-content">
                <a href="#company">Company</a>
                <a href="#team">Team</a>
                <a href="#">Careers</a>
                <a href="#">HR</a>
            </div>
        </div>


        <a href="">Contact</a>
    </div>



    <!-- editing from here -->
   



    <div class="container">
        <h1 class="page-header text-center">User List</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New</a>
                <?php
                session_start();
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                <?php

                    unset($_SESSION['message']);
                }
                ?>
                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>UserName</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                    </thead>


                    <tbody>
                        <?php
                        //load xml file
                        $xml = simplexml_load_file('../database/users.xml');

                        foreach ($xml->user as $row) {
                        ?>
                            <tr>

                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->fName; ?></td>
                                <td><?php echo $row->lName; ?></td>
                                <td><?php echo $row->phone_number; ?></td>
                                <td><?php echo $row->email; ?></td>

                                <td>
                                    <a href="#edit_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                    <a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                </td>
                                <?php include('edituser_modal.php'); ?>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('adduser_modal.php'); ?>
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>