<?php
session_start();

require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../common/function.php";


require_once __DIR__ . "/../models/BaseModel.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../models/Order.php";



require_once __DIR__ . "/../controllers/Admin/Dashboard.php";
require_once __DIR__ . "/../controllers/Admin/AdminCategoryController.php";
require_once __DIR__ . "/../controllers/Admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/AuthController.php";
require_once __DIR__ . "/../controllers/OrderController.php";


$ctl = $_GET['ctl'] ?? "";


match ($ctl) {
    '' => (new DashboardController)->index(),
    // category
    'listdm' => (new AdminCategoryController)->index(),
    'adddm' => (new AdminCategoryController)->create(),
    'storedm' => (new AdminCategoryController)->store(),
    'editdm' => (new AdminCategoryController)->edit(),
    'updatedm' => (new AdminCategoryController)->update(),
    'deletedm' => (new AdminCategoryController)->delete(),
    // product
    'listsp' => (new AdminProductController)->index(),
    'addsp' => (new AdminProductController)->add(),
    'storesp' => (new AdminProductController)->store(),
    'editsp' => (new AdminProductController)->edit(),
    'updatesp' => (new AdminProductController)->update(),
    'deletesp' => (new AdminProductController)->delete(),

    // user
    'listuser' => (new AuthController)->index(),
    'updateuser' => (new AuthController)->updateActive(),

    //order
    'list-order' => (new OrderController)->index(),
    'detail-order' => (new OrderController)->showOrder(),
};