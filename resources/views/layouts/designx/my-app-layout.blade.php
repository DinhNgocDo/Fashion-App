<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="/themes/shopper_fashion/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/themes/shopper_fashion/css/bootstrap.min.css">
    <link rel="stylesheet" href="/themes/shopper_fashion/css/magnific-popup.css">
    <link rel="stylesheet" href="/themes/shopper_fashion/css/jquery-ui.css">
    <link rel="stylesheet" href="/themes/shopper_fashion/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/themes/shopper_fashion/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="/themes/shopper_fashion/css/aos.css">

    <link rel="stylesheet" href="/themes/shopper_fashion/css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="{{ route('shopper.home') }}" class="js-logo-clone">Shoppers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="{{ route('order.list') }}" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">{{ showCartQuantity() }}</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0">
                    <a href="#" class="site-menu-toggle js-menu-toggle">
                      <span class="icon-menu"></span>
                    </a>
                  </li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="has-children active">
              <a href="{{ route('shopper.home') }}">Home</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-children">
              <a href="{{ route('shopper.about') }}">About</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="{{ route('shopper.shop') }}">Shop</a>
              <ul class="dropdown">
                <li><a href="#">Hoodies & Jackets</a></li>
                <li><a href="#">Suits</a></li>
                <li><a href="#">Pant</a></li>
                <li><a href="#">Dresses</a></li>
                <li><a href="#">Skirts</a></li>
                <li><a href="#">Shoes</a></li>
                <li><a href="#">Bags</a></li>
                <li><a href="#">Sports</a></li>
              </ul>
            </li>
            <li class="has-children">
              <a href="#">Catalogue</a>
              <ul class="dropdown">
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
              </ul>
            </li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="{{ route('shopper.contact') }}">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

        {{ $slot }}

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="/themes/shopper_fashion/images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
              <p>Promo from  nuary 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">B15 Dai Kim, Hoang Mai, Ha Noi</li>
                <li class="phone"><a href="tel://23923929210">+085 463 9588</a></li>
                <li class="email">canhkhang836@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="/themes/shopper_fashion/js/jquery-3.3.1.min.js"></script>
  <script src="/themes/shopper_fashion/js/jquery-ui.js"></script>
  <script src="/themes/shopper_fashion/js/popper.min.js"></script>
  <script src="/themes/shopper_fashion/js/bootstrap.min.js"></script>
  <script src="/themes/shopper_fashion/js/owl.carousel.min.js"></script>
  <script src="/themes/shopper_fashion/js/jquery.magnific-popup.min.js"></script>
  <script src="/themes/shopper_fashion/js/aos.js"></script>
  <script src="/themes/shopper_fashion/js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      Object.size = function(obj) {
        var size = 0,
          key;
        for (key in obj) {
          if (obj.hasOwnProperty(key)) size++;
        }
        return size;
      };
    });
  </script>

  @yield('script')
  </body>
</html>