<?php

class SearchController
{
    public function search()
    {
        // Lấy từ khóa tìm kiếm từ GET hoặc mặc định là chuỗi rỗng
        $keyword = $_GET['keyword'] ?? '';

        // Tìm kiếm sản phẩm theo tên từ khóa
        $products = (new Product)->searchProductName($keyword);

        // Lấy tất cả các danh mục
        $categories = (new Category)->all();

        // Trả về view và truyền dữ liệu cần thiết
        return view('clients.products.search', compact('products', 'categories', 'keyword'));
    }
}
