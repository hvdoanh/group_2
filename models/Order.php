<?php

class Order extends BaseModel
{

    public
        $status_details = [
            1  => 'Chờ xử lý',
            2  => 'Đang  xử lý',
            3  => 'Đã giao hàng',
            4  => 'Hoàn thành',
            5  => 'Đã huỷ',

        ];

    /// tất cả hoá đơn
    public function all()
    {
        $sql = "SELECT o.*, fullname, email, address, phone FROM orders o JOIN users u ON o.user_id=u.id ORDER BY o.id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // chi tiết hoá đon
    public function find($id)
    {
        $sql = "SELECT o.*, fullname, email, address, phone 
        FROM orders o JOIN users u ON o.user_id=u.id 
        WHERE o.id=:id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // danh sách sản phẩm của hoá đơn
    public function listOrderDetail($id)
    {
        $sql = "SELECT od.*, name, image 
                FROM order_detail od JOIN products p
                ON od.product_id=p.id
                WHERE  od.order_id=:id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // thêm hoá đơn
    public function create($data)
    {
        $sql = "INSERT INTO orders(user_id, status, payment_method, total_price)
            VALUES(:user_id, :status, :payment_method, :total_price)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);

        return $this->conn->lastInsertId();
    }

    public function updateStatus($id, $status)
    {
        $sql = "UPDATE orders SET status=:status WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'status' => $status]);
    }

    // thêm chi tiết đơn hàng
    public function createOrderDetail($data)
    {
        $sql = "INSERT INTO order_detail(order_id, product_id, price, quantity)
                VALUES(:order_id, :product_id, :price, :quantity)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
}