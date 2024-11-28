<?php

class Order extends BaseModel{
    /// tất cả hoá đơn
    public function all(){
        $sql = "SELECT o.*, fullname, email, address, phone FROM order o JOIN users u ON o.user_id=u.id ORDER BY o.id DESC";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // chi tiết hoá đon
    public function find($id){
        $sql = "SELECT o.*, fullname, email, address, phone, od.price, od.quantity, name, image FROM order o JOIN users u ON o.user_id=u.id JOIN  order_details od ON od.order_id=o.id JOIN products p ON od.product_id=:p.id WHERE o.id=:id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'] =>$id)
    }

    // thêm hoá đơn
    public function create($data){
        $sql = "INSERT INTO orders(user_id, status, payment_method, total_price)
            VALUES(:user_id, :status, :payment_method, :total_price)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        
        return $this->conn->lastInsertId();
        
    }

    public function updateStatus($id, $status){
        $sql = "UPDATE orders SET status=:status WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'status' => $status]);
        
    }

    // thêm chi tiết đơn hàng
    public function createOrderDetail($data){
        $sql = "INSERT INTO order_details(order_id, product_id, price, quantity)
                VALUES(:order_id, :product_id, :price, :quantity)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
        
    }

}