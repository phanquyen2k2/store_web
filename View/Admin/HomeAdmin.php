<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Sidebar Menu | Side Navigation Bar</title>
    <!-- CSS -->
    <style>
        /* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100%;
  background: #ffffffee;
}
nav {
  position: fixed;
  top: 0;
  left: 0;
  height: 70px;
  width: 100%;
  display: flex;
  align-items: center;
  background: #fff;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
  margin-right: 50px;
}
nav .logo {
  display: flex;
  align-items: center;
  margin: 0 24px;
}
.logo .menu-icon {
  color: #333;
  font-size: 24px;
  margin-right: 14px;
  cursor: pointer;
}
.logo .logo-name {
  color: #333;
  font-size: 22px;
  font-weight: 500;
}
nav .sidebar {
  position: fixed;
  top: 0;
  left: 0%;
  height: 100%;
  width: 260px;
  padding: 20px 0;
  background-color: #eee;
  box-shadow: 0 5px 1px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
}

.sidebar .sidebar-content {
  display: flex;
  height: 100%;
  flex-direction: column;
  justify-content: space-between;
  padding: 30px 16px;
}
.sidebar-content .list {
  list-style: none;
}
.list .nav-link {
  display: flex;
  align-items: center;
  margin: 8px 0;
  padding: 14px 12px;
  border-radius: 8px;
  text-decoration: none;
}
.lists .nav-link:hover {
  background-color: #4070f4;
}
.nav-link .icon {
  margin-right: 14px;
  font-size: 20px;
  color: #707070;
}
.nav-link .link {
  font-size: 16px;
  color: #707070;
  font-weight: 400;
}
.lists .nav-link:hover .icon,
.lists .nav-link:hover .link {
  color: #fff;
}
.overlay {
  position: fixed;
  top: 0;
  left: -100%;
  height: 1000vh;
  width: 200%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.4s ease;
  background: rgba(0, 0, 0, 0.3);
}

    </style>
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Old Sailor</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="http://localhost/Weclothers/Controller/C_SanPham.php?spadmin=admin" class="nav-link">
                <i class='bx bxs-t-shirt icon' style='color:#000000' ></i>
                <span class="link">Products</span>
              </a>
            </li>
            <li class="list">
              <a href="http://localhost/Weclothers/Controller/C_SanPham.php?spadd=add"  class="nav-link">
                <i class='bx bx-layer-plus icon'></i>
                <span class="link">Add Products</span>
              </a>
            </li>
            <li class="list">
              <a href="http://localhost/Weclothers/Controller/C_KhachHang.php" class="nav-link">
                <i class='bx bx-user icon'></i>
                <span class="link">Customers</span>
              </a>
            </li>
            <li class="list">
              <a href="http://localhost/Weclothers/Controller/C_SanPham.php?lichsu=1" class="nav-link">
                <i class='bx bx-bar-chart-alt-2 icon'></i>
                <span class="link">Statistical</span>
              </a>
            </li>
         
          </ul>

          <div class="bottom-cotent">
           
            <li class="list">
              <a href='http://localhost/Weclothers/View/HomeShow.php' class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>
    <div id="dashboard" class="content" style="width:280px">
  
    </div>


   
<!-- ... và tiếp tục cho các trang khác -->

  </body>
</html>

