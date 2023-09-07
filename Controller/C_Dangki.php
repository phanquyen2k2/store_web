<?php
include_once("../Model/M_KhachHang.php");


class Controller_Dangki
{
    public function invoke()
    {
        if(isset($_POST["dangki"])){
            $name=$_POST["name"];
            $pass1=$_POST["pass1"];
            $pass2=$_POST["pass2"];
            $phone=$_POST["phone"];
            $modelDangki = new Model_KhachHang();
            $Kiemtra = $modelDangki->checkAccountDangki($name,$phone);
            if($pass1==$pass2){
                if($Kiemtra== true){
                    echo "<script> alert('Tài khoản hoặc số điện thoại đã tồn tại') </script>";
                    include_once("../View/Dangki.php"); 
                }
                else {
                $dangKi=$modelDangki->Dangki($name,$pass1,$phone);
                echo "<script> alert('Bạn đã đăng kí thành công') </script>";
                include_once("../View/Login.php"); 
                }
            }
            else{
                echo "<script> alert('Vui lòng nhập đúng mật khẩu xác nhận') </script>";
                
                include_once("../View/Dangki.php"); 
            }
           
        }
    }
        

}

$C_Dangki = new Controller_Dangki();
$C_Dangki->invoke();
?>