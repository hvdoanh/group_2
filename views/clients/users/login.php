<?php include_once   ROOT_DIR . "views/clients/header.php" ?>


<!-- Page Banner Section Start -->
<div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="page-banner-content col">

                <h1>Login</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                </ul>

            </div>
        </div>
    </div>
</div><!-- Page Banner Section End -->

<!-- Page Section Start -->
<div class="page-section section section-padding">
    <div class="container">
        <div class="row mbn-40">
            <!--  đăng kí thành công -->
            <?php if($message !== '') : ?>
            <div class="alert alert-success">
                <?= $message ?>
            </div>
            <?php endif ?>
            <div class="col-lg-4 col-12 mb-40">
                <div class="login-register-form-wrap">
                    <h3>Login</h3>
                    <form action="<?=  ROOT_URL . '?ctl=login'?>" class="mb-30" method="POST">
                        <div class="row">
                            <div class="col-12 mb-15">
                                <input type="text" name="email" placeholder="Username or Email">
                            </div>
                            <div class="col-12 mb-15">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Login">
                            </div>
                        </div>
                    </form>
                    <h4>You can also login with...</h4>
                    <div class="social-login">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <?php if($error) : ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once   ROOT_DIR . "views/clients/footer.php" ?>