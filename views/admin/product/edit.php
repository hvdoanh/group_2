<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div>
    <?php if($message !== '') : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
    <?php endif ?>
    <form action="<?= ADMIN_URL . '?ctl=updatesp' ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Danh mục</label>
            <select name="category_id" id="" class="form-control">
                <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate['id'] ?>" <?=  $cate['id'] == $product['category_id']  ? 'selected' : '' ?>>
                    <?= $cate['cate_name'] ?>
                </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Hình ảnh</label> <br>
            <img src="<?= ROOT_URL . $product['image'] ?>" width="60" alt="">
            <input type="hidden" name="image" value="<?= $product['image'] ?>">
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Giá</label>
            <input type="number" name="price" step="0.1" value="<?= $product['price'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Trạng thái kinh doanh</label> <br>
            <input type="radio" name="status" value="1" <?= $product['status'] ? 'checked' : '' ?> id=""> Đang kinh
            doanh
            <input type="radio" name="status" value="0" <?= $product['status'] == 0 ? 'checked' : '' ?>> Ngừng kinh
            doanh
        </div>
        <div class="mb-3">
            <label for="">Số lượng sản phẩm</label>
            <input type="number" name="quantity" value="<?= $product['quantity'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Mô tả ngắn</label>
            <textarea name="description" rows="4" id="" class="form-control"><?= $product['description'] ?></textarea>
        </div>

        <div class="mb-3">
            <label for="">Nội dung</label>
            <textarea name="content" rows="8" id="" class="form-control"><?= $product['content'] ?></textarea>
        </div>
        <!--Lưu trữ id vàfo thẻ hidden-->
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>