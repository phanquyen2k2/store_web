<?php
include_once("../Model/E_KhachHang.php");
class Model_KhachHang
{  
    public function getAllKhachHang()
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "select * from user";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        $i = 0;
        while ($row!= null)
        {
            $id = $row['id'];
            $name = $row['name'];
            $pass = $row['pass'];
            $phone = $row['phone'];
            $khachHangList[$i++] = new Entity_KhachHang($id,$name,$pass,$phone);
            $row = mysqli_fetch_array($rs);
        }
        return $khachHangList;
    }
}
?>
