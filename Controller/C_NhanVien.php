<?php
include_once("../Model/M_KhachHang.php");

class Controller_KhachHang
{
    public function invoke()
    {
       
            $modelKhachHang = new Model_KhachHang();
            $khachHangList = $modelKhachHang->getAllKhachHang();
            include_once("../View/DanhSachKhachHang.php");
        
        
    }
}

$C_KhachHang = new Controller_KhachHang();
$C_KhachHang->invoke();


?>