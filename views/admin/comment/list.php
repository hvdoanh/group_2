<?php include_once ROOT_DIR . "views/admin/header.php" ?>
<div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Nội dung bình luận</th>
                <th scope="col">Hoạt động</th>
                <th scope="col">
                    Hành động
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $cm) : ?>
            <tr>
                <th scope="row"><?= $cm['id'] ?></th>
                <td><?= $cm['fullname'] ?></td>
                <td><?= $cm['content'] ?></td>
                <td>
                    <span class="badge <?= $cm['active_comment'] ? 'bg-success' : 'bg-danger' ?>">
                        <?= $cm['active_comment'] ? 'Hiện' : 'Ẩn' ?>
                    </span>
                </td>
                <td>
                    <a href="<?= ADMIN_URL . '?ctl=actiev-comment&id=' . $cm['id'] . '&value=' . $cm['active_comment']  ?>"
                        class="btn btn-primary">
                        <i class="bi bi-toggle-<?= $cm['active_comment'] ? 'on' : 'off' ?>">
                        </i>
                        <?= $cm['active_comment'] ? 'Ẩn' : 'Hiện' ?>
                    </a>
                </td>

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once ROOT_DIR . "views/admin/footer.php" ?>