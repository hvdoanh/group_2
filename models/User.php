<?php

class User extends BaseModel{
    // lấy ra tất cả loại hàng

    public function all(){
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // thêm mới

    public function create($data){
        $sql = "INSERT INTO users(full_name, email, password, phone , address) VALUES(:full_name , :email , :password , :phone , : address)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }


    // update dữ liệu
    public function update($id, $data){
        $sql = "UPDATE users SET full_name=:full_name, email=:email, password=:password, phone=:phone, address=:address WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        // thêm id và data
        $data['id'] = $id;
        $stmt->execute($data);
    }
    
   

    // xoá 
    public function delete($id){
        $sql = "DELETE FROM users WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
    }
}