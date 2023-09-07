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
            $id = $row['idkh'];
            $name = $row['name'];
            $pass = $row['pass'];
            $phone = $row['phone'];
            $khachHangList[$i++] = new Entity_KhachHang($id,$name,$pass,$phone);
            $row = mysqli_fetch_array($rs);
        }
        return $khachHangList;
    }
    public function getDetailKhachHangByID($idkh)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "SELECT * FROM user WHERE idkh = '$idkh'";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        if($row==null) return null;
       
            $idkh = $row['idkh'];
            $name = $row['name'];
            $pass= $row['pass'];
            $phone = $row['phone'];
            
            $khachHangList = new Entity_KhachHang($idkh,$name,$pass,$phone);
        return $khachHangList;
    }
    public function getDetailKhachHangByName($name)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "SELECT * FROM user WHERE name = '$name'";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        if($row==null) return null;
       
            $idkh = $row['idkh'];
            $name = $row['name'];
            $pass= $row['pass'];
            $phone = $row['phone'];
            
            $khachHangList = new Entity_KhachHang($idkh,$name,$pass,$phone);
        return $khachHangList;
    }
    public function addKhachHang($tenkh,$pass,$phone)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");

        //check if idnv already exist - notyet
        $sql = "INSERT INTO user(name,pass,phone) VALUES ('$tenkh','$pass','$phone')";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    public function deleteKhachHang($idkh)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "DELETE from user WHERE idkh = '$idkh'";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    public function updateKhachHang($idkh,$name,$pass,$phone)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "UPDATE user
        set 
            name = '$name',
            pass = '$pass',
            phone = '$phone'
        WHERE idkh = '$idkh'";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    public function checkAccountDangki($name,$phone)
    {
        $isTrueAccount = false;
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "select * from user";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        while ($row != null)
        {
            if ($row['name'] == $name || $row['phone'] ==$phone)
            {
                $isTrueAccount = true;
                return $isTrueAccount;
            } 
            $row = mysqli_fetch_array($rs);
        }
      
        return false;
    }
    public function Dangki($name,$pass,$phone)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        //check if idnv already exist - notyet
        $sql = "INSERT INTO user(name,pass,phone) VALUES ('$name','$pass','$phone')";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }

}

?>
