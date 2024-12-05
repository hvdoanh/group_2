<?php

class CartController
{
    public function addToCart()
    {
        // tạp giỏ hàng
        $carts = $_SESSION['cart'] ?? [];

        // kiểm tra lấy sp theo id ư
        $id = $_GET['id'];

        $product = (new Product)->find($id);

        if (isset($carts[$id])) {
            $carts[$id]['quantity'] += 1;
        } else {
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

        $_SESSION['totalQuantity']  = (new CartController)->totalSumQuantity();

        return header("Location: " . $url);
    }

    // tính tổng  số lượng sp
    public function totalSumQuantity()
    {
        $carts = $_SESSION['cart'] ?? [];

        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity'];
        }

        return $total;
    }

    public function viewCart()
    {


        if (!isset($_SESSION['user'])) {
            return header("Location: " . ROOT_URL . '?ctl=login');
        }
        

        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new CartController)->sumPrice();

        $categories = (new Category)->all();

        return view('clients.carts.cart', compact('carts', 'categories', 'sumPrice'));
    }

    public function sumPrice()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity'] * $cart['price'];
        }

        return $total;
    }


    // xoá giỏ hàng
    public function deleteProductInCart()
    {
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
    public function updateCart()
    {
        $quantities = $_POST['quantity'];

        // cập nhật số lượng
        foreach ($quantities as $id => $qty) {
            $_SESSION['cart'][$id]['quantity'] = $qty;
        }

        return header("Location: " . ROOT_URL . "?ctl=view-cart");
    }

    // hiện thị thông tin thanh toán
    public function viewCheckOut()
    {
        // ktra người dùng đăng nhập chưa , chưa thì vào login



        if (!isset($_SESSION['user'])) {
            return header("Location: " . ROOT_URL . '?ctl=login');
        }


        $user = $_SESSION['user'];
        $carts = $_SESSION['cart'] ?? [];
        $sumPrice = (new CartController)->sumPrice();
        $categories = (new Category)->all();

        return view(
            'clients.carts.checkout',
            compact('user', 'carts', 'sumPrice', 'categories')
        );
    }

    // thanh toán
    public function checkOut()
    {
        // lấy thông tin người dùng

        $data = $_POST;
        dd($data);

        $user = [
            'id' => $_POST['id'],
            'fullname' => $_POST['fullname'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'role' => $_SESSION['user']['role'],
            'active' => $_SESSION['user']['active'],
        ];

        $sumPrice = (new CartController)->sumPrice();

        // thông tin thanh toán
        $order = [
            'user_id' => $_POST['id'],
            'status' => 1,
            'payment_method' => $_POST['payment_method'],
            'total_price' => $sumPrice,
        ];

        (new User)->update($user['id'], $user);

        $order_id = (new Order)->create($order);

        $carts = $_SESSION['cart'];

        foreach ($carts as $id => $cart) {
            $or_detail = [
                'order_id' => $order_id,
                'product_id' => $id,
                'price' => $cart['price'],
                'quantity' => $cart['quantity'],
            ];
            (new Order)->createOrderDetail($or_detail);
        }

        $this->clearCart(); // xoá giỏ hàng

        return header("Location: " . ROOT_URL  . "?ctl=success");
    }

    // xoá giỏ hàng
    public function clearCart()
    {
        unset($_SESSION['cart']);
        unset($_SESSION['totalQuantity']);
        unset($_SESSION['URI']);
    }

    public function success()
    {

        return view('clients.carts.success');
    }
}
