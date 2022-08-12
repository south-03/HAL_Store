<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>HAL Store</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('libs/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('libs/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('libs/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body >

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Laptop product
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% Gaming Gear
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! PC components
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Apple
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% Display
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT20
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Accessories
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                            <option>¥ JPY</option>
                            <option>$ USD</option>
                            <option>€ EUR</option>
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                    </div>
                        <!-- Authentication Links -->

                        @guest
                            <div class="our-link">
                                @if (Route::has('login'))
                                <ul>
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                </ul>
                            </div>
                            @endif

                            @if (Route::has('register'))
                            <div class="our-link">
                                <ul>
                                    <li>
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                </ul>
                            </div>
                            @endif
                            </div>
                        @else
                        <div class="our-link">
                            <ul>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" style="color: black; margin: 5px 0px" href="{{ url('/home') }}">Home
                                        </a>
                                           
                                        
                                        <a class="dropdown-item" style="color: black" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @endguest

                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{url('')}}"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="{{url('')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About Us</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="{{url('collections')}}" class="nav-link dropdown-toggle">Product</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('service')}}">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contactUs')}}">Contact Us</a></li>
                    </ul>
                </div>

            </div>

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->


    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> HAL Store</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.html">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> HAL Store</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.html">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> HAL Store</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.html">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="width: 352px; height: 352px;" src="images/t-shirts-img.jpg"
                            alt="" />
                        <a class="btn hvr-hover" href="{{url('collections')}}">Laptop</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="width: 352px; height: 352px;" src="images/shirt-img.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{url('collections')}}">PC</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="width: 352px; height: 352px;" src="images/wallet-img.jpg"
                            alt="" />
                        <a class="btn hvr-hover" href="{{url('collections')}}">Monitor</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="width: 352px; height: 352px;" src="images/women-bag-img.jpg"
                            alt="" />
                        <a class="btn hvr-hover " href="{{url('collections')}}">Gear</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="width: 352px; height: 352px;" src="images/shoes-img.jpg" alt="" />
                        <a class="btn hvr-hover" href="{{url('collections')}}">Apple</a>
                    </div>
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="width: 352px; height: 352px;" src="images/women-shoes-img.jpg"
                            alt="" />
                        <a class="btn hvr-hover" href="{{url('collections')}}">Chair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container col-m-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>


            <div class="row special-list">


                    <div class="col-sm-4 col-xs-12 special-grid padding-none col-fix20">
                        <div class="products-single fix">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="why-text">
                                <div class="card-body">
                                    <h4></h4>
                                    <h5> $7.79</h5>
                                    <a class="cart btn btn-block btn-danger mt-2" href="#">Add to Cart</a>
                                </div>

                            </div>
                        </div>
                    </div>

                <div class="col-sm-4 col-xs-12 special-grid padding-none col-fix20">
                    <div class="products-single fix">
                        <div class="type-lb">
                            <p class="new">New</p>
                        </div>
                        <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <div class="card-body">
                                <h4>amet</h4>
                                <h5> $7.79</h5>
                                <a class="cart btn btn-block btn-danger mt-2" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 special-grid padding-none col-fix20">
                    <div class="products-single fix">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <div class="card-body">
                                <h4>amet</h4>
                                <h5> $7.79</h5>
                                <a class="cart btn btn-block btn-danger mt-2" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 special-grid padding-none col-fix20">
                    <div class="products-single fix">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <div class="card-body">
                                <h4>amet</h4>
                                <h5> $7.79</h5>
                                <a class="cart btn btn-block btn-danger mt-2" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 special-grid padding-none col-fix20">
                    <div class="products-single fix">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <div class="card-body">
                                <h4>amet</h4>
                                <h5> $7.79</h5>
                                <a class="cart btn btn-block btn-danger mt-2" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 special-grid padding-none col-fix20">
                    <div class="products-single fix">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <div class="card-body">
                                <h4>amet</h4>
                                <h5> $7.79</h5>
                                <a class="cart btn btn-block btn-danger mt-2" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>HAL Store</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston
                                        Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705
                                            770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a
                                            href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{url('libs/js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- ALL PLUGINS -->
    <script src="{{url('libs/js/jquery.superslides.min.js')}}"></script>
    <script src="{{url('libs/js/bootstrap-select.js')}}"></script>
    <script src="{{url('libs/js/inewsticker.js')}}"></script>
    <script src="{{url('libs/js/bootsnav.js.')}}"></script>
    <script src="{{url('libs/js/images-loded.min.js')}}"></script>
    <script src="{{url('libs/js/isotope.min.js')}}"></script>
    <script src="{{url('libs/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('libs/js/baguetteBox.min.js')}}"></script>
    <script src="{{url('libs/js/form-validator.min.js')}}"></script>
    <script src="{{url('libs/js/contact-form-script.js')}}"></script>
    <script src="{{url('https://kit.fontawesome.com/e275822d82.js')}}" crossorigin="anonymous"></script>
    <script src="{{url('libs/js/custom.js')}}"></script>
</body>

</html>
