<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div>
    <?php if($message !== '') : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
    <?php endif ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục</th>

                <th scope="col">
                    <a href="<?= ADMIN_URL . '?ctl=addsp ' ?>" class="btn btn-primary">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $pro) : ?>
            <tr>
                <th scope="row"><?= $pro['id'] ?></th>
                <td><?= $pro['name'] ?></td>
                <td>
                    <img src="<?= ROOT_URL . $pro['image']?>" width="60" alt="">
                </td>
                <td>$<?= number_format($pro['price'] )?></td>
                <td>
                    <span class="<?= $pro['status'] ? 'btn btn-success' : 'btn btn-danger' ?>">
                        <?= $pro['status'] ?  'Đang kinh doanh' : 'Ngừng kinh doanh'?>
                    </span>
                </td>
                <td><?= $pro['quantity'] ?></td>
                <td><?= $pro['cate_name'] ?></td>
                <td>
                    <a href="<?= ADMIN_URL . '?ctl=editsp&id=' . $pro['id'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="<?= ADMIN_URL . '?ctl=deletesp&id=' . $pro['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('bạn muốn xoá không' )">xoá</a>
                </td>

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>