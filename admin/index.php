<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
  <!-- bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">    
    <!-- font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <!--css file-->
    <link rel="stylesheet" href="../style.css">
    <style>
.admin-image{
    width: 100px;
    object-fit: contain;
}
    </style>

</head>
<body>
    <!--navbar-->
    <div class="container-flud p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guests</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#">
                        <img src="../img/shiba.jpg" alt="" class="admin-image">
                    </a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="bg-info p-1 my-3 border-0"><a href="insert_product.php" class="nav-link text-light">Insert Products</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?view_product" class="nav-link text-light">View Products</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?insert_category" class="nav-link text-light">Insert Categories</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?view_category" class="nav-link text-light">View Categories</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?insert_brand" class="nav-link text-light">Insert Brands</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?view_brand" class="nav-link text-light">View Brands</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?all_order" class="nav-link text-light">All orders</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?all_payment" class="nav-link text-light">All payment</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="index.php?list_user" class="nav-link text-light">List users</a></button>
                    <button class="bg-info p-1 my-3 border-0"><a href="" class="nav-link text-light">Logout</a></button>
                </div>
            </div>
        </div>

        <!--four child-->
        <div class="container my-5">
            <?php
                if(isset($_GET['insert_category'])){
                    include('insert_categories.php');
                }
                if(isset($_GET['insert_brand'])){
                    include('insert_brands.php');
                }    
                if(isset($_GET['view_category'])){
                    include('view_categories.php');
                }                    
                if(isset($_GET['view_brand'])){
                    include('view_brands.php');
                }                 
            ?>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>