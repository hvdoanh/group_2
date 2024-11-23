<?php

//class basemodel chứa thông tin kết nối

class BaseModel {
    // $conn lưu trữ thông tin kết nối
    public $conn = null;
    //hàm khởi tạo
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=utf8; port= ". PORT, USERNAME , PASSWORD);
        }catch (PDOException $e){
            echo "Lỗi kết nối dữ liệu" . $e->getMessage();
        }
    }
}