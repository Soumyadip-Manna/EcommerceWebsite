<?php 
include ('../includes/connect.php');
if(isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title'];

    // Select query
    $select_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($con,$select_query);
    $number =mysqli_num_rows($result_select);
    if($number > 0) {
        echo "<script>alert('Brand Already present');</script>";
    }
    else {
        $insert_query = "INSERT INTO `brands`(brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($con,$insert_query);

        if($result) {
            echo "<script>alert('Brand has been inserted Successfully');</script>";
        }
        else {
            die("Brands does not Inserted".mysqli_error($result));
        }

    }
}

?>
<h2 class="text-center">Insert Brands</h2>
<form action="" method ="post">
    <div class="input-group mb-2 w-90">
        <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
        <div class="form-floating">
            <input type="text" class="form-control"  placeholder="Insert Brands" name="brand_title" aria-label="brands">
        </div>
    </div>
    <div class="input-group mb-2 w-10 m-auto">
        <div class="form-floating">
            <input type="submit" class="bg-info p-2 border-0 my-2" value="Insert Brands" name="insert_brand">
        </div>
    </div>
</form>