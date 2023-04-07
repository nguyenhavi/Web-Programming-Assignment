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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./category/mechanickeyboard.php">Mechanic Keyboard</a></li>
            <li><a class="dropdown-item" href="../category/laptop.php">Laptop</a></li>
            <li><a class="dropdown-item" href="../category/smartphone.php">Smart Phone</a></li>
            <li><a class="dropdown-item" href="../category/tablet.php">Tablet</a></li>
            <li><a class="dropdown-item" href="../category/headphone.php">Headphone</a></li>
          </ul>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brand
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../brand/apple.php">Apple</a></li>
            <li><a class="dropdown-item" href="../brand/akko.php">Akko</a></li>
            <li><a class="dropdown-item" href="../brand/samsung.php">Samsung</a></li>
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
      <a class="nav-link" href="../login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../register.php">Register</a>
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
  <p style="font-size: 30px;">Akko <i class="fa-solid fa-keyboard"></i></p>
</div>

<!--Product-->
<div class="row">
  <div class="col-md-12 px-5">
    <!-- product -->
    <div class="row">
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_400/https://akko.vn/wp-content/uploads/2023/04/ban-phim-AKKO-5108S-honkai-impact-3rd-Stygian-Nymph-001-400x400.png" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">AKKO 5108S Honkai Impact 3rd - Stygian Nymph</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="../category/mechanickeyboard.php">Mechanical Keyboard</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 3.090.000VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_247/https://akko.vn/wp-content/uploads/2020/08/benghuai3_800_ava-247x247.jpg" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Samsung Galaxy S23 8GB 256GB</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="#">Smart Phone</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 11.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_247/https://akko.vn/wp-content/uploads/2020/08/bh3_bcy_800_06-247x247.jpg" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Smart Phone Pro Mechanical Keyboard</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="#">Smart Phone</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_400/https://akko.vn/wp-content/uploads/2023/04/ban-phim-co-akko-3098b-multi-modes-blue-on-white-001-400x400.jpg" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Samsung Galaxy Tab S8 WIFI</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="../category/tablet.php">Tablet</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 8.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>    

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_768/https://akko.vn/wp-content/uploads/2023/04/ban-phim-akko-3108-rf-white-on-black-001-768x768.jpg" class="card-img-top" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Bàn phím cơ AKKO 3108 RF White on Black</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="../category/mechanickeyboard.php">Mechanical Keyboard</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 2.799.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>       

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_300/https://akko.vn/wp-content/uploads/2019/09/ying1-300x300.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Samsung Galaxy S23 Ultra 256GB</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="../category/smartphone.php">Smart Phone</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 15.690.000VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_300/https://akko.vn/wp-content/uploads/2020/06/10676-300x300.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Tai nghe Bluetooth Apple AirPods 3 MagSafe</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="#">Headphone</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>

      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_300/https://akko.vn/wp-content/uploads/2020/03/10226-300x300.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">MacBook Pro 16 inch M2 Max 2023 (12 CPU - 38 GPU - 32GB - 1TB)</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="#">Smart Phone</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 199.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>
      
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_300/https://akko.vn/wp-content/uploads/2020/03/10348-300x300.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Corsair K70 RGB TKL Champion</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="#">Smart Phone</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
            </div>
        </div>        
      </div>
      
      <div class="col-md-4 mb-2">
        <div class="card" style="height: 410px;">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_300/https://akko.vn/wp-content/uploads/2020/06/10682-300x300.jpg" class="card-img-top float-start" alt="..." width="250px" height="200px" style="transition: transform .2s;">
            <div class="card-body">
                <h5 class="card-title">Corsair K70 RGB TKL Champion</h5>
                <p class="card-text" style="position: absolute; top: 66%; left: 5%;">Category: <a href="#">Smart Phone</a></p>
                <p class="card-text" style="position: absolute; top: 76%; left: 5%;">Price: 1.999.999VND</p>
                <a href="#" class="btn btn-info" style="position: absolute; top: 86%; left: 5%;">Add to cart</a>
                <a href="../product_details.php" class="btn btn-secondary" style="position: absolute; top: 86%; left: 35%;">View more</a>
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
    <!---samsung icon-->
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>