
<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
* {
    
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    min-height: 100vh;
    background: url(images/html_table.jpg) center / cover;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

main.table {
    width: 75vw;
    height: 80vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
    margin-top:100px;

    
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
}

.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 1.2rem;
    height: 1.2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}

.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}

table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}




    </style>
</head>

<body>
  <?php include "HomeAdmin.php"; ?>
    <main class="table">
        <section class="table__header">
            <h1>Customer's</h1>
           
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <TR>
                        <TH>ID</TH>
                        <TH>Tên Khách Hàng</i></TH>
                        <TH>Mật Khẩu</TH>
                        <TH>Số điện thoại</TH>
                        <TH>Xóa</TH>
                        <TH>Sửa</TH></TR>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0 ; $i < sizeof($khachHangList); $i++)
                    {
                    echo '<TR>
                            <TD>'.$khachHangList[$i]->idkh.'</TD>
                            <TD>'.$khachHangList[$i]->name.'</TD>
                            <TD>'.$khachHangList[$i]->pass.'</TD>
                            <TD>'.$khachHangList[$i]->phone.'</TD>
                            <td><a href="http://localhost/Weclothers/Controller/C_KhachHang.php?delkh='.$khachHangList[$i]->idkh.'"><i class="bx bxs-trash" style="color:#000000" ></i></a></td>
                            <td><a href="http://localhost/Weclothers/Controller/C_KhachHang.php?editkh='.$khachHangList[$i]->idkh.'"><i class="bx bx-expand-horizontal"></i></a></td>
                          </TR>';     
                  }
                  ?>
                </tbody>
            </table>
        </section>
    </main>
   
</body>

</html>