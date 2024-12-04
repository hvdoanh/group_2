<?php

class ShopController
{
    // hiện thị trang chủ
    public function shop()
    {
        $product = new Product;
        $wens = $product->listProductInCategory(1); // quần áo nam
        $womens = $product->listProductInCategory(2); // quần áo nữ
        $categories = (new Category)->all();

        // lưu thông itn uRI vào session
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];

        $title = "Trang chủ website quần áo";

        return view('clients.shop', compact('wens', 'womens', 'title', 'categories'));
    }
}
class BlogController
{
    // hiện thị trang chủ
    public function blog()
    {
        $product = new Product;
        $wens = $product->listProductInCategory(1); // quần áo nam
        $womens = $product->listProductInCategory(2); // quần áo nữ
        $categories = (new Category)->all();

        // lưu thông itn uRI vào session
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];

        $title = "Trang chủ website quần áo";

        return view('clients.blog', compact('wens', 'womens', 'title', 'categories'));
    }
}

