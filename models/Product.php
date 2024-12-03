<?php

class Product extends BaseModel
{
    // lấy tất cả sản phẩm

    public function all()
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Tìm kiếm
    public function searchProductName($name)
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.
        category_id=c.id WHERE name LIKE '%$name%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // lấy sản phẩm theo danh mục
    public function listProductInCategory($id)
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE c.id=:id ORDER BY id DESC LIMIT 8 ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // sản phẩm liên quan 
    public function listProductReload($category_id, $id)
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE c.id=:category_id AND p.id<>:id ORDER BY id DESC LIMIT 4 ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'category_id' => $category_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // thêm dữ liệu
    public function create($data)
    {
        $sql = "INSERT INTO products( name, image, price, quantity,  description, content, status, category_id) VALUES 
        (:name, :image, :price, :quantity, :description,:content, :status, :category_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    // cập nhật 
    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=:name, image=:image, price=:price, quantity=:quantity, description=:description, content=:content, status=:status, category_id=:category_id WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        // thêm id và data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    //xoá
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    // lấy sản phẩm theeo id 
    public  function find($id)
    {
        $sql = "SELECT p.*, cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE p.id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
