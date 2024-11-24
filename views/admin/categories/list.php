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

                <th scope="col">
                    <a href="<?= ADMIN_URL . '?ctl=adddm ' ?>" class="btn btn-primary">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $cate) : ?>
            <tr>
                <th scope="row"><?= $cate['id'] ?></th>
                <td><?= $cate['cate_name'] ?></td>

                <td>
                    <a href="<?= ADMIN_URL . '?ctl=editdm&id=' . $cate['id'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="<?= ADMIN_URL . '?ctl=deletedm&id=' . $cate['id'] ?>" class="btn btn-danger"
                        onclick="return confirm('bạn muốn xoá không' )">xoá</a>
                </td>

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>