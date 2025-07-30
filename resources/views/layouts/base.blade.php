<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon & Meta -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Surfside Media - Premium E-commerce Template">
    <meta name="keywords" content="ecommerce, shop, furniture, fashion">
    <meta name="author" content="Surfside Media">

    <!-- Fonts & CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/slick/slick-theme.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/demo4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Inline Styles -->
    <style>
        .h-logo { max-width: 185px !important; }
        .f-logo { max-width: 220px !important; }
        @media only screen and (max-width: 600px) {
            .h-logo { max-width: 110px !important; }
        }
        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }
        header .profile-dropdown ul li:last-child { border-color: #fff; }
        .name-usr {
            background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }
        .name-usr span { margin-right: 10px; }
        @media (max-width:600px) {
            .h-logo { max-width: 150px !important; }
            i.sidebar-bar { font-size: 22px; }
            .mobile-menu ul li a svg { width: 20px; height: 20px; }
            .mobile-menu ul li a span { margin-top: 0; font-size: 12px; }
            .name-usr { padding: 5px 12px; }
        }
        .r-price {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        .r-price .main-price { width: 100%; }
        .product-style-3.product-style-chair .product-title {
            text-align: left;
            width: 100%;
        }
        @media (max-width:600px) {
            .product-box p, .product-box a { text-align: left; }
            .product-style-3.product-style-chair .main-price { text-align: right !important; }
        }
    </style>

    <title>Surfside Media - Home</title>
</head>
<body class="theme-color4 light ltr">

<!-- HEADER -->
<header class="header-style-2" id="home">
    <div class="main-header navbar-searchbar">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logo.png') }}" class="h-logo img-fluid blur-up lazyload" alt="Surfside Media">
                                </a>
                            </div>
                        </div>

                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul class="nav-menu">
                                        <li class="back-btn d-xl-none">
                                            <div class="close-btn">Menu <span class="mobile-back"><i class="fa fa-angle-left"></i></span></div>
                                        </li>
                                        <li><a href="index.html" class="nav-link menu-title">Home</a></li>
                                        <li><a href="shop.html" class="nav-link menu-title">Shop</a></li>
                                        <li><a href="cart.html" class="nav-link menu-title">Cart</a></li>
                                        <li><a href="wishlist.php" class="nav-link menu-title">Wishlist</a></li>
                                        <li><a href="about.html" class="nav-link menu-title">About Us</a></li>
                                        <li><a href="contact.html" class="nav-link menu-title">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <div class="menu-right">
                            <ul>
                                <li>
                                    <div class="search-box theme-bg-color">
                                        <i data-feather="search"></i>
                                    </div>
                                </li>
                                <li class="onhover-dropdown wislist-dropdown">
                                    <div class="cart-media">
                                        <a href="wishlist.php">
                                            <i data-feather="heart"></i>
                                            <span id="wishlist-count" class="label label-theme rounded-pill">0</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="onhover-dropdown">
                                    <div class="cart-media">
                                        <a href="cart.html">
                                            <i data-feather="shopping-cart"></i>
                                            <span id="cart-count" class="label label-theme rounded-pill">0</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="onhover-dropdown">
                                    <div class="cart-media name-usr">
                                        <i data-feather="user"></i>
                                    </div>
                                    <div class="onhover-div profile-dropdown">
                                        <ul>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Full Search Overlay -->
                        <div class="search-full">
                            <form method="GET" action="search.html">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" name="q" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MOBILE MENU -->
<div class="mobile-menu d-sm-none">
    <ul>
        <li>
            <a href="index.html" class="active">
                <i data-feather="home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="shop.html">
                <i data-feather="align-justify"></i>
                <span>Shop</span>
            </a>
        </li>
        <li>
            <a href="cart.html">
                <i data-feather="shopping-bag"></i>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="wishlist.php">
                <i data-feather="heart"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="user-dashboard.html">
                <i data-feather="user"></i>
                <span>Account</span>
            </a>
        </li>
    </ul>
</div>

<!-- POSTER SLIDER -->
<section class="pt-0 poster-section">
    <div class="slider-for custome-arrow classic-arrow">
        <div><img src="{{ asset('assets/images/furniture-images/poster/1.png') }}" class="img-fluid blur-up lazyload" alt="Sale"></div>
        <div><img src="{{ asset('assets/images/furniture-images/poster/2.png') }}" class="img-fluid blur-up lazyload" alt="New Arrivals"></div>
        <div><img src="{{ asset('assets/images/furniture-images/poster/3.png') }}" class="img-fluid blur-up lazyload" alt="Deals"></div>
    </div>
    <div class="slider-nav image-show">
        <div class="poster-img">
            <img src="{{ asset('assets/images/furniture-images/poster/t2.jpg') }}" class="img-fluid blur-up lazyload" alt="">
            <div class="overlay-color"><i class="fas fa-plus theme-color"></i></div>
        </div>
        <div class="poster-img">
            <img src="{{ asset('assets/images/furniture-images/poster/t1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
            <div class="overlay-color"><i class="fas fa-plus theme-color"></i></div>
        </div>
        <div class="poster-img">
            <img src="{{ asset('assets/images/furniture-images/poster/t3.jpg') }}" class="img-fluid blur-up lazyload" alt="">
            <div class="overlay-color"><i class="fas fa-plus theme-color"></i></div>
        </div>
    </div>
    <div class="left-side-contain">
        <div class="banner-left">
            <h4>Sale <span class="theme-color">35% Off</span></h4>
            <h1>New Latest <span>Dresses</span></h1>
            <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
            <h2>$79.00 <span class="theme-color"><del>$65.00</del></span></h2>
            <p class="poster-details mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </div>
</section>

<!-- BANNER SECTION -->
<section class="ratio2_1 banner-style-2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop.html" class="banner-img">
                        <img src="{{ asset('assets/images/fashion/banner/1.jpg') }}" class="bg-img blur-up lazyload" alt="New Hoodie">
                    </a>
                    <div class="banner-detail">
                        <a href="javascript:void(0)" class="heart-wishlist"><i class="far fa-heart"></i></a>
                        <span class="font-dark-30">26% <span>OFF</span></span>
                    </div>
                    <a href="shop.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">New Hoodie</h2>
                            <span>BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop.html" class="banner-img">
                        <img src="{{ asset('assets/images/fashion/banner/2.jpg') }}" class="bg-img blur-up lazyload" alt="New Shoes">
                    </a>
                    <div class="banner-detail">
                        <a href="javascript:void(0)" class="heart-wishlist"><i class="far fa-heart"></i></a>
                        <span class="font-dark-30">40% <span>OFF</span></span>
                    </div>
                    <a href="shop.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">New Shoes</h2>
                            <span>UP TO 40% OFF</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop.html" class="banner-img">
                        <img src="{{ asset('assets/images/fashion/banner/3.jpg') }}" class="bg-img blur-up lazyload" alt="New Jacket">
                    </a>
                    <div class="banner-detail">
                        <a href="javascript:void(0)" class="heart-wishlist"><i class="far fa-heart"></i></a>
                        <span class="font-dark-30">36% <span>OFF</span></span>
                    </div>
                    <a href="shop.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">New Jacket</h2>
                            <span>BUY ONE GET ONE FREE</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEW ARRIVALS -->
<section class="ratio_asos overflow-hidden">
    <div class="container p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>New Arrival</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>
        </div>
        <div class="row g-sm-4 g-3">
            @for ($i = 1; $i <= 12; $i++)
                <div class="col-xl-2 col-lg-2 col-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <a href="product/details.html">
                                <img src="{{ asset('assets/images/fashion/product/front/' . (10 + $i % 15) . '.jpg') }}"
                                     class="w-100 bg-img blur-up lazyload" alt="Product">
                            </a>
                            <div class="circle-shape"></div>
                            <span class="background-text">Furniture</span>
                            <div class="label-block">
                                <span class="label label-theme">30% Off</span>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Buy">
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                            <i data-feather="shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                        <a href="wishlist.php" class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-style-3 product-style-chair">
                            <div class="product-title d-block mb-0">
                                <div class="r-price">
                                    <div class="theme-color">${{ rand(5, 25) }}</div>
                                    <div class="main-price">
                                        <ul class="rating mb-1 mt-0">
                                            @for ($star = 0; $star < 5; $star++)
                                                <li><i class="fas fa-star {{ $star < 3 ? 'theme-color' : '' }}"></i></li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                                <p class="font-light mb-sm-2 mb-0">Dolores Et</p>
                                <a href="product/details.html" class="font-default">
                                    <h5>Dolorem Libero Tempore</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-sm-space mt-5">
    <div class="main-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-contact">
                        <div class="brand-logo">
                            <a href="index.html" class="footer-logo float-start">
                                <img src="{{ asset('assets/images/logo.png') }}" class="f-logo img-fluid blur-up lazyload" alt="logo">
                            </a>
                        </div>
                        <ul class="contact-lists" style="clear:both;">
                            <li><i data-feather="map-pin"></i><p>8424 E. Chapman Ave. Orange, California 92869, United States</p></li>
                            <li><i data-feather="phone"></i><p>Phone: +1 800-234-5678</p></li>
                            <li><i data-feather="mail"></i><p>Email: support@surfside.com</p></li>
                        </ul>
                        <ul class="footer-social">
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <div class="footer-title">
                        <h4>Quick Link</h4>
                    </div>
                    <div class="footer-contain">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Store</h4>
                    </div>
                    <div class="footer-contain">
                        <ul>
                            <li><a href="javascript:void(0)">About Us</a></li>
                            <li><a href="javascript:void(0)">Terms &amp; Conditions</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Return Policy</a></li>
                            <li><a href="javascript:void(0)">Store Location</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Categories</h4>
                    </div>
                    <div class="footer-contain">
                        <ul>
                            <li><a href="shop.html">Furniture</a></li>
                            <li><a href="shop.html">Fashion</a></li>
                            <li><a href="shop.html">Electronics</a></li>
                            <li><a href="shop.html">Toys</a></li>
                            <li><a href="shop.html">Grocery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-4 d-lg-block d-none">
                    <div class="footer-newsletter">
                        <h4>Subscribe To Our Newsletter</h4>
                        <p class="font-light">Be the first to get the latest news about trends, promotions, and much more!</p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                            <button class="btn btn-solid-default" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 font-dark">© 2023, Surfside Media.</p>
                </div>
                <div class="col-md-6">
                    <p class="text-md-end mb-0">Handcrafted with ❤️ by Surfside Media</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- NEWSLETTER MODAL -->
<div class="modal fade newletter-modal" id="newsletter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('assets/images/newletter-icon.png') }}" class="img-fluid blur-up lazyload" alt="Newsletter">
                <div class="modal-title">
                    <h2 class="tt-title">Sign up for our Newsletter!</h2>
                    <p>Be the first to get the latest news about trends, promotions, and much more!</p>
                    <p>Oh, and it's free!</p>
                </div>
                <div class="input-group mb-3">
                    <input placeholder="Email" class="form-control" type="text">
                </div>
                <div class="cancel-button text-center">
                    <button class="btn default-theme w-100" data-bs-dismiss="modal" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ADD TO CART MODAL -->
<div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-contain">
                    <div class="modal-messages">
                        <i class="fas fa-check"></i> Item successfully added to your cart.
                    </div>
                    <div class="modal-product">
                        <div class="modal-contain-img">
                            <img src="{{ asset('assets/images/fashion/instagram/4.jpg') }}" class="img-fluid blur-up lazyload" alt="Cart Item">
                        </div>
                        <div class="modal-contain-details">
                            <h4>Premier Cropped Skinny Jean</h4>
                            <p class="font-light my-2">Color: Yellow, Qty: 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- QUICK VIEW MODAL -->
<div class="modal fade" id="quick-view" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/fashion/product/front/10.jpg') }}" class="img-fluid blur-up lazyload" alt="Quick View">
                    </div>
                    <div class="col-lg-6">
                        <h3>Product Name</h3>
                        <h4>$29.99 <del>$39.99</del></h4>
                        <p>This is a beautiful and premium quality product made with the finest materials.</p>
                        <button class="btn btn-solid-default">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/feather/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/lazysizes.min.js') }}" async></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/slick/custom_slick.js') }}"></script>
<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

<script>
    $(document).ready(function () {
        feather.replace();
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>