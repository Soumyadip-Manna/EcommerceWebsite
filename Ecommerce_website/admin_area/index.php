<?php 
include ('../includes/connect.php');
include ('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .admin_image{
            width:100px;
            object-fit: contain;
        }
        .footer{
            position: absolute;
            bottom: 0;
        }
        body{
            overflow-x:hidden;
        }
        .product_img{
            width:10%;
            object-fit:contain;
        }
        /* .im{
            width:10%;
        } */
    </style>
</head>
<body>
    <!-- navbar-->
    <div class="conatiner-fluid p-0">
        <!-- first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo1.png" alt="" class="cart_logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
         <!-- Second child-->
         <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
         </div>

          <!-- Third child child-->
          <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="px-5">
                        <a href="#"><img src="../images/box5_image.jpg" alt="" class="admin_image"></a>
                        <p class="text-light text-center">Admin name</p>
                    </div>
                    <div class="button text-center">
                        <button class="p-1 border-0 mx-1" ><a href="insert_product.php" class="nav-link text-light bg-info my-1 p-1">Insert Products</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?view_products" class="nav-link text-light bg-info my-1 p-1">View Products</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1 p-1">Insert categories</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?view_categories" class="nav-link text-light bg-info my-1 p-1">View categories</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1 p-1">Insert brands</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?view_brands" class="nav-link text-light bg-info my-1 p-1">View brands</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?list_orders" class="nav-link text-light bg-info my-1 p-1">All orders</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?list_payments" class="nav-link text-light bg-info my-1 p-1">All payments</a></button>
                        <button class="p-1 border-0 mx-1"><a href="index.php?list_users" class="nav-link text-light bg-info my-1 p-1">List users</a></button>
                        <button class="p-1 border-0 mx-1"><a href="" class="nav-link text-light bg-info my-1 p-1">Logout</a></button>
                    </div>
                </div>
          </div>

         <!-- fourth child -->
         <div class="container my-3">
            <?php 
                if(isset($_GET['insert_category'])) {
                    include 'insert_categories.php';
                }
                if(isset($_GET['insert_brand'])) {
                    include 'insert_brands.php';
                }
                if(isset($_GET['view_products'])) {
                    include 'view_products.php';
                }
                if(isset($_GET['edit_products'])) {
                    include 'edit_products.php';
                }
                if(isset($_GET['delete_product'])) {
                    include 'delete_product.php';
                }
                if(isset($_GET['view_categories'])) {
                    include 'view_categories.php';
                }
                if(isset($_GET['view_brands'])) {
                    include 'view_brands.php';
                }
                if(isset($_GET['edit_category'])) {
                    include 'edit_category.php';
                }
                if(isset($_GET['edit_brands'])) {
                    include 'edit_brands.php';
                }
                if(isset($_GET['delete_category'])) {
                    include 'delete_category.php';
                }
                if(isset($_GET['delete_brands'])) {
                    include 'delete_brands.php';
                }
                
                if(isset($_GET['list_orders'])) {
                    include 'list_orders.php';
                }
                if(isset($_GET['list_payments'])) {
                    include 'list_payments.php';
                }
                if(isset($_GET['list_users'])) {
                    include 'list_users.php';
                }
            ?>
         </div>

              
        <!-- <div class="bg-info p-3 text-center footer">
            <p>All rights reserved @ Designed By Soumyadip - 2024</p>
        </div> -->
        <?php 
    include ('../includes/footer.php');
?>
    </div>








<!--Bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>