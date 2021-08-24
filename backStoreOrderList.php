<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>Concordia Store</title>
  <link rel="stylesheet" type="text/css" href="style/backStore.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>

<body>

  <h1>Back Store Mangement</h1>



  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="product-list.html">Product List</a>
    <a href="backStoreUserList.html">User List</a>
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
  <h2>Order Manage</h2>




  <br><br>
  <a href="backStoreOrderProfile.php"><button class="btn Add"> Add Order</button></a>
  <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names, products, orders.."
    title="Type in a name"> -->


  <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
    .btn {
    border: 2px solid black;
    background-color: white;
    color: black;
    padding: 1px 2px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
  }
  
  /* Green */
  .Add {
    border-color: #04AA6D;
    color: green;
  
      padding: 15px 40px;
    
  }
  
  .Add:hover {
    background-color: #04AA6D;
    color: white;
  }
  
  /* Blue */
  .Edit {
    border-color: #2196F3;
    color: dodgerblue
  }
  
  .Edit:hover {
    background: #2196F3;
    color: white;
  }
  
  
  
  /* Red */
  .Delete {
    border-color: #f44336;
    color: red
  }
  
  .Delete:hover {
    background: #f44336;
    color: white;
  }
  
  </style>



  <div class="col-md-3"></div>
  <div class="col-md-6 well">
    <!-- <h3 class="text-primary">PHP - Simple Delete Data In XML File</h3> -->
    <hr style="border-top:1px dotted #ccc;" />

    <table class="table table-bordered table-striped" style="margin-top:20px;">
      <thead class="alert-info">
        <th>Order #</th>
        <th>Customer ID#</th>
        <th>Items</th>
        <th>Total Prices (CND)</th>
        <th>Edit
        <th>Delete
      </thead></th>




      <tbody>


        <?php
        $xml = simplexml_load_file('database/orderlist.xml');

        foreach ($xml->order as $ftpxml) {
        ?>
          <tr>
            <td><?php echo $ftpxml->id; ?>
            <td><?php echo $ftpxml->customer; ?>
            <td><?php echo $ftpxml->products; ?>
            <td><?php echo $ftpxml->totalprice; ?>
            <td><a href="backStoreOrderProfile.php"><button class="btn Edit" id="btn" input value="Check" type=submit> Edit </button></a></td>
            <td><a href="#delete_<?php echo $ftpxml->id; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
          </tr>
          <div class="modal fade" id="delete_<?php echo $ftpxml->id; ?>" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">System Information</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <h3 class="text-danger">Are you sure you want to Delete this record?</h3>
                  </center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                  <a href="delete.php?id=<?php echo $ftpxml->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
                </div>

              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </tbody>
    </table>




    <!-- javascript -->
    <script src="js/backStoreOrderList.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>

    </script>

</body>


</html>