<?php

class AdminCategoryController{
    public function index(){
        $categories = (new Category)->all();
        // lấy thông tin  từ session
        $message = session_flash('message');
       
        return view('admin.categories.list', compact('categories', 'message'));
    }

    // form
    public function create(){
        return view('admin.categories.add');
    }

    // lưu vào csdl
    public function store(){
        $data = $_POST;

        
        (new Category)->create($data);
        
        // lưu tb vào session
        $_SESSION['message'] = "Thêm dữ liệu thành công";
        
        header("location: " . ADMIN_URL . "?ctl=listdm");
    }
    
// hiện thị form
    public function edit(){
        $id = $_GET['id'];
        $category = (new Category)->find($id);
        $message =  session_flash('message');
        return view('admin.categories.edit', compact('category','message'));
    }

    //update
    public function update(){
        $data = $_POST;
        (new Category)->update($data['id'],$data);
        $_SESSION['message'] = "Cập nhật thành công";
        
        header("location: " . ADMIN_URL . '?ctl=editdm&id=' . $data['id'] );
        
    }
    //xoá
    public function delete(){
        $id = $_GET['id'];
        // kiểm tra xem có dữ liệu của product thuộc category kh
        $products = (new Product)->listProductInCategory($id);
        
        if($products){
            $_SESSION['message'] = "Không thể xoá, vì có sản phẩm của danh mục";
            header("location: " . ADMIN_URL . "?ctl=listdm");
            return;
        }

        // nếu k có product
        (new Category)->delete($id);
        $_SESSION['message'] = "Xoá dữ liệu thành công";
        header("location: " . ADMIN_URL . "?ctl=listdm");
        return;

    }
}