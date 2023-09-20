<?php
include_once("../Model/M_SanPham.php");
include_once("../Model/M_LichSuMuaHang.php");

class Controller_SanPham{
    public function invoke(){
        if(isset($_GET["spadmin"])){
            $modelSanPham= new Model_SanPham();
            $sanPhamList=$modelSanPham->getAllSanPham();
            include_once("../View/Admin/DanhSachSanPhamAdmin.php");
        }
        elseif(isset($_GET["spadd"])){
            include_once("../View/Admin/ThemSanPham.php");
        }
        elseif(isset($_POST["addsp"])){
            echo "1";
            $tensp= $_POST["tensp"];
            $gia= $_POST["gia"];
            $anh= $_POST["anh"];
            $loaisp= $_POST["loaisp"];
            $modelSanPham=new Model_SanPham();
            $addSanPham=$modelSanPham->addSanPham($tensp,$gia,$anh,$loaisp);
            include_once("DanhSachSanPhamAdmin.php");
        }
        elseif(isset($_GET["delsp"])){
          $idsp=$_GET["delsp"];
          $modelSanPham=new Model_SanPham();
          $sanPhamList=$modelSanPham->deleteSanPham($idsp);
          $sanPhamList=$modelSanPham->getAllSanPham();
          include_once("../View/Admin/DanhSachSanPhamAdmin.php");
        }
        elseif(isset($_GET["editsp"])){
          
            
            $modelSanPham=new Model_SanPham();
            $sanPhamList=$modelSanPham->getDetailSanPhamByID($_GET["editsp"]);
            include_once("../View/Admin/FormEditSanPham.php");
        }
        elseif(isset($_POST["edit"])){
            $idsp=$_POST["idsp"];
            $tensp=$_POST["tensp"];
            $gia=$_POST["gia"];
            $anh=$_POST["anh"];
            $loaisp=$_POST["loaisp"];
           $modelSanPham=new Model_SanPham();
           $editSanPham=$modelSanPham-> updateSanPham($idsp,$tensp,$gia,$anh,$loaisp);
           $sanPhamList=$modelSanPham->getAllSanPham();
           include_once("../View/Admin/DanhSachSanPhamAdmin.php");
        }
        elseif(isset($_GET["lichsu"])){
           $modelLichSu=new Model_LichSu();
           $lichSuList=$modelLichSu->getLichSuMuaHang();
           include_once("../View/Admin/DanhSachLichSuMuaHang.php");
        }
        elseif(isset($_GET["showlskh"])){
            session_start();
                $tenkh= $_SESSION['nameuser'];
                 $modelLichSu=new Model_LichSu();
                 $lichSuList=$modelLichSu->ShowLichSu($tenkh);
                  include_once("../View/User/FormLichSu.php"); 

        }
        elseif(isset($_POST["thanhtoan"])){
            $tenkh= $_POST["tenkh"];
            $soluong= $_POST["soluong"];
            $tongtien=$_POST["tongtien"];
            $diachi=$_POST["diachi"];
            $phone=$_POST["phone"];
            $modelLichSu=new Model_LichSu();
            $lichSuList=$modelLichSu->thanhToan($tenkh,$soluong,$tongtien,$phone,$diachi);
           
            include_once("../Controller/HomeUser.php");
        }

    }


}
$C_SanPham= new Controller_SanPham();
$C_SanPham->invoke();
?>