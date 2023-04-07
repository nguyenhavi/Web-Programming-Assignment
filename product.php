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
    <!--import carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <!--import theme carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <style>
        .carousel-control-next-icon{
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M52.5 440.6c-9.5 7.9-22.8 9.7-34.1 4.4S0 428.4 0 416V96C0 83.6 7.2 72.3 18.4 67s24.5-3.6 34.1 4.4l192 160L256 241V96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V271l-11.5 9.6-192 160z"/></svg>');
        }
        .carousel-control-prev-icon{
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M267.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160L64 241V96c0-17.7-14.3-32-32-32S0 78.3 0 96V416c0 17.7 14.3 32 32 32s32-14.3 32-32V271l11.5 9.6 192 160z"/></svg>');
        }
        .discount{
            background-image: url('./img/discount.png');
        }
    </style>
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="product.php">Product</a>
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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
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

<!--phone-->
<div class="px-5">
    <h4 class="py-2">Top Cell Phones</h4>
    <div>
    <div class="owl-carousel owl-theme">
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/s/2/s23-ultra-tim.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Samsung Galaxy S23 128GB 8GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/p/oppo-reno8t-vang1-thumb-600x600.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>iPhone 14 Plus 128GB 100% Genuine</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#">
                <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/3/_/3_225.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Samsung Galaxy S23 Ultra 12GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/_/g/_global-version_-sm-s911_galaxys23_back_cream_221122.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Xiaomi Redmi Note 11 128GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>               
            </div>
        </div>
    </div>
    <!--end item-->    
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/t/_/t_i_xu_ng_2_18.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>ASUS ROG Phone 6 16GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/n/oneplus_11_-_black_-_rgb.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>OnePlus 11 16GB 256GB 100% Genuine</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->             
    </div>
    </div>
</div>

<!--Laptop-->
<div class="px-5">
    <h4 class="py-2">Top Laptop</h4>
    <div>
    <div class="owl-carousel owl-theme">
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/m/a/macbook_air_m2.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Samsung Galaxy S23 128GB 8GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a> 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/p/oppo-reno8t-vang1-thumb-600x600.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>iPhone 14 Plus 128GB 100% Genuine</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/4/h/4h43.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Samsung Galaxy S23 Ultra 12GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/_/g/_global-version_-sm-s911_galaxys23_back_cream_221122.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Xiaomi Redmi Note 11 128GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->    
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/t/_/t_i_xu_ng_2_18.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>ASUS ROG Phone 6 16GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/n/oneplus_11_-_black_-_rgb.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>OnePlus 11 16GB 256GB 100% Genuine</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->             
    </div>
    </div>
</div>

<!--Mechanic Keyboard-->
<div class="px-5">
    <h4 class="py-2">Top Mechanic Keyboard</h4>
    <div>
    <div class="owl-carousel owl-theme">
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_768/https://akko.vn/wp-content/uploads/2022/05/ban-phim-co-akko-3084b-plus-black-gold-01-768x768.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Bàn phím cơ AKKO 3084B Plus Black & Gold </h5>
                <p style="color: red;">2.099.000VND  </p>
                <a href="#" class="btn btn-primary">Add to Cart</a> 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_768/https://akko.vn/wp-content/uploads/2023/04/ban-phim-akko-3108-rf-black-on-white-001-768x768.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Bàn phím cơ AKKO 3108 RF Black on White</h5>
                <p style="color: red;">1.549.000VND   <strike style="color: grey;">2.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/3/_/3_225.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Samsung Galaxy S23 Ultra 12GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/_/g/_global-version_-sm-s911_galaxys23_back_cream_221122.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Xiaomi Redmi Note 11 128GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->    
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/t/_/t_i_xu_ng_2_18.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>ASUS ROG Phone 6 16GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/n/oneplus_11_-_black_-_rgb.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>OnePlus 11 16GB 256GB 100% Genuine</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->             
    </div>
    </div>
</div>

<!--Headphone-->
<div class="px-5">
    <h4 class="py-2">Top Headphone</h4>
    <div>
    <div class="owl-carousel owl-theme">
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/f/r/frame_7_1.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Tai nghe không dây Samsung Galaxy Buds Live</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a> 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/p/oppo-reno8t-vang1-thumb-600x600.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>iPhone 14 Plus 128GB 100% Genuine</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/f/r/frame_7_1.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Samsung Galaxy S23 Ultra 12GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/_/g/_global-version_-sm-s911_galaxys23_back_cream_221122.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>Xiaomi Redmi Note 11 128GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->    
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/g/r/group_150_1_3.png" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>ASUS ROG Phone 6 16GB 512GB</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border">
            <a href="#"><img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/o/n/oneplus_11_-_black_-_rgb.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h5>OnePlus 11 16GB 256GB 100% Genuine</h5>
                <p style="color: red;">12.999.999VND   <strike style="color: grey;">20.000.000VND</strike></p>
                <a href="#" class="btn btn-primary">Add to Cart</a>                 
            </div>
        </div>
    </div>
    <!--end item-->             
    </div>
    </div>
</div>

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
        <!--jquerry cdn-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>        
    <!--cdn file include-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--init owl carousel-->
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})        
    </script>
</body>
</html>