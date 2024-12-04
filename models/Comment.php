<?php
class Comment extends BaseModel {
    // Lấy danh sách bình luận của một sản phẩm
    public function listCommentInProduct($product_id) {
        $sql = "SELECT c.*, u.fullname 
                FROM comments c 
                JOIN users u ON u.id = c.user_id 
                WHERE c.product_id = :product_id";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['product_id' => $product_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm bình luận mới
    public function create($data) {
        $sql = "INSERT INTO comments(user_id, product_id, content) 
                VALUES(:user_id, :product_id, :content)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }
}
