<!-- connect file-->
<?php 
include ('./includes/connect.php');
include ('./functions/common_function.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website using PHP and Mysql</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!--Nav Bar -->
    <div class="container-fluid p-0">
        <!--first child -->
    <nav class="navbar navbar-expand-lg  bg-info">
        <div class="container-fluid">
        <img src="./images/logo1.png" alt="" class="cart_logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./display_all.php">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./users_area/user_registration.php">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item();?></sup></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Total Price:  <?php total_cart_price();?>/-</a>
                </li>
            </ul>
            <form class="d-flex" role="search" action="" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
            </form>
            </div>
        </div>
    </nav>

<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <?php
            if(!isset($_SESSION['username'])) {
                echo"<li class='nav-item'>
                <a class='nav-link' href='#'>Welcome Guest</a>
                </li>";
            }
            else {
                echo"<li class='nav-item'>
                <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
                </li>";
            }
            if(!isset($_SESSION['username'])) {
                echo"<li class='nav-item'>
                <a class='nav-link' href='./users_area/user_login.php'>Login</a>
                </li>";
            }
            else {
                echo"<li class='nav-item'>
                <a class='nav-link' href='./users_area/logout.php'>Logout</a>
                </li>";
            }  
        ?>
    </ul>
</nav>
<!-- calling cart function--->
<?php cart(); ?>
<!--Third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communication is at the heart of e-commerce and community</p>
</div>

<!-- Fourth child -->
<div class="row mx-1">
    <div class="col-md-10">
        <!-- products -->
        <div class="row">
            <!---fectching products-->
            <?php
                search_product();
                get_unique_categories();
                get_unique_brands();
            ?>
            
        </div>
    </div>
    <!---side bar section -->
    <div class="col-md-2 bg-secondary p-0">
            <!-- delivery brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
        
            <li class="nav-item bg-info text-light">
                <a href="#" class="nav-link"><h4>Delivery brands</h4></a>
            </li>

            <?php 
          getBrands();
          

            ?>
        </ul>

        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <!-- delivery brands -->
            <li class="nav-item bg-info text-light">
                <a href="#" class="nav-link"><h4>Categories brands</h4></a>
            </li>
            
            <!-- php for categories-->
            <?php 
            
            getCategories();
            ?>
        </ul>
        <!-- side nav -->
    </div>
</div>






<!---last child -->
<div class="bg-info p-3 text-center">
    <p>All rights reserved @ Designed By Soumyadip - 2024</p>
</div>
    </div>












<!--Bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>