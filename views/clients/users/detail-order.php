<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<!-- Page Banner Section Start -->
<div class="page-banner-section section mb-5" style="background-image: url(assets/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1>Detail Order</h1>
                <ul class="page-breadcrumb">
                    <li><a href="<?= ROOT_URL ?>">Home</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<div class="container mb-15">
    <div class="card">
        <div class="card-header bg-dark text-white">
            Chi tiết đơn hàng
        </div>
        <div class="card-body">
            <!-- Thông tin đơn hàng -->
            <div class="mb-4">
                <h5>Mã đơn hàng: #<?= $order['id'] ?></h5>
                <p><strong>Ngày đặt hàng:</strong> <?= date('d-m-Y H:i:s', strtotime($order['created_at'])) ?></p>
            </div>

            <!-- Thông tin khách hàng -->
            <div class="mb-4">
                <h5>Thông tin khách hàng</h5>
                <p><strong>Họ tên:</strong><?= $order['fullname'] ?></p>
                <p><strong>Email:</strong><?= $order['email'] ?></p>
                <p><strong>Điện thoại:</strong> <?= $order['phone'] ?></p>
                <p><strong>Địa chỉ:</strong> <?= $order['address'] ?></p>
            </div>

            <!-- Danh sách sản phẩm -->
            <div class="mb-4">
                <h5>Danh sách sản phẩm</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($order_details as $id => $detail) : ?>

                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $detail['name'] ?></td>
                            <td>
                                <img src="<?= ROOT_URL . $detail['image'] ?>" alt="" width="120">
                            </td>
                            <td>$<?= number_format($detail['price']) ?></td>
                            <td><?= $detail['quantity'] ?></td>
                            <td>$<?= number_format($detail['price'] * $detail['quantity']) ?></td>
                        </tr>

                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5" class="text-end">Tổng cộng:</th>
                            <th>$<?= number_format($order['total_price']) ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Cập nhật trạng thái đơn hàng -->
            <div class="mb-4">
                <h5>Cập nhật trạng thái đơn hàng</h5>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="orderStatus" class="form-label">Trạng thái đơn hàng:</label>
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
                    </div>
                </form>
            </div>

            <!-- Nút thao tác -->
            <div class="d-flex justify-content-between">
                <a href="<?= ROOT_URL . '?ctl=list-order' ?>" class="btn btn-secondary">Quay lại chi tiết đơn hàng</a>
                <?php if ($status != 1 && $status != 2) : ?>

                <span class="p-2 bg-info rounded text-white fs-6">Không thể huỷ đơn</span>
                <?php else : ?>
                <form action="" method="POST">
                    <button href="" class="btn btn-danger">Huỷ</button>
                </form>
                <?php endif ?>

            </div>
        </div>
    </div>
</div>

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


<?php include_once ROOT_DIR . "views/clients/footer.php" ?>