<?php include_once   ROOT_DIR . "views/clients/header.php" ?>

<!-- Page Banner Section Start -->
<div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1>Cart</h1>
                <ul class="page-breadcrumb">
                    <li><a href="<?= ROOT_URL . '?ctl=home' ?>">Home</a></li>
                    <li><a href="cart.html">Cart</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Page Section Start -->
<div class="page-section section section-padding">
    <div class="container">

        <form action="<?= ROOT_URL . '?ctl=update-cart' ?>" method="POST">
            <div class="row mbn-40">
                <div class="col-12 mb-40">
                    <div class="cart-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($carts as $id => $cart) :  ?>
                                <tr>
                                    <td class="pro-thumbnail">
                                        <a href="#"><img src="<?= $cart['image'] ?>" alt="" />
                                        </a>
                                    </td>

                                    <td class="pro-title">
                                        <a href="#"><?= $cart['name'] ?></a>
                                    </td>
                                    <td class="pro-price">
                                        <span class="amount">$<?= number_format($cart['price']) ?></span>
                                    </td>
                                    <td class="pro-quantity">
                                        <div class="pro-qty">
                                            <input type="number" value="<?= $cart['quantity'] ?>"
                                                name="quantity[<?= $id ?>]">
                                        </div>
                                    </td>
                                    <td class="pro-subtotal">$<?= number_format($cart['price'] * $cart['quantity'])?>
                                    </td>
                                    <td class="pro-remove">
                                        <a href="<?= ROOT_URL . "?ctl=delete-cart&id=" . $id ?>">
                                            ×
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-12 mb-40">
                    <div class="cart-buttons mb-30">
                        <button type="submit" class="btn btn-warning">
                            Cập nhật giỏ hàng
                        </button>
                        <a href=" <?=ROOT_URL ?>">Continue Shopping</a>
                    </div>
                    <div class="cart-coupon">
                        <h4>Coupon</h4>
                        <p>Enter your coupon code if you have one.</p>
                        <div class="cuppon-form">
                            <input type="text" placeholder="Coupon code" />
                            <input type="submit" value="Apply Coupon" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-12 mb-40">
                    <div class="cart-total fix">
                        <h3>Cart Totals</h3>
                        <table>
                            <tbody>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>
                                        <strong><span class="amount">$<?= number_format($sumPrice) ?></span></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="proceed-to-checkout section mt-30">
                            <a href="<?= ROOT_URL . '?ctl=view-checkout' ?>">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div><!-- Page Section End -->


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