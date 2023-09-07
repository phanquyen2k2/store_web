<?php
    include __DIR__ . '/../Controller/C_Home.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
      body{
        background-color: #eee;
      }
        .centered-button {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-top:20px;
        }
      
        .centered-button button {
          padding: 10px 20px;
          border: none;
          background-color: rgb(70, 70, 73);
          color: white;
          border-radius: 10px;
          
        }
        .product-section {
          background-color: #eee;
          padding: 20px 0;
        }
    
        .main {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 20px;
          margin-top: 10px;
        }
        
        .product-card {
          flex: 1; /* Tự động căn chiều rộng của sản phẩm */
          max-width: 400px; /* Đặt kích thước tối đa cho mỗi sản phẩm */
        }
    
        .product-card img {
          max-width: 250px; /* Kích thước ảnh */
          height: auto;
          margin: 0 auto; /* Canh giữa ảnh trong sản phẩm */
        }
    
        .product-card .centered-button button {
          padding: 5px 10px; /* Kích thước nút */
          font-size: 12px; /* Kích thước chữ nút */
          border-radius: 5px;
        }
        .custom-search {
    display: flex;
    align-items: center;
    justify-content: center; /* Thêm dòng này để căn giữa theo chiều ngang */
    margin-bottom:30px;
    margin:5px
  }

  .custom-search-input {
    width: 400px;
    margin-right: 10px;
  }

  .custom-search-button {
    margin-left: 40px;
    margin-right: 10px; /* Tạo khoảng cách giữa hai nút */
  }
  .black-button {
    color: #fff; /* Đổi màu chữ thành trắng */
    background-color: #000; /* Đổi màu nền thành đen */
    border-color: #000; /* Đổi màu viền thành đen (nếu cần) */
}
      </style>
      <script>
        window.addEventListener('load', function() {
          // Chọn tất cả các sản phẩm
          var products = document.querySelectorAll('.product-card');
          var currentRow = null;
    
          for (var i = 0; i < products.length; i++) {
            if (i % 4 === 0) { 
              currentRow = document.createElement('div');
              currentRow.classList.add('main');
              document.querySelector('.container').appendChild(currentRow);
            }
            
            currentRow.appendChild(products[i]);
          }
        });
      </script>
</head>
<body>
  <!-- Nav -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../View/HomeShow.php?showall=1">Trang chủ</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../View/HomeShow.php?spao=ao">Shirt</a>
          <a class="nav-link" href="../View/HomeShow.php?spquan=quan">Trousers</a>
          <a class="nav-link" href="../View/HomeShow.php?sppk=phukien">Accessory</a>
        </div>
      </div>
      
      <div class="d-flex align-items-center">
    <a type="button" class="btn btn-link px-3 me-2 text-decoration-none " style="color: black;" href="../View/Login.php">
        Login
    </a>
    <a type="button" class="btn btn-link px-3 me-2 text-decoration-none black-button" href="../View/Dangki.php">
        Sign up
    </a>
</div>

     
      </div>
    </div>
  </nav>
  <!--  -->
  
  <!-- Search -->
  
    
  <div class="container mt-5">
    <div class="custom-search">
      <form align="center" action="../View/HomeShow.php" method="POST">
        <div class="input-group custom-search-input">
          <input type="text" name="searchValue" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <button type="submit" class="btn btn-link px-3 me-2 text-decoration-none black-button">Search</button>
        </div>
       
        

  
  <!--  -->
  
        <?php 
        
        if (isset($_GET['spao']) && $_GET['spao'] === "ao") {
            
            echo showao(); 
            
        } 
        else if (isset($_GET['spquan']) && $_GET['spquan'] === "quan") {
            echo showquan(); 

        } 
        else if (isset($_GET['sppk']) && $_GET['sppk'] === "phukien") {
           echo showpk();
        } 
        else if (isset($_POST['searchValue']) && $_POST['searchValue'] !==" ")
        {   
               $searchContent=$_POST['searchValue'];
               echo showsearch($searchContent);
        }
        // else if (isset($_GET['showall'])){
         
        //     echo showall();
        // }
        else {
          echo showall();
        }
        ?>
     
          
     
  
 <!-- quần -->
        
        <!--  -->
     
</body>
</html>
