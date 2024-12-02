<?php include_once   ROOT_DIR . "views/clients/header.php" ?>

<!-- Page Banner Section Start -->
<div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1>Checkout</h1>
                <ul class="page-breadcrumb">
                    <li><a href="">Home</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Page Section Start -->
<div class="container">
    <h1 class="mb-6">Thông tin thanh toán</h1>
    <div class="row">
        <!-- Form thông tin thanh toán -->
        <div class="col-md-7">
            <form action="<?= ROOT_URL . '?ctl=checkout' ?>" method="POST">
                <!-- Thông tin người nhận -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3>Thông tin người nhận</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Nhập họ tên"
                                value="<?= $user['fullname'] ?>" required />
                        </div>
                        <div class=" mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="<?= $user['phone'] ?>"
                                placeholder=" Nhập số điện thoại" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email"
                                value="<?= $user['email'] ?>" required />
                        </div>
                        <div class=" mb-3">
                            <label for="address" class="form-label">
                                Địa chỉ giao hàng
                            </label>
                            <textarea class="form-control" id="address" name="address" rows="3"
                                placeholder="Nhập địa chỉ giao hàng" required><?= $user['address'] ?></textarea>
                        </div>
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    </div>
                </div>

                <!-- Phương thức thanh toán -->
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h5>Phương thức thanh toán</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="payment_method" id="cod" value="cod"
                                checked />
                            <label class="form-check-label" for="cod">
                                Thanh toán khi giao hàng (COD)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="vnpay"
                                value="vnpay" />
                            <label class="form-check-label" for="vnpay">
                                Thanh toán bằng VNPAY
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Nút xác nhận -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="bi bi-check-circle"></i> Xác nhận thanh toán
                    </button>
                </div>
            </form>
        </div>

        <!-- Thông tin giỏ hàng -->
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h2>Thông tin giỏ hàng</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <!-- Sản phẩm 1 -->
                        <?php foreach ($carts as $cart) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="mb-0"><?= $cart['name'] ?></h3>
                                    <span class="text-muted">
                                        Số lượng: <?= $cart['quantity'] ?>
                                    </span>
                                </div>
                                <span>$<?= number_format($cart['price'] * $cart['quantity']) ?></span>
                            </li>
                        <?php endforeach  ?>
                </div>
                <!-- Tổng tiền -->
                <div class="card-footer text-end fw-bold">
                    Tổng tiền: <span class="text-danger">$<?= number_format($sumPrice) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Section End -->

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