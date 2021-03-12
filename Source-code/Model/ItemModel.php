<?php


namespace App\Model;
use PDO;

class ItemModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function itemList()
    {

        $sql = "SELECT * FROM items";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function itemDetail($id)
    {
        $sql ="SELECT * FROM items where id='$id'";
        $stmt = $this->database->prepare($sql);
//        $stmt->bindValue(":ma_chuc_vu", $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function itemSearch($search)
    {
        $sql = "SELECT * FROM items";
        if (!empty($search)) {
            $sql = "SELECT * FROM items WHERE id  LIKE '%$search%' or ten_hang LIKE '%$search%' ";
        }
        $stmt = $this->database->prepare($sql);
        //$stmt->bindParam(":search", $search);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function delete($id)
    {
        $sql = 'DELETE FROM items WHERE id =:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function itemAdd ($ten_hang, $loai_hang, $gia_ca, $so_luong, $ngay_tao, $mo_ta)
    {
        $sql='INSERT INTO items (ten_hang, loai_hang, gia_ca,so_luong,ngay_tao,mo_ta) VALUE (:ten_hang, :loai_hang, :gia_ca, :so_luong, :ngay_tao, :mo_ta)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":ten_hang", $ten_hang);
        $stmt->bindParam(":loai_hang", $loai_hang);
        $stmt->bindParam(":gia_ca", $gia_ca);
        $stmt->bindParam(":so_luong", $so_luong);
        $stmt->bindParam(":ngay_tao", $ngay_tao);
        $stmt->bindParam(":mo_ta", $mo_ta);
        $stmt->execute();

    }

    public function itemUpdate($id, $ten_hang, $loai_hang, $gia_ca, $so_luong, $ngay_tao, $mo_ta)
    {

        $sql ='UPDATE items SET ten_hang=:ten_hang,loai_hang=:loai_hang,gia_ca=:gia_ca,so_luong=:so_luong,ngay_tao=:ngay_tao,mo_ta=:mo_ta where id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":ten_hang", $ten_hang);
        $stmt->bindParam(":loai_hang", $loai_hang);
        $stmt->bindParam(":gia_ca", $gia_ca);
        $stmt->bindParam(":so_luong", $so_luong);
        $stmt->bindParam(":ngay_tao", $ngay_tao);
        $stmt->bindParam(":mo_ta", $mo_ta);
        $stmt->execute();

    }


}

