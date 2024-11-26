<?php

session_start();

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";

require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/User.php";


require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/ProductController.php";
require_once __DIR__ . "/controllers/AuthController.php";


$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    '' => (new HomeController)->index(),
    'category' => (new ProductController)->list(),
    'detail' => (new ProductController)->show(),
    'register' => (new AuthController)->register(),
    'login' => (new AuthController)->login(),
    'logout' => (new AuthController)->logout(),
    
};