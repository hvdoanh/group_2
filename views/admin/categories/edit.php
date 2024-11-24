<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div>
    <?php if($message !== '') : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
    <?php endif ?>
    <form action="<?= ADMIN_URL . '?ctl=updatedm' ?>" method="post">
        <div class="mb-3">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="cate_name" value="<?= $category['cate_name'] ?>" class="form-control">
        </div>

        <!-- id danh muc -->
        <input type="hidden" name="id" value="<?= $category['id']  ?>">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>