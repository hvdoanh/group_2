<?php

class CartController {
    public function addToCart(){
        // tạp giỏ hàng
        $carts = $_SESSION['cart'] ?? [];
        
        // kiểm tra lấy sp theo id ư
        $id = $_GET['id'];
        
        $product = (new Product)->find($id);
     
        if(isset($carts[$id])){
            $carts[$id]['quantity'] += 1;
        }else{
            $carts[$id] = [
                'name' => $product['name'],
                'image' => $product['image'],
                'price' => $product['price'],
                'quantity' => 1,
            ];
        }
        
        // gán sessoin cart
        $_SESSION['cart'] = $carts;


        $url = $_SESSION['URI'];

        return header("Location: " . $url);
        
    }

    // tính tổng  số lượng sp
    public function totalSumQuantity(){
        $carts = $_SESSION['cart'] ?? [];

        $total = 0;
        foreach($carts as $cart){
                $total += $cart['quantity'];
        }

        return $total;
    }

    public function viewCart(){
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new CartController)->sumPrice();

        $categories = (new Category)->all();
        
        return view('clients.carts.cart',compact('carts','categories','sumPrice'));
    }
    
    public function sumPrice()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach($carts as $cart){
                $total += $cart['quantity'] * $cart['price'];
        }

        return $total;
    }


    // xoá giỏ hàng
    public function deleteProductInCart(){
        // lấy id sp
        $id = $_GET['id'];

        // huỷ session
        unset($_SESSION['cart'][$id]);

        // cập nhật lại số lượng giỏ hàng 
        $_SESSION['totalQuantity']  = (new CartController)->totalSumQuantity();
        
        // chuyển hướng
        return header("Location: " . ROOT_URL . '?ctl=view-cart');
        
        
    }

    // cập nhật số lượng sản phẩm trong giỏ hàng
    public function updateCart(){
        $quantities = $_POST['quantity'];

        // cập nhật số lượng
        foreach($quantities as $id => $qty){
            $_SESSION['cart'][$id]['quantity'] = $qty;
            
        }

        return header("Location: " . ROOT_URL . "?ctl=view-cart");
        
    }

    // hiện thị thông tin thanh toán
    public function viewCheckOut(){
        // ktra người dùng đăng nhập chưa , chưa thì vào login

        
        
         if(!isset($_SESSION['user'])){
            return header("Location: " . ROOT_URL . '?ctl=login');
         }


         $user = $_SESSION['user'];
         $carts = $_SESSION['cart'] ?? [];
         $sumPrice = (new CartController)->sumPrice();
         $categories = (new Category)->all();

         return view('clients.carts.checkout', 
                         compact('user','carts','sumPrice','categories')
                        );
         
         
    }
    

}