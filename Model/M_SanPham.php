<?php
include_once("../Model/E_SanPham.php");
class Model_SanPham
{   
   
    public function getAllSanPham()
    {        
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "select * from sanpham";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        $i = 0;
        while ($row!= null)
        {
            $idsp = $row['idsp'];
            $tensp = $row['tensp'];
            $gia = $row['gia'];
            $anh = $row['anh'];
            $loaisp=$row['loaisp'];
            $sanPhamList[$i++] = new Entity_SanPham($idsp,$tensp,$gia,$anh,$loaisp);
            $row = mysqli_fetch_array($rs);
        }
        return $sanPhamList;
    }
    public function getDetailSanPham($loaisp)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "SELECT * FROM sanpham WHERE loaisp = '$loaisp'";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        $i=0;
        while ($row!= null)
        {
            $idsp = $row['idsp'];
            $tensp = $row['tensp'];
            $gia = $row['gia'];
            $anh = $row['anh'];
            $loaisp=$row['loaisp'];
            $sanPhamDetail[$i++] = new Entity_SanPham($idsp,$tensp,$gia,$anh,$loaisp);
            $row = mysqli_fetch_array($rs);
        }
        return $sanPhamDetail;
        
    }
    public function getDetailSanPhamByID($idsp)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "SELECT * FROM sanpham WHERE idsp = '$idsp'";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        if($row==null) return null;
       
            $idsp = $row['idsp'];
            $tensp = $row['tensp'];
            $gia = $row['gia'];
            $anh = $row['anh'];
            $loaisp=$row['loaisp'];
            $sanPhamList = new Entity_SanPham($idsp,$tensp,$gia,$anh,$loaisp);
        return $sanPhamList;
    }
    public function addSanPham($tensp,$gia,$anh,$loaisp)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");

        //check if idnv already exist - notyet
        $sql = "INSERT INTO sanpham(tensp,gia,anh,loaisp) VALUES ('$tensp','$gia','$anh','$loaisp')";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    public function deleteSanPham($idsp)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "DELETE from sanpham WHERE idsp = '$idsp'";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    public function updateSanPham($idsp,$tensp,$gia,$anh,$loaisp)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "UPDATE sanpham
        set 
            tensp = '$tensp',
            gia = '$gia',
            anh = '$anh',
            loaisp='$loaisp'
        WHERE idsp = '$idsp'";
        $rs = mysqli_query($link,$sql);
        return $rs;
    }
    public function addCart($idsp)
    {
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "SELECT * FROM sanpham WHERE idsp = '$idsp'";
        $listSanPham= mysqli_query($link,$sql);
        return $listSanPham;
    }
    
    
    public function searchSanPham($searchContent)
    {   
    $link = mysqli_connect("127.0.0.1", "root", "", "web_store");

    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM sanpham WHERE tensp LIKE '%$searchContent%'";
    $rs = mysqli_query($link, $sql);

    if (!$rs) {
        die("Query failed: " . mysqli_error($link));
    }

    $sanPhamList = array(); // Initialize the array to store results
    while ($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) {
        $idsp = $row['idsp'];
        $tensp = $row['tensp'];
        $gia = $row['gia'];
        $anh = $row['anh'];
        $loaisp = $row['loaisp'];
        $sanPhamList[] = new Entity_SanPham($idsp, $tensp, $gia, $anh, $loaisp);
    }

    mysqli_free_result($rs);
    mysqli_close($link);

    if (empty($sanPhamList)) {
        echo "<script> alert('Không tìm thấy sản phẩm bạn cần') </script>"; 
       
         exit(); // Ensure that the script stops execution after redirection
    }

    return $sanPhamList;
   
}

}

?>
