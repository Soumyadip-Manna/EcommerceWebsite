<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
       <!-- Bootstrap css link -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <style>
        body{
            overflow-x:hidden;
        }
   </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-center">
            <div class="col-lg-6 col-xl-4">
                <img src="../images/box5_image.jpg" alt="admin_registration" class='img-fluid'>
            </div>
            <div class="col-lg-6 col-xl-5">
                <form action="" method="post">
                    <div class="form-outline mb-5">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter Your Name" required="required"class="form-control w-80">
                    </div>
                   
                    <div class="form-outline mb-5">
                        <label for="password" class="form-label">password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your password" required="required"class="form-control w-80">
                    </div>
                   
                    <div><input type="submit" value="Login" class="bg-info border-0 px-3 py-2" name="admin_login"></div>
                    <p class="small fw-bold mt-2 pt-2">don't you have an Account ?  <a href="./admin_registration.php" class="link-danger">Register</a></p>
                </form>
            </div>
        </div>
    </div>
















</body>
</html>