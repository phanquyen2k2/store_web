
<?php include "UserHome.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
   
  </style>
</head>
<body>
<!-- -->
  <section class="vh-100" style="background-color: #ffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-8"> <!-- Điều chỉnh độ rộng tại đây -->
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="../View/Image/nen2.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; object-fit: cover; height: 100%;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                <form action="../Controller/C_KhachHang.php" method="post">
  
                    <div class="d-flex align-items-center justify-content-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h2 fw-bold mb-0">Thay đổi thông tin</span>
                    </div>
                    
              
                    
  
                    <div class="form-outline mb-4">
                    <h5>ID</h5>
                    <input type='text' name='idkh' value = '<?php echo $khachHangList->idkh?>' readonly class="form-control form-control-lg">
                    </div>
                    <div class="form-outline mb-4">
                    <h5>Tên tài khoản</h5>
                    <input type='text' name='name' value = '<?php echo $khachHangList->name?>' class="form-control form-control-lg">
                    </div>
                    <div class="form-outline mb-4">
                    <h5>Mật khẩu</h5>
                    <input type='text' name='pass' value = '<?php echo $khachHangList->pass?>' class="form-control form-control-lg">
                    </div>
                    <div class="form-outline mb-4">
                    <h5>Số điện thoại</h5>
                    <input type='text' name='phone' value = '<?php echo $khachHangList->phone?>' class="form-control form-control-lg">
                    </div>
                   
  
                    <div class="pt-1 mb-4">
                    <input type = 'submit' value = 'Xác nhận thay đổi' name = 'editofkh' class="btn btn-dark btn-lg btn-block w-100">
                    </div>
                  </form>
  
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
