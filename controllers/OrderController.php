<?php

class OrderController
{



    public function index()
    {
        $orders = (new Order)->all();

        $message = session_flash('message');

        return view('admin.orders.list', compact('orders', 'message'));
    }


    public function showOrder()
    {
        $id = $_GET['id'];

        // thay đổi trạng thái
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $status = $_POST['status'];
            (new Order)->updateStatus($id, $status);
        }

        $order = (new Order)->find($id);

        $order_details = (new Order)->listOrderDetail($id);

        // dd($order_details);

        $status = (new Order)->status_details;

        return view("admin.orders.detail", compact('order', 'order_details', 'status'));
    }


    // hiện thị danh sách hoá đơn  của user theo id
    public function showOrderUser()

    
    {
        
        if (!isset($_SESSION['user'])) {
            return header("Location: " . ROOT_URL . '?ctl=login');
        }

        $user_id = $_SESSION['user']['id'];


        $orders_user = (new Order)->findOrtherUser($user_id);

        $user = $_SESSION['user'];

        // dd($orders_user);
        $categories = (new Category)->all();



        return view("clients.users.list-order", compact('orders_user', 'categories', 'user'));
    }

    public function detailOrderUser()
    {
        $id = $_GET['id'];

        // thay đổi trạng thái
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            (new Order)->updateStatus($id, 5);
        }

        $order = (new Order)->find($id);

        $order_details = (new Order)->listOrderDetail($id);

        // dd($order_details);

        $status = (new Order)->status_details;

        return view("clients.users.detail-order", compact('order', 'order_details', 'status'));
    }


    public function deleteOrder()
    {
        $id = $_GET['id'];
        (new Order)->delete($id);

        $_SESSION['message'] = "xoá dữ liệu thành công";

        header("Location: " . ADMIN_URL . '?ctl=list-order');
        die;
    }
}