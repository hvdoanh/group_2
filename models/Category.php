<?php

class Category extends BaseModel{
    // lấy ra tất cả loại hàng

    public function all(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // thêm mới

    public function create($data){
        $sql = "INSERT INTO categories(cate_name) VALUES(:cate_name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }


    // update dữ liệu
    public function update($id, $data){
        $sql = "UPDATE categories SET cate_name=:cate_name WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        // thêm id và data
        $data['id'] = $id;
        $stmt->execute($data);
    }
    
    // lấy theo id
    public function find($id){
        $sql = "SELECT * FROM categories WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    // xoá 
    public function delete($id){
        $sql = "DELETE FROM categories WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
    }
}