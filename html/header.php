<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

    <?php
    session_start();

    $_SESSION["num_items"]  = 0;
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="ms-3 navbar-brand" href="index.php">Concordia Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Aisles
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="aisles.php?fruit">Fruit</a>
                        <a class="dropdown-item" href="aisles.php?Vegetables">Vegetables</a>
                        <a class="dropdown-item" href="aisles.php?beverages">Beverages</a>
                        <a class="dropdown-item" href="aisles.php?dairy">Dairy & Eggs</a>
                        <a class="dropdown-item" href="aisles.php?seafood"> Seafood</a>
                        <a class="dropdown-item" href="aisles.php?snack"> Snacks </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "<a class='dropdown-item' href='logout.php'>Logout</a>";
                        } else if (isset($_SESSION['adminname'])) {
                            // modify here if you change it to backstoreMain.html
                            echo '<a class="dropdown-item" href="backstoreMain.php">Back Store</a>';
                        } else {
                            echo '<a class="dropdown-item" href="log.php">User login</a>',
                            '<a class="dropdown-item" href="employees.php">employees login</a>';
                        }
                        ?>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="shoppingcart.php">Shopping Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="sign-up.php">Sign-up <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div>
                <?php
                echo isset($_SESSION["username"]) ? $_SESSION["username"] : "";
                echo isset($_SESSION["adminname"]) ? $_SESSION["adminname"] : "";
                ?>
                <a type="button" class="btn btn-primary" href="shoppingcart.php">
                    <i class="fas fa-shopping-cart" style="overflow: unset;"></i>
                    <span class="badge badge-light">
                        <?php
                        echo $_SESSION["numberOfItems"] ? $_SESSION["numberOfItems"] : ""
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </nav>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>