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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mechanic Keyboard</a></li>
            <li><a class="dropdown-item" href="#">Macbook</a></li>
            <li><a class="dropdown-item" href="#">Smart Phone</a></li>
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
          <a class="nav-link active" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>2</sup></a>
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

<!--Cart-->
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - 2 items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://image.cellphones.com.vn/200x/media/catalog/product/i/p/iphone11-black-select-2019_4.png"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Laptop Dell Vostro 5620 70282719</strong></p>
                <p>Category: <a href="./category/laptop.php">Laptop</a></p>
                <p>Brand: <a href="#">Dell</a></p>
                <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list">
                  <i class="fas fa-heart"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-primary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                </div>

                  <button class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>23.000.000VND</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/_/0/_0004_46251_vostro_3510_black_ha3.jpg"
                    class="w-100" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>iPhone 11 128GB Đen</strong></p>
                <p>Category: <a href="./category/smartphone.php">Smart Phone</a></p>
                <p>Brand: <a href="./brand/apple.php">Apple</a></p>

                <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list">
                  <i class="fas fa-heart"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button class="btn btn-primary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                </div>

                  <button class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>6.523.000VND</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2069 - 14.10.2070</p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px" height="30px"
              src="data:image/jpeg;base64,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"
              alt="American Express" />
            <img class="me-2" width="45px" height="30px"
              src="data:image/jpeg;base64,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aDsHq6On93C8U01HFbLZQNoLc2bumWPnXTTVE+MB8srtuzoG38MDNncy6dXpr2e/ffS3Vbr8D2aM26y11NpE+6ERshhomRVJzrUrpnvZzjejfq56upfmssnwZZbo6sp2i4U9+hpWVADsPpXU7Xgxk7NV2c//AKFzKO4ikt99oTDr/CkVLHrl2BEIZC8ktxtzniF6qjSCrq7HT2aoZzhp6mKSKpc/4/Mxtc1sTm42kZ2HO71nDUriVOv021F+zdfsrf2x0NGLbT1lBfaj4KpLjWU9TRxU8dZLzUbWPbl+HnYOK52kELqeqggfaaK2PbAHmOhnE7ZA9xw57gcZGCNyWm7W6iornQV9ufW09dNTzuDKl1OWmEYAJYM8DvXkuM9onfCbbbn0LGscJWvqZKgyOJyDl+7Cyk9q5mEKixDck7curd3+h07VbKK+W59DSNigv1LNz7JJHEMraWR4a7Xz0x56OA+ls8d8bZ4aqKitbA6Khi7mnqskurahp+PKejGdgx+WF87NchaLlBcOZ57mo6iPm9fUzzsZZnWwd3YucspO52hSmqzk29nl3vf9O8IiLclhERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEU4TCAhFOEwgIRThMICEU4TCAhFOEwgIRThMICEU4TCAhFOEwgIRThMICEU4TCAhFOEwgIRThMICEU4TCAhFOEwgIRThEB/9k="
              alt="American Express" />
            <img class="me-2" width="45px" height="30px"
              src="data:image/jpeg;base64,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"
              alt="Mastercard" />
            <img class="me-2" width="45px" height="30px"
              src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAD4AbEDASIAAhEBAxEB/8QAGwABAAMBAQEBAAAAAAAAAAAAAAUGBwQBAwL/xABKEAABAwMBAwYJCQYEBQUAAAABAAIDBAURIQYSMRMWQVFxgSI1VGGRk6Gy0RQyM0Jyc7GzwRUjNFJidFNVgpIkQ2Oi8DZElNLh/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAQFAgMGBwH/xAA2EQACAgEBBAQMBwEBAAAAAAAAAQIDBBEFEiExE0FRgQYUIjM0UmFxobHR8BUyU3KCkcEj4f/aAAwDAQACEQMRAD8A1xERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREARF4SGjJIA6yQB7UC4nq8yfMuaSvt0OeVrKZmOIdMzPDPDOVwybR7PRg71dG49UbZHE/7W4WDnGPNo3wx7rPyQb7mS69Vbk2vsrc8m2qk+zG1o9LiuOXbWLXkre89Rlla3Pc0Fank1LnImQ2Tm2cq338PmW/KehUSTbO5u+ipqWMdG9yjz+gXHJtTtBITiojiH/TiYPa7JWp5tS7SbDwdzJc9F3/AENHXjnNaMuIAHS7AHpKyyW8XqbIkr6og9Tywa9W7hcj5p5Ml80r88d97nZ9K1PaEepE2Hgxa/zzXctfoarJcLbDnla2lZj+aaPPoyuKTaPZ6POa5jiNMRskefY3HtWZ6L1annyfJIm1+DFS/PY3/SL/ACbY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"
              alt="PayPal acceptance mark" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span>100.999.999VND</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Shopee Express</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>59.999.999VND</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-primary btn-lg btn-block">
              Go to checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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