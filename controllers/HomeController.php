<?php

class HomeController{
    // hiện thị trang chủ
    public function index(){
        $product = new Product;
        $wens = $product->listProductInCategory(1); // quần áo nam
        $womens = $product->listProductInCategory(2); // quần áo nữ
        $categories = (new Category)->all();


        $title = "Trang chủ website quần áo";

        return view('clients.home', compact('wens','womens', 'title', 'categories'));
    }
}