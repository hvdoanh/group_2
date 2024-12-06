<?php

class CommentController
{

    public function index()
    {
        $products = (new Comment)->listProductHasComments();
        return view('admin.comment.product-comment', compact('products'));
    }

    // hiện thị theo sản phẩm
    public function list()
    {
        // lấy id   
        $id = $_GET['id'];

        $comments = (new Comment)->listCommentInProduct($id);

        $_SESSION['uri-comment'] = $_SERVER['REQUEST_URI'];
        return view('admin.comment.list', compact('comments'));
    }

    // hiện , ẩn
    public function updateActive()
    {
        $id = $_GET['id'];
        $value = $_GET['value'] ? 0 : 1;
        (new Comment)->updateActive($id, $value);

        return header("Location: " . $_SESSION['uri-comment']);
    }
}