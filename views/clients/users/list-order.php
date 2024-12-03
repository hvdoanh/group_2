<?php include_once   ROOT_DIR . "views/clients/header.php" ?>

<!-- Page Banner Section Start -->
<div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1>Wishlist</h1>
                <ul class="page-breadcrumb">
                    <li><a href="<?= ROOT_URL ?>">Home</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Page Section Start -->
<div class="page-section section section-padding">
    <div class="container">

        <form action="#">
            <div class="row">
                <div class="col-12">
                    <!-- Thông tin khách hàng -->
                    <div class="mb-4">
                        <h5>Thông tin khách hàng</h5>
                        <p><strong>Họ tên:</strong><?= $user['fullname'] ?></p>
                        <p><strong>Email:</strong><?= $user['email'] ?></p>
                        <p><strong>Điện thoại:</strong> <?= $user['phone'] ?></p>
                        <p><strong>Địa chỉ:</strong> <?= $user['address'] ?></p>
                    </div>
                    <div class="cart-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">ID</th>
                                    <th class="pro-title">Payment method</th>
                                    <th class="pro-subtotal">Total</th>
                                    <th class="pro-quantity">Action</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders_user as $order) : ?>
                                <tr>
                                    <td class="pro-thumbnail">
                                        <?= $order['id'] ?>
                                    </td>
                                    <td class="pro-title">
                                        <?= $order['payment_method'] ?>
                                    </td>
                                    <td class="pro-price">
                                        <span class="amount">$<?= number_format($order['total_price']) ?></span>
                                    </td>
                                    <td>
                                        <?php
                                            $status = $order['status'];
                                            $statusClass = '';

                                            switch ($status) {
                                                case "2":
                                                    $statusClass = 'badge bg-warning';
                                                    break;
                                                case "3":
                                                    $statusClass = 'badge bg-primary';
                                                    break;
                                                case "4":
                                                    $statusClass = 'badge bg-success';
                                                    break;
                                                case "5":
                                                    $statusClass = 'badge bg-danger';
                                                    break;
                                                default:
                                                    $statusClass = 'badge bg-secondary';
                                                    break;
                                            }
                                            ?>
                                        <span class="<?= $statusClass ?>"><?= getOrderStatus($status) ?></span>

                                    </td>
                                    <td class="pro-action">
                                        <a href="<?= ROOT_URL . '?ctl=order-detail-user&id=' . $order['id'] ?>"
                                            class="btn btn-primary">Chi tiết</a>
                                        <a href="<?= ROOT_URL . '?ctl=order-detail-user&id=' . $order['id'] ?>"
                                            class="btn btn-primary">Huỷ</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
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