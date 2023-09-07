<?php
include_once("../Model/M_Login.php");
include_once("../Model/M_SanPham.php");

class Controller_Login
{
    public function invoke()
    {
        session_start();
        ob_start();
        if(!isset($_SESSION['nameuser'])) $_SESSION['nameuser'] = array();

        if (isset($_POST['login']))
        {
            echo $user = $_POST['user'];
            echo $pass = $_POST['pass'];
            $modelLogin = new Model_Login($user, $pass);
            if ($modelLogin->checkAccount())
            {   
                
                echo "<script> alert('Bạn đã đăng nhập thành công') </script>";
                header("Location:http://localhost/Weclothers/View/Admin/HomeAdmin.php");
            }
            else if($modelLogin->checkAccountUser())
            {  
                $_SESSION['nameuser']=$user;
               
                $modelSanPham = new Model_SanPham();
                $sanPhamList = $modelSanPham->getAllSanPham();
                include_once("../Controller/HomeUser.php"); 
                 header("Location:http://localhost/Weclothers/View/User/UserHome.php");
                echo "<script> alert('Bạn đã đăng nhập thành công') </script>";
            }
            else
            {   if(isset($_SESSION['nameuser'])) unset($_SESSION['nameuser']);
                echo "<script> alert('Tài khoản hoặc mật khẩu không đúng') </script>";
                include_once("../View/Login.php");
            }
        }
        elseif(isset($_GET['logout']))
        {       if(isset($_SESSION['nameuser'])) unset($_SESSION['nameuser']);
            if(isset($_SESSION['cart'])) unset($_SESSION['cart']);
                $modelSanPham = new Model_SanPham();
                $sanPhamList = $modelSanPham->getAllSanPham();
                include_once("../View/HomeShow.php"); 
        }
      
    }

}

$C_Login = new Controller_Login();
$C_Login->invoke();
?>