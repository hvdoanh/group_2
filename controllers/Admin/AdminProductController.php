<?php

class AdminProductController {

    public function __construct(){

        $user = $_SESSION['user'] ?? [];
        
        if($user || $user['role'] != 'admin' ){
            return header("Location: " . ROOT_URL);
        }
    }
    
    public function index(){
        $products = (new Product)->all();
        $message = session_flash('message');
        return view('admin.product.list', compact('products', 'message'));
        
    }


    //form thêm 
    public function add(){
        $categories = (new Category)->all();
        return view('admin.product.add', compact('categories'));
        
    }
    //lưu trữ vào csdl
    public function store(){
        $data = $_POST;
        
        // nếu k nhập ảnh
        $image = '';
        // nếu ng dùng nhập ảnh
        $file = $_FILES['image'];
        if($file['size'] > 0){
            $image = 'images/' . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        }
        //  đưa ảnh vào data
        $data['image'] = $image;
        // luw vào csdl
        (new Product)->create($data);

        $_SESSION['message'] = "thêm dữ liệu thành công";
        
        header("Location: " . ADMIN_URL . "?ctl=listsp");
        die;
    }
    
    // form sửa
    public function edit(){
        $id = $_GET['id'];
        $product = (new Product)->find($id);
        
        $categories = (new Category)->all();
        
        $message = session_flash("message");
        
        return view('admin.product.edit', compact('product', 'categories' , 'message'));
    }

    // cập nhật csdl 
    public function update(){
        $data = $_POST;
        
        // nếu thay đôi ảnh
        $file = $_FILES['image'];
        if($file['size'] > 0){
            $image = "images/" . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
            // cập nhật ảnh vào data
            $data['image'] = $image;
        }
        //lưu data vao csdl 
        (new Product)->update($data['id'], $data);
        
        $_SESSION['message'] = "Cập nhật dữ liệu thành công";
        
        header("Location: " . ADMIN_URL . "?ctl=editsp&id=" . $data['id']);
        die;
        
    }
    //xoá

    public function delete(){
        $id = $_GET['id'];
        (new Product)->delete($id);
        
        $_SESSION['message'] = "xoá dữ liệu thành công";
        
        header("Location: " . ADMIN_URL .'?ctl=listsp');
        die;
    }
    
}