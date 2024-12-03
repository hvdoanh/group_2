<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/jadusona/jadusona/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 08:02:25 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quần áo - <?= $title ?? "" ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
</head>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section section">

            <!-- Header Top Start -->
            <div class="header-top header-top-one bg-theme-two">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">

                        <div class="col mt-10 mb-10 d-none d-md-flex">
                            <!-- Header Top Left Start -->
                            <div class="header-top-left">
                                <p>Welcome to</p>
                                <p>Hotline: <a href="tel:0123456789">0123 456 789</a></p>
                            </div><!-- Header Top Left End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Language Currency Start -->
                            <ul class="header-lan-curr">

                                <li><a href="#">eng</a>
                                    <ul>
                                        <li><a href="#">english</a></li>
                                        <li><a href="#">spanish</a></li>
                                        <li><a href="#">france</a></li>
                                        <li><a href="#">russian</a></li>
                                        <li><a href="#">chinese</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">$usd</a>
                                    <ul>
                                        <li><a href="#">pound</a></li>
                                        <li><a href="#">dollar</a></li>
                                        <li><a href="#">euro</a></li>
                                        <li><a href="#">yen</a></li>
                                    </ul>
                                </li>

                            </ul><!-- Header Language Currency End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Shop Links Start -->
                            <div class="header-top-right">
                                <?php if (isset($_SESSION['user'])) : ?>
                                <p>
                                    <a href="<?= ROOT_URL  ?>">
                                        Tên người dùng:<?= $_SESSION['user']['fullname'] ?>
                                    </a>
                                    <a href="<?= ROOT_URL . '?ctl=logout' ?>">Logout</a>
                                </p>
                                <?php else : ?>
                                <p>
                                    <a href="<?= ROOT_URL  . '?ctl=register' ?>">Register</a>
                                    <a href="<?= ROOT_URL  . '?ctl=login' ?>">Login</a>
                                </p>
                                <?php endif ?>
                            </div><!-- Header Shop Links End -->
                        </div>

                    </div>
                </div>
            </div><!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom header-bottom-one header-sticky">
                <div class="container-fluid">
                    <div class="row menu-center align-items-center justify-content-between">

                        <div class="col mt-15 mb-15">
                            <!-- Logo Start -->
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo.png" alt="Jadusona">
                                </a>
                            </div>
                            <!-- Logo End -->
                        </div>

                        <div class="col order-2 order-lg-3">
                            <!-- Header Advance Search Start -->
                            <div class="header-shop-links">

                            <div class="header-search">
                                    <button class="search-toggle"><img src="assets/images/icons/search.png"
                                            alt="Search Toggle"><img class="toggle-close"
                                            src="assets/images/icons/close.png" alt="Search Toggle"></button>
                                <div class="header-search-wrap">
                                    <form class="d-flex" role="search" method="GET" action="<?= ROOT_URL . '?ctl=search' ?>">
    <input type="search" placeholder="Tìm kiếm" aria-label="Search" id="keyword" name="keyword">
    <button type="submit"><img src="assets/images/icons/search.png" alt="Search" id="btnSearch"></button>
</form>
                                    </div>
                                </div>

                                <div class="header-wishlist">
                                    <a href="wishlist.html"><img src="assets/images/icons/wishlist.png" alt="Wishlist">
                                        <span>02</span></a>
                                </div>

                                <div class="header-mini-cart">
                                    <a href="<?= ROOT_URL . "?ctl=view-cart" ?>"><img src="assets/images/icons/cart.png"
                                            alt="Cart">
                                        <span>
                                            <?= $_SESSION['totalQuantity'] ?? 0 ?>
                                        </span>
                                    </a>
                                </div>

                            </div><!-- Header Advance Search End -->
                        </div>

                        <div class="col order-3 order-lg-2">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="active">
                                            <a href="<?= ROOT_URL ?>">HOME</a>
                                            <ul class="sub-menu">
                                                <?php foreach ($categories as $cate) : ?>
                                                <li class=" active">
                                                    <a href="<?= ROOT_URL . '?ctl=category&id=' . $cate['id'] ?>">
                                                        <?= $cate['cate_name'] ?>
                                                    </a>
                                                </li>
                                                <?php endforeach  ?>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">SHOP</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-left-sidebar.html">Single Product Left
                                                        Sidebar</a></li>
                                                <li><a href="single-product-right-sidebar.html">Single Product Right
                                                        Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PAGES</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login-register.html">Login & Register</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">BLOG</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu order-4 d-block d-lg-none col"></div>

                    </div>
                </div>
            </div><!-- Header BOttom End -->

        </div><!-- Header Section End -->