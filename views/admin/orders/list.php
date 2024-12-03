<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div class="container">
    <?php if ($message !== '') : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
    <?php endif ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Phương thức thanh toán</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Ngày mua</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order) : ?>
            <tr>
                <th scope="row"><?= $order['id'] ?></th>
                <td><?= $order['fullname'] ?></td>
                <td><?= $order['phone'] ?></td>
                <td><?= $order['payment_method'] ?></td>
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
                <td>$<?= number_format($order['total_price']) ?></td>
                <td><?= $order['created_at'] ?></td>
                <td>
                    <a href="<?= ADMIN_URL . '?ctl=detail-order&id=' . $order['id'] ?>" class="btn btn-warning">Cập
                        nhật</a>
                    <a href="<?= ADMIN_URL . '?ctl=delete-order&id=' . $order['id'] ?>" class="btn btn-danger">Xoá</a>

                </td>

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>