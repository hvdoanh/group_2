<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - <?= $title ?? '' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= ROOT_URL ?>">
                    <img src="https://static.vecteezy.com/system/resources/previews/011/514/431/original/ninja-mascot-esport-logo-template-creative-ninja-logo-design-concepts-vector.jpg"
                        alt="Jadusona" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= ADMIN_URL ?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listsp' ?>">Sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listdm' ?>">Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=listuser' ?>">Tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=list-order' ?>">Đơn hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ADMIN_URL . '?ctl=product-comment' ?>">Bình luận</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>

            </div>

            <a href="<?= ROOT_URL ?>">Đăng Xuất</a>
        </nav>