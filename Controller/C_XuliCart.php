
<?php
function showcart($cart){
    $tong=0;
    $i=0;
    $kq="";
    $sl=0;
    $tongsl=0;
    $kq.='
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
      <style>
          body{
            background-color: #ffff;
          }
            @media (min-width: 1025px) {
    .h-custom {
    height: 100vh !important;
    }
    }
    
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
    }
    
    .card-registration .select-arrow {
    top: 13px;
    }
    
    .bg-grey {
    background-color: #eae8e8;
    }
    
    @media (min-width: 992px) {
    .card-registration-2 .bg-grey {
    border-top-right-radius: 16px;
    border-bottom-right-radius: 16px;
    }
    }
    
    @media (max-width: 991px) {
    .card-registration-2 .bg-grey {
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
    }
    }
    .btn-group {
                display: flex;
                gap: 1rem; /* Khoảng cách giữa các nút */
            }
        </style>
    </head>
    <body>
    <section class="h-80 h-custom">
      <div class="container py-5 h-80">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <div class="p-5">
                      <div class="d-flex justify-content-between align-items-center mb-5">
                        <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      
                      </div>
    ';
    foreach($cart as &$sp){ // Sử dụng & để truy cập tham chiếu đến mảng $cart
        
        $tt=$sp[2]*$sp[4];
        $tong+=$tt;
        $tongsl+=$sp[4];
        $kq.='
       
        <hr class="my-4">
        <div class="row mb-4 d-flex justify-content-between align-items-center">
          <div class="col-md-2 col-lg-2 col-xl-2">
            <img
              src="../../View/Image/'.$sp[3].'"
              class="img-fluid rounded-3" alt="Cotton T-shirt">
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3">
            
            <h6 class="text-black mb-0">'.$sp[1].'</h6>
          </div>
          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
            <input id="form1" min="0" max="50" name="quantity" value="'.$sp[4].'" type="text"
              class="form-control form-control-sm" />
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
            <h6 class="mb-0">Giá: '.$sp[2].'</h6>
          </div>
          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
            <a href="http://localhost/Weclothers/Controller/C_Cart.php?xoasp='.$i.'" class="text-muted"><i class="fas fa-times"></i></a>
          </div>
        </div>
        <!--  -->
        ';
        $i++;
    }
    
    $kq.='
    <hr class="my-4">

        <div class="pt-5">
          <h6 class="mb-0"><a href="http://localhost/Weclothers/Controller/HomeUser.php" class="text-body"><i
                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
        </div>
      </div>
    </div>
    <div class="col-lg-4 bg-grey">
    <div class="p-5">
      <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
      <hr class="my-4">

      <div class="d-flex justify-content-between mb-4">
        <h5 class="text-uppercase">items</h5>
        <h5>'.$tongsl.'</h5>
      </div>
      <hr class="my-4">

      <div class="d-flex justify-content-between mb-5">
        <h5 class="text-uppercase">Total price</h5>
        <h5>'.$tong.'</h5>
      </div>

      <div class="btn-group">
         <a class="btn btn-dark btn-lg" href="http://localhost/Weclothers/Controller/C_Cart.php?thanhtoan='.$tongsl.' & tong='.$tong.'" data-mdb-ripple-color="dark">Register</a>
        
         <a  class="btn btn-dark btn-lg" href="http://localhost/Weclothers/Controller/C_Cart.php?delete=del" data-mdb-ripple-color="dark">Cancel</a>
      </div>
      
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>
    ';
    return $kq;
}
?>
<head>

</head>
<!--  -->
<!-- href="http://localhost/Weclothers/Controller/C_Cart.php?delete=del" -->
            
              