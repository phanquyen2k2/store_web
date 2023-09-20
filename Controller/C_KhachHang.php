<?php
include_once("../Model/M_KhachHang.php");
include_once("../Model/M_LichSuMuaHang.php");

class Controller_KhachHang
{
    public function invoke()
    {       
        if(isset($_POST['addkh']))
        {  
            $tenkh=$_POST('tenkh');
            $pass=$_POST('pass');
            $phone=$_POST('phone');
            
            $modelKhachHang = new Model_KhachHang();
            $isAdd = $modelKhachHang->addKhachHang($tenkh,$pass,$phone);
            if ($isAdd == false)
            {
                echo "có lỗi xảy ra, thêm không thành công";
            }
         }
          // thêm,sửa,xóa khach hang
        //xóa 
        else if(isset($_GET['delkh']))
        {
            $idkh = $_GET['delkh'];
            echo $idkh;
            $modelKhachHang = new Model_KhachHang();
            $isDeleted = $modelKhachHang->deleteKhachHang($idkh);
            if ($isDeleted == false)
            {
                echo "Xóa không thành công, đã có lỗi";
            }
            else
            {
                $modelKhachHang = new Model_KhachHang();
                $khachHangList = $modelKhachHang->getAllKhachHang();
                include_once("../View/Admin/DanhSachKhachHang.php"); 
            }
        }
        // Chỉnh sửa sản phẩm
        elseif(isset($_GET['editkh']))
        {
            $idkh = $_GET['editkh'];
            
            $modelKhachHang = new Model_KhachHang();
            $khachHangList = $modelKhachHang->getDetailKhachHangByID($idkh);
            include_once("../View/Admin/FormEditKhachHang.php"); 
        }
        elseif(isset($_POST['edit']))
        {  
            $idkh = $_POST['idkh'];
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            
            $modelKhachHang = new Model_KhachHang();
            $isUpdated = $modelKhachHang->updateKhachHang($idkh, $name, $pass, $phone);
            if ($isUpdated == false)
            {
                echo "có lỗi xảy ra, sửa không thành công";
            }
            else 
            {
                $modelKhachHang = new Model_KhachHang();
            $khachHangList = $modelKhachHang->getAllKhachHang();
            include_once("../View/Admin/DanhSachKhachHang.php");
               
            }
        }
        elseif(isset($_POST['editofkh']))
        {  
            $idkh = $_POST['idkh'];
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            session_start();
       
                if($_SESSION['nameuser'] != $name){
                    $_SESSION['nameuser'] = $name;
                }
            $modelKhachHang = new Model_KhachHang();
            $isUpdated = $modelKhachHang->updateKhachHang($idkh, $name, $pass, $phone);
            if ($isUpdated == false)
            {
                echo "có lỗi xảy ra, sửa không thành công";
            }
            else 
            {
                $modelKhachHang = new Model_KhachHang();
            $khachHangList = $modelKhachHang->getAllKhachHang();
            include_once("../View/User/UserHome.php");
               
            }
        }
        elseif(isset($_GET['in4'])){
            session_start();
                $modelKhachHang = new Model_KhachHang();
                $khachHangList = $modelKhachHang->getDetailKhachHangByName($_SESSION['nameuser']);
                include_once("../View/User/FormEditOfKhachHang.php"); 
        }
       
      
         else {
            $modelKhachHang = new Model_KhachHang();
            $khachHangList = $modelKhachHang->getAllKhachHang();
            include_once("../View/Admin/DanhSachKhachHang.php"); 
         }
         
            
            
    }
}
$C_KhachHang = new Controller_KhachHang();
$C_KhachHang->invoke();


?>