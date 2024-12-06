<?php

class ProductController
{
    // hiện thị danh sp theo danh muc
    public function list()
    {

        $id = $_GET['id']; // lấy id theo danh mục

        $products = (new Product)->listProductInCategory($id);

        $category_name = (new Category)->find($id)['cate_name'];

        $categories = (new Category)->all();

        $title = $category_name;

        $product = (new Product)->find($id);


        return view(
            'clients.products.list',
            compact('products', 'category_name', 'title', 'categories', 'product')
        );
    }

    public function show()
    {
        $id = $_GET['id']; // id sp

        $product = (new Product)->find($id);
        //Theem comment
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data = $_POST;
            //them product_id_ USer_id
            $data['product_id'] = $id;
            $data['user_id'] = $_SESSION['user']['id'];
            (new Comment)->create($data);
        }

        $title = $product['name'];

        $categories = (new Category)->all();

        // danh sách sp liên quan 
        $productReleads = (new Product)->listProductReload($product['category_id'], $id);

        // lưu thông itn uRI vào session
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
        $_SESSION['totalQuantity'] = (new CartController)->totalSumQuantity();
        
        //lấy danh sách comment
        $comments = (new Comment)->listCommentInProductClients($id);


        return view(
            'clients.products.detail',
            compact('product', 'title', 'categories', 'productReleads', 'comments')
        );
    }
}