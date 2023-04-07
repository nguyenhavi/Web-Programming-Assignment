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
    <!--js bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
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
        .rating{
          transition: all 0.2 ease;
        }    
        input:not(:checked) ~ label:hover ~,
        input:not(:checked) ~ label:hover ~ label
        {
          display: none;
        }
        input:not(:checked) ~ label:hover ~ label ~ .fa-regular{
          display: inline-block;
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
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
  </ul>
</nav>

<!--Third child-->
<div class="bg-light">
  <h3 class="text-center">HCMUT Store</h3>
  <p class="text-center">Good keyboard make good experience when typing</p>
</div>

<!--main content-->
<div class="row px-5 py-3">
    <div class="col-sm-8">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active">1</button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1">2</button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2">3</button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner" style="border-style:ridge;">
    <div class="carousel-item active p-2">
    <div class="d-flex justify-content-center">
        <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/3/_/3_175.png" alt="img.png" style="height:300px;">
    </div>        
    </div>
    <div class="carousel-item p-2">
    <div class="d-flex justify-content-center">
        <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/7/_/7_97.png" alt="img.png" style="height:300px;">
    </div>  
    </div>
    <div class="carousel-item p-2">
    <div class="d-flex justify-content-center">
        <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/4/_/4_168.png" alt="img.png" style="height:300px;">
    </div>  
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!--Tab description-->
<div class="p-2">
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="#description" class="nav-link active" data-bs-toggle="tab">Description</a>
    </li>
    <li class="nav-item">
        <a href="#review" class="nav-link" data-bs-toggle="tab">Review(10)</a>
    </li>
</ul>
<div class="tab-content px-1 py-4">
    <div class="tab-pane fade show active" id="description">
        <div style="font-size: 15px;">
        <p>- This is a description about item</p>
        <p>- This is a description about item</p>
        <p>- This is a description about item</p>
        <p>- This is a description about item</p>
        <p>- This is a description about item</p>
        <p>- This is a description about item</p>
        </div>    
    </div>
    <div class="tab-pane fade" id="review">
      <!--box review-->
      <div class="container overflow-hidden">
        <div class="row">
          <div class="col-sm-3">
            <div class="p-2 bg-light" style="text-align: center;">
              <div><h5>4.8/5</h5></div>
              <div>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              </div>
              <div class="">
              <p>7 Rating and Comment</p>
              </div>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="p-3 bg-light">
              <div class="row">
                <div class="col-sm-2"><p style="display: inline;">5 </p><i class="fa-solid fa-star"></i> </div>
                <div class="col-sm-8 py-1">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div> 
                <div class="col-sm-2">
                  <p>5 Rating</p>
                </div>              
              </div>
              <!--end rating 5start-->
              <div class="row">
                <div class="col-sm-2"><p style="display: inline;">4 </p><i class="fa-solid fa-star"></i> </div>
                <div class="col-sm-8 py-1">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div> 
                <div class="col-sm-2">
                  <p>2 Rating</p>
                </div>              
              </div>
              <!--end rating 4start-->
              <div class="row">
                <div class="col-sm-2"><p style="display: inline;">3 </p><i class="fa-solid fa-star"></i> </div>
                <div class="col-sm-8 py-1">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div> 
                <div class="col-sm-2">
                  <p>0 Rating</p>
                </div>              
              </div>
              <!--end rating 3start-->                            
              <div class="row">
                <div class="col-sm-2"><p style="display: inline;">2 </p><i class="fa-solid fa-star"></i> </div>
                <div class="col-sm-8 py-1">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div> 
                <div class="col-sm-2">
                  <p>0 Rating</p>
                </div>              
              </div>
              <!--end rating 2start-->
              <div class="row">
                <div class="col-sm-2"><p style="display: inline;">1 </p><i class="fa-solid fa-star"></i> </div>
                <div class="col-sm-8 py-1">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div> 
                <div class="col-sm-2">
                  <p>0 Rating</p>
                </div>              
              </div>
              <!--end rating 1start-->                            
            </div>
          </div>
        </div>
        <!--comment-->
        <div class="container p-2 bg-light my-2">
          <h4>Comment</h4>
          <!--start one comment-->
          <div class = "container py-2" id="one-comment">
            <img src="./img/moon_knight.jpg" class="img-thumbnail" alt="..." style="width: 40px; height:40px;">
            <p style="display:inline;">Alexander Diangle</p>
            <div class="container bg-secondary p-2 my-2 rounded">
              <b>Rating: </b>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>              
              <br>
              <b>Comment: </b> <p style="display: inline;">This is the most stupid thing in the world! You may want to throw it into the rubbish and ...</p>
            </div>
          </div>
          <!--end one comment-->
          <!--start one comment-->
          <div class = "container py-2" id="one-comment">
            <img src="./img/iron.jpg" class="img-thumbnail" alt="..." style="width: 40px; height:40px;">
            <p style="display:inline;">Robert Downey Jr</p>
            <div class="container bg-secondary p-2 my-2 rounded">
              <b>Rating: </b>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>              
              <br>
              <b>Comment: </b> <p style="display: inline;">Use the scaling classes for larger or smaller rounded corners. Sizes range from 0 to 3, and can be configured by modifying the utilities API.</p>
            </div>
          </div>
          <!--end one comment-->
          <!--start one comment-->
          <div class = "container py-2" id="one-comment">
            <img src="./img/msmarvel.jpg" class="img-thumbnail" alt="..." style="width: 40px; height:40px;">
            <p style="display:inline;">Isabella</p>
            <div class="container bg-secondary p-2 my-2 rounded">
              <b>Rating: </b>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>              
              <br>
              <b>Comment: </b> <p style="display: inline;">This is the most stupid thing in the world! You may want to throw it into the rubbish and ...</p>
            </div>
          </div>
          <!--end one comment-->                    
        </div>
        <!--end comment--->
        <!--start your review-->
        <div class="container p-2 bg-light my-2">
          <h4>Your Review</h4>
          <img src="./img/shiba.jpg" class="img-thumbnail" alt="..." style="width: 40px; height:40px;"> <p style="display: inline;">Shiba</p>
          <div class="mb-3">
            <textarea class="form-control my-2" id="exampleFormControlTextarea1" rows="3" placeholder="Write your comment about our product here"></textarea>
          </div>
          <!---->
          <div class="container">
            <div class="rating">
    <h5 style="display: inline;">Rating</h5>
    <input type="radio" name="rating" value="4" id="4" style="display: none;" class="fa-solid fa-star"><label for="4"><i class="fa-solid fa-star"></i></label>
    <input type="radio" name="rating" value="3" id="3" style="display: none;"><label for="3"><i class="fa-solid fa-star"></i></label>
    <input type="radio" name="rating" value="2" id="2" style="display: none;"><label for="2"><i class="fa-solid fa-star"></i></label>
    <input type="radio" name="rating" value="1" id="1" style="display: none;"><label for="1"><i class="fa-solid fa-star"></i></label>
    <input type="radio" name="rating" value="5" id="5" style="display: none;"><label for="5"><i class="fa-solid fa-star"></i></label>
  </div>
</div>       

<!---->
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="button">Submit</button>
          </div>
        </div>        
        <!--end your review-->
      </div>
      <!---->
    </div>
</div>
</div>



<!---right content---->
    </div>
        <div class="col-sm-4">
            <div class="btn btn-primary btn-sm">
            <i class="fa-sharp fa-regular fa-heart"></i>
            </div>
            <div class="py-1">
                <h2>Laptop ASUS Vivobook A512-3690Q</h2>
            </div>
            <div class="">
                <p style="font-size: 15px;">Brand: <a href="#">ASUS</a></p>
            </div>
            <div class="">
                <p style="font-size: 15px;">Category: <a href="#">Laptop</a></p>
            </div>
            <div class="">
                <p style="font-size: 15px;">Product keyword: abcpo1</a></p>
            </div> 
            <div class="">
                <p style="font-size: 15px;">Availability: Out of stock</p>
            </div> 
            <div class="">
                <h4>29.999.999VND</h4>
            </div>      
            <div class="form-outline py-2">
                <label for="product_keywords" class="form-label" style="display: inline;">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity you want to purchase" autocomplete="off" required="required">
            </div>  
            <div class="form-outline py-2">
                <input type="submit" name="insert_product" class="btn btn-info w-100" value="Add to Cart">
            </div>                                                               
        </div>
</div>

<!--Related product-->
<div class="p-5">
    <h4>Related Products</h4>
    <div>
    <div class="owl-carousel owl-theme">
    <div class="item mb-4">
        <div class="card border-0">
            <a href="#"><img src="./img/keyboard1.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h4>SteelSeries Apex Pro</h4>
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border-0">
            <a href="#"><img src="./img/keyboard1.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h4>Razer Huntsman Mini</h4>
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border-0">
            <a href="#"><img src="./img/keyboard2.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h4>Razer BlackWidow Elite</h4>
            </div>
        </div>
    </div>
    <!--end item-->
    <div class="item mb-4">
        <div class="card border-0">
            <a href="#"><img src="./img/keyboard3.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h4>Razer BlackWidow V3 Pro</h4>
            </div>
        </div>
    </div>
    <!--end item-->    
    <div class="item mb-4">
        <div class="card border-0">
            <a href="#"><img src="./img/keyboard3.jpg" alt="" class="card-img-top"></a>
            <div class="card-body">
                <h4>Razer BlackWidow V3 Pro</h4>
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