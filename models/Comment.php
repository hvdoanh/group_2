<?php
class Comment extends BaseModel
{
    // Lấy danh sách bình luận của một sản phẩm
    public function listCommentInProduct($product_id)
    {
        $sql = "SELECT c.*, u.fullname 
                FROM comments c 
                JOIN users u ON u.id = c.user_id 
                WHERE product_id =:product_id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['product_id' => $product_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Thêm bình luận mới
    public function create($data)
    {
        $sql = "INSERT INTO comments(user_id, product_id, content) 
                VALUES(:user_id, :product_id, :content)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }



    // hện thị sản phẩm có bình luân 
    public function listProductHasComments()
    {
        $sql = "SELECT p.id, name, count(c.id) 'count' FROM products p JOIN comments c ON p.id=c.product_id GROUP BY p.id, name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //update

    public function updateActive($id, $active_comment)
    {
        $sql = "UPDATE comments SET active_comment=:active_comment WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'active_comment' => $active_comment]);
    }

    // hiện thị ở clients
    public function listCommentInProductClients($product_id)
    {
        $sql = "SELECT c.*, u.fullname 
                FROM comments c 
                JOIN users u ON u.id = c.user_id 
                WHERE product_id =:product_id AND c.active_comment=1";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['product_id' => $product_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}