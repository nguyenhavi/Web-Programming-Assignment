<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Webiste using PHP and MySQL</title>
    <!-- bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link-->
    <link rel="stylesheet" href="../style.css"> 
    <style>
        img:hover {
            transform: scale(1.1);
        }       
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-flud p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="../img/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../product.php">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./category/mechanickeyboard.php">Mechanic Keyboard</a></li>
            <li><a class="dropdown-item" href="#">Macbook</a></li>
            <li><a class="dropdown-item" href="#">Samsung Galaxy</a></li>
          </ul>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brand
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Apple</a></li>
            <li><a class="dropdown-item" href="#">Akko</a></li>
            <li><a class="dropdown-item" href="#">Tencent</a></li>
          </ul>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>                            
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
    </li>    
  </ul>
</nav>

<!--Third child-->
<div class="bg-light">
  <h3 class="text-center">HCMUT Store</h3>
  <p class="text-center">Good keyboard make good experience when typing</p>
</div>

<!--feature-->
<div class="px-5">
  <p style="font-size: 30px;">Mechanic Keyboard</p>
</div>

<!--Product-->
<div class="row">
  <div class="col-md-12 px-5">
    <!-- product -->
    <div class="row">
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://img.my-best.vn/product_images/511482e67351be2e23e21192cd92272f.png?ixlib=rails-4.3.1&q=70&lossless=0&w=640&h=640&fit=clip&s=040539478be4b9caba87fc30dd6d1633" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Apex Pro Mechanical Keyboard</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Akko</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_400/https://akko.vn/wp-content/uploads/2022/02/ban-phim-akko-pc75_blacksilver_avatar-400x400.png" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Apex Pro Mechanical Keyboard</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://img.my-best.vn/product_images/511482e67351be2e23e21192cd92272f.png?ixlib=rails-4.3.1&q=70&lossless=0&w=640&h=640&fit=clip&s=040539478be4b9caba87fc30dd6d1633" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Apex Pro Mechanical Keyboard</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://img.my-best.vn/product_images/511482e67351be2e23e21192cd92272f.png?ixlib=rails-4.3.1&q=70&lossless=0&w=640&h=640&fit=clip&s=040539478be4b9caba87fc30dd6d1633" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Apex Pro Mechanical Keyboard</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Logitech</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>    

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_400/https://akko.vn/wp-content/uploads/2022/01/ban-phim-akko-pc75b-plus-year-of-tiger-akkovn-400x400.jpg" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Akko 5087B Multi-modes Dracula Castle</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 2.799.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>       

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_800/https://akko.vn/wp-content/uploads/2021/12/ban-phim-co-akko-3098n-multi-modes-world-tour-london-ava.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Corsair K70 RGB TKL Champion</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_800/https://akko.vn/wp-content/uploads/2021/12/ban-phim-co-akko-3098n-multi-modes-world-tour-london-ava.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Corsair K70 RGB TKL Champion</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_800/https://akko.vn/wp-content/uploads/2021/12/ban-phim-co-akko-3098n-multi-modes-world-tour-london-ava.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Corsair K70 RGB TKL Champion</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>
      
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_800/https://akko.vn/wp-content/uploads/2021/12/ban-phim-co-akko-3098n-multi-modes-world-tour-london-ava.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Corsair K70 RGB TKL Champion</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>
      
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_800/https://akko.vn/wp-content/uploads/2021/12/ban-phim-co-akko-3098n-multi-modes-world-tour-london-ava.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Corsair K70 RGB TKL Champion</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Brand: <a href="#">Apex</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>      

    </div>
  </div>
</div>



<br>
<br>

<!--Footer-->
<div class="bg-dark p-5" style="font-size: 12px; color:white">
  <div class="row">
    <div class="col-sm-3">
      <h5>Information</h5>
      <ul class="list-unstyled">
        <li><a href="#" style="text-decoration: none; color:whitesmoke">About Us</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Delivery Information</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Privacy Policy</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Terms & Conditions</a></li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h5>Customer Service</h5>
      <ul class="list-unstyled">
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Contact Us</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Returns</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Site Map</a></li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h5>Extras</h5>
      <ul class="list-unstyled">
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Brands</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Gift Certificates</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Affiliate</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Specials</a></li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h5>My Account</h5>
      <ul class="list-unstyled">
        <li><a href="#" style="text-decoration: none; color:whitesmoke">My Account</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Order history</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Love Item List</a></li>
        <li><a href="#" style="text-decoration: none; color:whitesmoke">Newsletter</a></li>
      </ul>
    </div>            
  </div>
  <hr>
  <p>This web is implement by Group <br>
    HCMUT Copyright</p>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>