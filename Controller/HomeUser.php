<?php
    include __DIR__ . '/../Controller/C_HomeUser.php';
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
      <a class="navbar-brand" href="../Controller/HomeUser.php?showall=1">Trang chủ</a>
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
          <a class="nav-link active" aria-current="page" href="../Controller/HomeUser.php?spao=ao">Shirt</a>
          <a class="nav-link" href="../Controller/HomeUser.php?spquan=quan">Trousers</a>
          <a class="nav-link" href="../Controller/HomeUser.php?sppk=phukien">Accessory</a>
        </div>
      </div>
       <!-- user -->
     <div class="d-flex align-items-center">
        <a href="../View/User/UserHome.php">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
        </a>
        <a  href="http://localhost/Weclothers/Controller/C_Cart.php" style="margin-left: 20px;">
        <svg xmlns="http://www.w3.org/2000/svg" height="1.8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
        </a>
      </div>
    </div>
  </nav> 
      

    </div>
  </nav>
  <!--  -->
  
  <!-- Search -->
  
    
  <div class="container mt-5">
    <div class="custom-search">
      <form align="center" action="../Controller/HomeUser.php" method="POST">
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


 