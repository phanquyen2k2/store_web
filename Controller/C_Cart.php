
<?php
session_start();
ob_start();
 if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
 if(isset($_POST['dathang'])&&($_POST['dathang'])){
    echo$anh = $_POST['anh'];
    echo$tensp = $_POST['tensp'];
    echo$gia = $_POST['gia'];
    echo$idsp = $_POST['idsp']; 
    $sl=1;
    $i=0;   
    $fg=0;
//
  if(isset($_SESSION['cart']) && (count($_SESSION['cart'])>0)){
      foreach ($_SESSION['cart'] as $sp){
        if($sp[0]==$idsp){
            // cập nhật số lượng
            $sl+=$sp[4];
            $fg=1;
            // cập nhật giỏ hàng
            $_SESSION['cart'][$i][4]=$sl;
            break;
        }
        $i++;
      }
  }   
// khi số lượng ban đầu ko thay đổi
if($fg==0){
   $sp=array($idsp,$tensp,$gia,$anh,$sl);
   array_push($_SESSION['cart'],$sp);
   echo var_dump($_SESSION['cart']); 
}
   
  header("Location:http://localhost/Weclothers/View/Cart/FormCart.php");
}
  elseif(isset($_GET['delete'])&&($_GET['delete'])){
    
     if(isset($_SESSION['cart'])) unset($_SESSION['cart']);
     header("Location:http://localhost/Weclothers/Controller/HomeUser.php");
  }
  elseif(isset($_GET['xoasp'])){
      array_splice($_SESSION['cart'],$_GET['xoasp'],1);

      if(count($_SESSION['cart'])>0){
        header("Location:http://localhost/Weclothers/View/Cart/FormCart.php");
      }
      else {
            header("Location:http://localhost/Weclothers/Controller/HomeUser.php");
           }
    }
    elseif(isset($_GET['logout'])){
      
      if(isset($_SESSION['cart'])) unset($_SESSION['cart']);
      if(isset($_SESSION['nameuser'])) unset($_SESSION['nameuser']);
     header("Location:http://localhost/Weclothers/View/HomeShow.php");
        
    }
    else if (isset($_GET['thanhtoan'])&& isset($_GET['tong'])){
      $tongsl=$_GET['thanhtoan'];
      $tong=$_GET['tong'];
      include_once("../View/Cart/Thanhtoan.php");

    }
else {
    header("Location:http://localhost/Weclothers/View/Cart/FormCart.php");
}

    
   
  


?>