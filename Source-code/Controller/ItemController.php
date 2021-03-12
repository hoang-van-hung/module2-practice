<?php

namespace App\Controller;
use App\Model\ItemModel;



class ItemController
{
    protected $itemModel;

    public function __construct()
    {
        $this->itemModel= new ItemModel();
    }

    public function itemList()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $item_list = $this->itemModel->itemList();
            include "Source-code/View/item/item-list.php";

        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
            $item_list = $this->itemModel->itemSearch($search);
            include "Source-code/View/item/item-list.php";
        }
    }

    public function delete($id)
    {
        $id= $_REQUEST['id'];
        $this->itemModel->delete($id);
        $this->itemList();
    }

    public function itemAdd()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $items = $this->itemModel->itemList();
            include "src/View/item/item-add.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ten_hang = $_REQUEST['ten_hang'];
            $loai_hang = $_REQUEST['loai_hang'];
            $gia_ca = (int)$_REQUEST['gia_ca'];
            $so_luong = (int)$_REQUEST['so_luong'];
            $ngay_tao = (int)$_REQUEST['ngay_tao'];
            $mo_ta = (int)$_REQUEST['mo_ta'];

            $this->itemModel->itemAdd($ten_hang, $loai_hang, $gia_ca, $so_luong, $ngay_tao, $mo_ta);
            header("location:index.php?page=item-list");
        }

    }

    public function itemUpdate()
    {
        if ($_SERVER["REQUEST_METHOD"]== 'GET')
        {
            $id = (int)$_REQUEST['id'];
            $item_list = $this->itemModel->itemDetail();
            include "Source-code/View/item/item-update.php";
        }elseif ($_SERVER["REQUEST_METHOD"] == 'POST')
        {
            $id= $_REQUEST['id'];
            $ten_hang = $_REQUEST['ten_hang'];
            $loai_hang = $_REQUEST['loai_hang'];
            $gia_ca = (int)$_REQUEST['gia_ca'];
            $so_luong = (int)$_REQUEST['so_luong'];
            $ngay_tao = (int)$_REQUEST['ngay_tao'];
            $mo_ta = (int)$_REQUEST['mo_ta'];
            $this->itemModel->itemUpdate($id ,$ten_hang, $loai_hang, $gia_ca, $so_luong, $ngay_tao, $mo_ta);

        }
    }
}

