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

<!-- Page Section Start -->
<div class="page-section section section-padding">
    <div class="container">
        <div class="row row-30 mbn-50">

            <div class="col-12">
                <div class="row row-20 mb-10">

                    <div class="col-lg-6 col-12 mb-40">

                        <div class="pro-large-img mb-10 fix ">
                            <a href="">
                                <img src="<?= $product['image'] ?>" alt="" />
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-6 col-12 mb-40">
                        <div class="single-product-content">

                            <div class="head">
                                <div class="head-left">

                                    <h3 class="title"><?= $product['name'] ?></h3>

                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                                <div class="head-right">
                                    <span class="price">$<?= number_format($product['price']) ?></span>
                                </div>
                            </div>

                            <div class="description">
                                <p><?= $product['content'] ?></p>
                            </div>

                            <span class="availability">Availability:
                                <?php if($product['quantity'] > 0) : ?>
                                <span class="badge bg-success">Còn hàng</span>
                                <?php else : ?>
                                <span class="badge bg-danger">Hết hàng</span>
                                <?php endif ?>
                            </span>

                            <div class="quantity-colors">
                                <div class="quantity">
                                    <h5>Quantity Available: <?= $product['quantity'] ?></h5>
                                </div>
                                <div class="quantity">
                                    <h5>Quantity:</h5>
                                    <div class="pro-qty"><input type="text" value="1"></div>
                                </div>

                                <div class="colors">
                                    <h5>Color:</h5>
                                    <div class="color-options">
                                        <button style="background-color: #ff502e"></button>
                                        <button style="background-color: #fff600"></button>
                                        <button style="background-color: #1b2436"></button>
                                    </div>
                                </div>

                            </div>

                            <div class="actions">

                                <button>
                                    <i class="ti-shopping-cart"></i>
                                    <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>">ADD TO CART</a>
                                </button>
                                <button class="box" data-tooltip="Compare">
                                    <i class="ti-control-shuffle"></i>
                                </button>
                                <button class="box" data-tooltip="Wishlist">
                                    <i class="ti-heart"></i>
                                </button>

                            </div>

                            <div class="tags">

                                <h5>Tags:</h5>
                                <a href="#">Electronic</a>
                                <a href="#">Smartphone</a>
                                <a href="#">Phone</a>
                                <a href="#">Charger</a>
                                <a href="#">Powerbank</a>

                            </div>

                            <div class="share">

                                <h5>Share: </h5>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="row mb-50">
                    <!-- Nav tabs -->
                    <div class="col-12">
                        <ul class="pro-info-tab-list section nav">
                            <li><a class="active" href="#more-info" data-bs-toggle="tab">More info</a></li>
                            <li><a href="#data-sheet" data-bs-toggle="tab">Data sheet</a></li>
                            <li><a href="#reviews" data-bs-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content col-12">
                        <div class="pro-info-tab tab-pane active" id="more-info">
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                feminine designs delivering stylish separates and statement dresses which have
                                since evolved into a full ready-to-wear collection in which every item is a
                                vital part of a woman's wardrobe. The result? Cool, easy, chic looks with
                                youthful elegance and unmistakable signature style. All the beautiful pieces are
                                made in Italy and manufactured with the greatest attention. Now Fashion extends
                                to a range of accessories including shoes, hats, belts and more!</p>
                        </div>
                        <div class="pro-info-tab tab-pane" id="data-sheet">
                            <table class="table-data-sheet">
                                <tbody>
                                    <tr class="odd">
                                        <td>Compositions</td>
                                        <td>Cotton</td>
                                    </tr>
                                    <tr class="even">
                                        <td>Styles</td>
                                        <td>Casual</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>Properties</td>
                                        <td>Short Sleeve</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pro-info-tab tab-pane" id="reviews">
                            <a href="#">Be the first to write your review!</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div><!-- Page Section End -->

<!-- Related Product Section Start -->
<div class="section section-padding pt-0">
    <div class="container">

        <div class="section-title text-start mb-30">
            <h1>Related Product</h1>
        </div>

        <div class="related-product-slider related-product-slider-1 slick-space p-0">

            <?php foreach($productReleads as $pro) : ?>
            <div class="slick-slide">

                <div class="product-item">
                    <div class="product-inner">

                        <div class="image">
                            <img src="<?= ROOT_URL . $pro['image']  ?>" alt="">

                            <div class="image-overlay">
                                <div class="action-buttons">
                                    <button>
                                        <a href="<?= ROOT_URL . '?ctl=add-cart&id=' .$product['id'] ?>">ADD TO CART</a>
                                    </button>
                                    <button>add to wishlist</button>
                                </div>
                            </div>

                        </div>

                        <div class="content">

                            <div class="content-left">

                                <h4 class="title"><a
                                        href="<?= ROOT_URL . '?ctl=detail&id=' .$product['id'] ?>"><?= $pro['name']  ?></a>
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
                                <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span
                                        style="background-color: #0271bc"></span><span
                                        style="background-color: #efc87c"></span><span
                                        style="background-color: #00c183"></span></h5>

                            </div>

                            <div class="content-right">
                                <span class="price">$<?= $pro['price'] ?></span>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <?php endforeach ?>


        </div>
    </div>
</div><!-- Related Product Section End -->

<!-- Brand Section Start -->
<div class="brand-section section section-padding pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="brand-slider">

                <div class="brand-item col">
                    <img src="assets/images/brands/brand-1.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="assets/images/brands/brand-2.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="assets/images/brands/brand-3.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="assets/images/brands/brand-4.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="assets/images/brands/brand-5.png" alt="">
                </div>

                <div class="brand-item col">
                    <img src="assets/images/brands/brand-6.png" alt="">
                </div>

            </div>
        </div>
    </div>
</div><!-- Brand Section End -->




<?php include_once   ROOT_DIR . "views/clients/footer.php" ?>