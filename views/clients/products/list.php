<?php include_once   ROOT_DIR . "views/clients/header.php" ?>


<!-- Hero Section Start -->
<div class="hero-section section">

    <!-- Hero Slider Start -->
    <div class="hero-slider hero-slider-one fix">

        <!-- Hero Item Start -->
        <div class="hero-item" style="background-image: url(assets/images/hero/hero-1.jpg)">

            <!-- Hero Content -->
            <div class="hero-content">

                <h1>Get 35% off <br>Latest Product</h1>
                <a href="#">SHOP NOW</a>

            </div>

        </div><!-- Hero Item End -->

        <!-- Hero Item Start -->
        <div class="hero-item" style="background-image: url(assets/images/hero/hero-2.jpg)">

            <!-- Hero Content -->
            <div class="hero-content">

                <h1>Get 35% off <br>Latest Product</h1>
                <a href="#">SHOP NOW</a>

            </div>

        </div><!-- Hero Item End -->

    </div><!-- Hero Slider End -->

</div><!-- Hero Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mt-40">
    <div class="container-fluid">
        <div class="row row-10 mbn-20">

            <div class="col-lg-4 col-md-6 col-12 mb-20">
                <div class="banner banner-1 content-left content-middle">

                    <a href="#" class="image"><img src="assets/images/banner/banner-1.jpg" alt="Banner Image"></a>

                    <div class="content">
                        <h1>New Arrival <br>Shoe <br>GET 30% OFF</h1>
                        <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-20">
                <a href="#" class="banner banner-2">

                    <img src="assets/images/banner/banner-2.jpg" alt="Banner Image">

                    <div class="content bg-theme-one">
                        <h1>New Toy’s for your </h1>
                    </div>

                    <span class="banner-offer">25% off</span>

                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-20">
                <div class="banner banner-1 content-left content-top">

                    <a href="#" class="image"><img src="assets/images/banner/banner-3.jpg" alt="Banner Image"></a>

                    <div class="content">
                        <h1>Trendy <br>Collections</h1>
                        <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div><!-- Banner Section End -->

<!-- Product Section Start -->
<div class="product-section section section-padding">
    <div class="container">

        <div class="row">
            <div class="section-title text-center col mb-30">
                <h1><?= $category_name  ?></h1>
                <p>All popular product find here</p>
            </div>
        </div>

        <div class="row mbn-40">
            <?php foreach ($products as $product) : ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="<?= ROOT_URL . $product['image'] ?>" alt="Image">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>
                                            <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>">
                                                ADD TO CART</a>
                                        </button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a
                                            href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>"><?= $product['name'] ?></a>
                                    </h4>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                    <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span>
                                    </h5>


                                </div>

                                <div class="content-right">
                                    <span class="price">$<?= $product['price'] ?></span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            <?php endforeach ?>


        </div>

    </div>
</div><!-- Product Section End -->



<!-- Feature Section Start -->
<div class="feature-section bg-theme-two section section-padding fix"
    style="background-image: url(assets/images/pattern/pattern-dot.png);">
    <div class="container">
        <div class="feature-wrap row justify-content-between mbn-30">

            <div class="col-md-4 col-12 mb-30">
                <div class="feature-item text-center">

                    <div class="icon"><img src="assets/images/feature/feature-1.png" alt="Image"></div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>Start from $100</p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-12 mb-30">
                <div class="feature-item text-center">

                    <div class="icon"><img src="assets/images/feature/feature-2.png" alt="Image"></div>
                    <div class="content">
                        <h3>Money Back Guarantee</h3>
                        <p>Back within 25 days</p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-12 mb-30">
                <div class="feature-item text-center">

                    <div class="icon"><img src="assets/images/feature/feature-3.png" alt="Image"></div>
                    <div class="content">
                        <h3>Secure Payment</h3>
                        <p>Payment Security</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div><!-- Feature Section End -->


<?php include_once   ROOT_DIR . "views/clients/footer.php" ?>