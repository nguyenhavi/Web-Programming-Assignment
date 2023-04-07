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
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <!-- navbar -->
    <div class="container-flud p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./img/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mechanic Keyboard</a></li>
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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100$</a>
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

<!--login form-->
<div class="container py-5">
  <div class="row g-3">
    <div class="col-sm-4">
      <div class="p-3 border bg-light">
        <h2>New Customer</h2>
        <h5>Register Account</h5>
        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
        <button class="bg-info px-3 py-2 border-0"><a href="register.php" class="nav-link text-light">Continue</a></button>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="p-3 border bg-light">
        <h2>Returning Customer</h2>
        <div class="form-outline py-2">
                <label for="email_addr" class="form-label" style="display: inline;">Email Address</label>
                <input type="text" name="email_addr" id="email_addr" class="form-control" placeholder="Enter your email address" autocomplete="off" required="required">
        </div>    
        <div class="form-outline py-2">
                <label for="password" class="form-label" style="display: inline;">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required">
        </div>
        <div class="py-1">
            <a href="forget_pass.php" style="text-decoration: none;">
            Forgotten Password
            </a>
        </div>
        <div class="py-1">
            <button class="bg-info px-3 py-2 border-0"><a href="register.php" class="nav-link text-light">Login</a></button>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="p-3 border bg-light">
      <div class="list-group">

  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Login</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Register</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Forgotten password</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">My Account</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">My address</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Loved List</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Order History</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Reward Point</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Return Order</a>
</div>  
      </div>
    </div>
  </div>
</div>
<br>
<br>
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