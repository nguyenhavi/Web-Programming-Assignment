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
          <a class="nav-link" href="product.php">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./category/mechanickeyboard.php">Mechanic Keyboard</a></li>
            <li><a class="dropdown-item" href="./category/laptop.php">Laptop</a></li>
            <li><a class="dropdown-item" href="./category/smartphone.php">Smart Phone</a></li>
          </ul>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brand
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./brand/apple.php">Apple</a></li>
            <li><a class="dropdown-item" href="./brand/akko.php">Akko</a></li>
            <li><a class="dropdown-item" href="./brand/samsung.php">Samsung</a></li>
          </ul>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
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

<!--Swiper child-->
<div id="carouselExampleControls" class="carousel slide p-5" data-bs-ride="carousel"> 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/msmarvel.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/iron.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/moon_knight.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--feature-->
<div class="px-5">
  <p style="font-size: 30px;">Best Seller</p>
</div>

<!--fourth child-->
<div class="row">
  <div class="col-md-12 px-5">
    <!-- product -->
    <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./img/keyboard2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="product_details.php" class="btn btn-secondary">View more</a>
  </div>
</div>        
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./img/keyboard1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>        
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./img/keyboard3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>        
      </div>    
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./img/keyboard3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>        
      </div>      

      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./img/keyboard3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>        
      </div>        

      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./img/keyboard3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
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