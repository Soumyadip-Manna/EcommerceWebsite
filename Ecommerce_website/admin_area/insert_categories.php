<?php 
include ('../includes/connect.php');
if(isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    // Select query
    $select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title'";
    $result_select = mysqli_query($con,$select_query);
    $number =mysqli_num_rows($result_select);
    if($number > 0) {
        echo "<script>alert('Category Already present');</script>";
    }
    else {
        $insert_query = "INSERT INTO `categories`(category_title) VALUES ('$category_title')";
        $result = mysqli_query($con,$insert_query);

        if($result) {
            echo "<script>alert('Category has been inserted Successfully');</script>";
        }
        else {
            die("Categories does not Inserted".mysqli_error($result));
        }

    }
}

?>
<h2 class="text-center">Insert Categories</h2>
<form action="" method ="post">
    <div class="input-group mb-2 w-90">
        <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
        <div class="form-floating">
            <input type="text" class="form-control"  placeholder="Insert Categories" name="cat_title" aria-label="categories">
        </div>
    </div>
    <div class="input-group mb-2 w-10 m-auto">
        <div class="form-floating">
            <input type="submit" class="bg-info p-2 border-0 my-2" value="Insert Categories" name="insert_cat">
            <!-- <button class="bg-info p-2 border-0 my-2">Insert Categories</button> -->
        </div>
    </div>
</form>
