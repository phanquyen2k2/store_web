<?php
include_once("../Model/E_LichSuMuaHang.php");
class Model_LichSu
{   
    public function getLichSuMuaHang()
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "select * from lichsumuahang";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        $i = 0;
        while ($row!= null)
        {
          
            $tenkh= $row['tenkh'];
            $soluong = $row['soluong'];
            $tongtien = $row['tongtien'];
            $phone= $row['phone'];
            $diachi= $row['diachi'];
            $idls = $row['idls'];
            $lichSuList[$i++] = new Entity_LichSuMuaHang($idls,$tenkh,$soluong,$tongtien,$phone,$diachi);
            $row = mysqli_fetch_array($rs);
        }
       
        return $lichSuList;
    }
    public function ShowLichSu($tenkh)
    {
        {   
            $link = mysqli_connect("127.0.0.1","root","","web_store");
            $sql = "SELECT * FROM lichsumuahang WHERE tenkh = '$tenkh'";
            $rs = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($rs);
            $i = 0;
            while ($row!= null)
            {
                
            $tenkh= $row['tenkh'];
            $soluong = $row['soluong'];
            $tongtien = $row['tongtien'];
            $phone= $row['phone'];
            $diachi= $row['diachi'];
            $idls = $row['idls'];
            $lichSuList[$i++] = new Entity_LichSuMuaHang($idls,$tenkh,$soluong,$tongtien,$phone,$diachi);
            $row = mysqli_fetch_array($rs);
            }
            return $lichSuList;
            
        }
    }
    
   
    public function thanhToan($tenkh,$soluong,$tongtien,$phone,$diachi){
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        //check if idnv already exist - notyet
        $sql = "INSERT INTO lichsumuahang(tenkh,soluong,tongtien,phone,diachi) VALUES ('$tenkh','$soluong','$tongtien','$phone','$diachi')";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    
}
?>