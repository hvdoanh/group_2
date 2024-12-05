<?php include_once   ROOT_DIR . "views/clients/header.php" ?>

<!-- Page Banner Section Start -->
<div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1>Register</h1>
                <ul class="page-breadcrumb">
                    <li><a href="ROOT_URL">Home</a></li>
                    <li><a href="<?= ROOT_URL . '?ctl=login' ?>">Login</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Page Section Start -->
<div class="page-section section section-padding">
    <div class="container">
    <?php if ($error !== ""): ?>
    <div class="alert alert-danger">
        <?= ($error) ?>
    </div>
<?php elseif ($message !== ""): ?>
    <div class="alert alert-success">
        <?= ($message) ?>
    </div>
<?php endif; ?>



        <div class="login-register-form-wrap">
            <h3>Register</h3>
            <form action="<?= ROOT_URL . '?ctl=register' ?>" method="POST">
                <div class="row">
                    <div class="col-md-6 col-12 mb-15">
                        <input type="text" placeholder="Full Name" name="fullname">
                    </div>
                    <div class="col-md-6 col-12 mb-15">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="col-md-6 col-12 mb-15">
                        <input type="text" placeholder="Password" name="password">
                    </div>
                    <div class="col-md-6 col-12 mb-15">
                        <input type="text" placeholder="Nhập số điện thoại" name="phone">
                    </div>
                    <div class="col-md-6 col-12 mb-15">
                        <input type="text" placeholder="Nhập địa chỉ" name="address">
                    </div>

                    <div class="col-md-6 col-12">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </form>
        </div>



    </div>

</div>
<?php include_once   ROOT_DIR . "views/clients/footer.php" ?>