

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookiteer - Food Blog HTML Template</title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="{{asset('public/website/assets/css/plugins/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/website/assets/css/plugins/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/website/assets/css/plugins/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('public/website/assets/css/plugins/slick.css')}}">
  <link rel="stylesheet" href="{{asset('public/website/assets/css/plugins/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('public/website/assets/fonts/flaticon/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('public/website/assets/fonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/website/assets/css/style.css')}}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/website/favicon.ico')}}">

</head>

<body>

  <div id="app">
    <!-- Preloader start -->
  <div class="ct-preloader">
    <div class="ct-preloader-inner">
      <div class="ct-preloader-pan">
        <div class="ct-preloader-pan-inner">
          <div class="ct-preloader-pan-circle"></div>
          <div class="ct-preloader-pan-handle"></div>
        </div>
        <div class="ct-preloader-pancake">
          <div class="ct-preloader-pancake-inner"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader End -->



  <!-- Aside (Mobile Navigation) -->
  <aside class="main-aside">
    <a class="navbar-brand" href="index.html"> <img src="{{asset('public/website/')}}/assets/img/logo.png" alt="logo"> </a>

    <div class="aside-scroll">
      <ul>
        <li class="menu-item menu-item-has-children">
          <a href="#">Home Pages</a>
          <ul class="submenu">
            <li class="menu-item"> <a href="index.html">Home v1</a> </li>
            <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
            <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
            <li class="menu-item"> <a href="home-v4.html">Home v4</a> </li>
            <li class="menu-item"> <a href="home-v5.html">Home v5</a> </li>
          </ul>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="#">Blog</a>
          <ul class="submenu">
            <li class="menu-item menu-item-has-children">
              <a href="blog-grid.html">Blog Archive</a>
              <ul class="submenu">
                <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                <li class="menu-item"> <a href="blog-masonry.html">Masonry</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="blog-single-v1.html">Blog Single</a>
              <ul class="submenu">
                <li class="menu-item"> <a href="blog-single-v1.html">Blog Single v1</a> </li>
                <li class="menu-item"> <a href="blog-single-v2.html">Blog Single v2</a> </li>
                <li class="menu-item"> <a href="blog-single-v3.html">Blog single v3</a> </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="#">Pages</a>
          <ul class="submenu">
            <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
            <li class="menu-item"> <a href="login.html">Login</a> </li>
            <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
            <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
            <li class="menu-item"> <a href="cart.html">Cart</a> </li>
            <li class="menu-item"> <a href="product-details.html">Product Details</a> </li>
          </ul>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="#">Recipes</a>
          <ul class="submenu">
            <li class="menu-item"> <a href="recipe-archive.html">Recipe Archive</a> </li>
            <li class="menu-item"> <a href="recipe-details.html">Recipe Details</a> </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="shop.html">Shop</a>
        </li>
        <li class="menu-item">
          <a href="contact-us.html">Contact Us</a>
        </li>
      </ul>

    </div>

  </aside>
  <div class="aside-overlay aside-trigger"></div>





  <!-- Header Start -->
  <header class="main-header header-4">
    <!-- Top Header Start -->
    <div class="top-header">
      <div class="container">
        <div class="top-header-inner">

          <ul class="social-media">
            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-pinterest-p"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-patreon"></i> </a> </li>
            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
          </ul>

          <ul class="top-header-nav">
            <li> <a href="#">Login</a> </li>
            <li> <a href="#">Register</a> </li>
          </ul>

        </div>
      </div>
    </div>
    <!-- Top Header End -->

    <nav class="navbar">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html"> <img src="{{asset('public/website/')}}/assets/img/logo.png" alt="logo"> </a>
        <!-- Menu -->
        <ul class="navbar-nav">
          <li class="menu-item menu-item-has-children">
            <a href="#">Home Pages</a>
            <ul class="submenu">
              <li class="menu-item"> <a href="index.html">Home v1</a> </li>
              <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
              <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
              <li class="menu-item"> <a href="home-v4.html">Home v4</a> </li>
              <li class="menu-item"> <a href="home-v5.html">Home v5</a> </li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="#">Blog</a>
            <ul class="submenu">
              <li class="menu-item menu-item-has-children">
                <a href="blog-grid.html">Blog Archive</a>
                <ul class="submenu">
                  <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                  <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                  <li class="menu-item"> <a href="blog-masonry.html">Masonry</a> </li>
                </ul>
              </li>
              <li class="menu-item menu-item-has-children">
                <a href="blog-single-v1.html">Blog Single</a>
                <ul class="submenu">
                  <li class="menu-item"> <a href="blog-single-v1.html">Blog Single v1</a> </li>
                  <li class="menu-item"> <a href="blog-single-v2.html">Blog Single v2</a> </li>
                  <li class="menu-item"> <a href="blog-single-v3.html">Blog single v3</a> </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="#">Pages</a>
            <ul class="submenu">
              <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
              <li class="menu-item"> <a href="login.html">Login</a> </li>
              <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
              <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
              <li class="menu-item"> <a href="cart.html">Cart</a> </li>
              <li class="menu-item"> <a href="product-details.html">Product Details</a> </li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="#">Recipes</a>
            <ul class="submenu">
              <li class="menu-item"> <a href="recipe-archive.html">Recipe Archive</a> </li>
              <li class="menu-item"> <a href="recipe-details.html">Recipe Details</a> </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="shop.html">Shop</a>
          </li>
          <li class="menu-item">
            <a href="contact-us.html">Contact Us</a>
          </li>
        </ul>

        <div class="header-controls">
          <ul class="header-controls-inner">
            <li class="cart-dropdown-wrapper cart-trigger">
              <i class="flaticon-shopping-basket"></i>
              <ul class="cart-dropdown">
                <li class="cart-item">
                  <img src="{{asset('public/website/')}}/assets/img/products/1.png" alt="product">
                  <div class="cart-item-body">
                    <a href="#">Red Tea Pot With Black Handles</a>
                    <span class="custom-secondary">2x 18.00$</span>
                  </div>
                </li>
                <li class="cart-item">
                  <img src="{{asset('public/website/')}}/assets/img/products/2.png" alt="product">
                  <div class="cart-item-body">
                    <a href="#">Oak Wood Cutting Board</a>
                    <span class="custom-secondary">1x 24.25$</span>
                  </div>
                </li>
                <li class="cart-subtotal">
                  <p> <strong>Subtotal: </strong> 54.25$</p>
                </li>
                <li class="cart-buttons">
                  <a href="checkout.html" class="btn-custom primary btn-sm shadow-none">Checkout</a>
                  <a href="cart.html" class="btn-custom secondary btn-sm shadow-none">View Cart</a>
                </li>
              </ul>
            </li>
            <li class="search-dropdown-wrapper search-trigger">
              <i class="flaticon-magnifying-glass"></i>
            </li>
          </ul>
          <!-- Toggler -->
          <div class="aside-toggler aside-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

      </div>
    </nav>

    <!-- Search Form Start-->
    <div class="search-form-wrapper">
      <div class="search-trigger close-btn">
        <span></span>
        <span></span>
      </div>
      <form class="search-form" method="post">
        <input type="text" placeholder="Search..." value="">
        <button type="submit" class="search-btn">
          <i class="flaticon-magnifying-glass"></i>
        </button>
      </form>
    </div>
    <!-- Search Form End-->

  </header>
  <!-- Header End -->


  <website-component></website-component>
  </div>

  <!-- Vendor Scripts -->
  <script src="{{asset('public/website/assets/js/plugins/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/popper.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/waypoint.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/jquery.slimScroll.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/imagesloaded.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/jquery.steps.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/website/assets/js/plugins/slick.min.js')}}"></script>

  <!-- Cookiteer Scripts -->
  <script src="{{asset('public/website/assets/js/main.js')}}"></script>
    <script src="{{asset('public/js/app.js')}}"></script>

</body>

</html>
