<?php

//hàm view dùng để render view 
function view($path_view, $data = [])
{
    // thay thế  dấu . thành dấu / 

    extract($data);
    $path_view = str_replace(".", "/", $path_view);

    // include 
    include_once ROOT_DIR . "views/$path_view.php";
}


// để debug

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

// hàm session , sẽ huỷ sesion ngay lập tức

function session_flash($key)
{
    $message = $_SESSION[$key] ?? '';
    unset($_SESSION[$key]);
    return $message;
}

// chuyển đổi trạng thái
function getOrderStatus($status)
{
    $status_details = [
        1  => 'Chờ xử lý',
        2  => 'Đang xử lý',
        3  => 'Đang giao hàng',
        4  => 'Hoàn thành',
        5  => 'Đã huỷ',

    ];

    return $status_details[$status];
}