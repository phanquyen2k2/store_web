<?php
include_once("../Model/M_SanPham.php");


function showao(){
  $ao="";
  $modelSanPham = new Model_SanPham();
  $sanPhamDetail = $modelSanPham->getDetailSanPham("ao");
  $ao.='<div class="tieude" style="margin-top:30px;"><h2>Shirt</h2></div>
  </form>
</div>
</div>
';
  $ao.='
  <div class="product-section">
  <div class="container">
    <div class="row">';
        for ($i = 0; $i < sizeof($sanPhamDetail); $i++) {
           $ao.='  <div class="col-md-3 col-lg-3">
           <form action="../Controller/C_Cart.php" method="POST" class="product-card">
             <div class="card text-black">
               <img src="../View/Image/'.$sanPhamDetail[$i]->anh.'" alt="Mô tả hình ảnh" class="card-img-top" alt="Apple Computer" />
               <div class="card-body">
                 <div class="text-center">
                   <h5 class="card-title">OLD SAILOR</h5>
                   <p class="text-muted mb-4">'.$sanPhamDetail[$i]->tensp.'</p>
                 </div>
                 <div>
                   <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamDetail[$i]->gia.'</span>
                          </div>
                          <div class="centered-button">
                          <input type="hidden" name="tensp" value=" '.$sanPhamDetail[$i]->tensp.'">
                          <input type="hidden" name="anh" value="'. $sanPhamDetail[$i]->anh.'">
                          <input type="hidden" name="gia" value="'.$sanPhamDetail[$i]->gia.'">
                          <input type="hidden" name="idsp" value="'. $sanPhamDetail[$i]->idsp.'">
                          <input type="submit" name="dathang" class="btn btn-outline-primary custom-search-button" value="Thêm vào giỏ hàng">
                          </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>';
        }
        
  return $ao;
}
function showquan(){
  $quan="";
  $modelSanPham = new Model_SanPham();
  $sanPhamDetail = $modelSanPham->getDetailSanPham("quan");
  $quan.='<div class="tieude" style="margin-top:30px;"><h2>Trousers</h2></div>
  </form>
</div>
</div>
';
  $quan.='
  <div class="product-section">
  <div class="container">
    <div class="row">';
        for ($i = 0; $i < sizeof($sanPhamDetail); $i++) {
           $quan.='  <div class="col-md-3 col-lg-3">
           <form action="../Controller/C_Cart.php" method="POST" class="product-card">
             <div class="card text-black">
               <img src="../View/Image/'.$sanPhamDetail[$i]->anh.'" alt="Mô tả hình ảnh" class="card-img-top" alt="Apple Computer" />
               <div class="card-body">
                 <div class="text-center">
                   <h5 class="card-title">OLD SAILOR</h5>
                   <p class="text-muted mb-4">'.$sanPhamDetail[$i]->tensp.'</p>
                 </div>
                 <div>
                   <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamDetail[$i]->gia.'</span>
                          </div>
                          <div class="centered-button">
                          <input type="hidden" name="tensp" value=" '.$sanPhamDetail[$i]->tensp.'">
                          <input type="hidden" name="anh" value="'. $sanPhamDetail[$i]->anh.'">
                          <input type="hidden" name="gia" value="'.$sanPhamDetail[$i]->gia.'">
                          <input type="hidden" name="idsp" value="'. $sanPhamDetail[$i]->idsp.'">
                          <input type="submit" name="dathang" class="btn btn-outline-primary custom-search-button" value="Thêm vào giỏ hàng">
                          </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>';
        }
  return $quan;

}
function showpk(){
  $pk="";
    $modelSanPham = new Model_SanPham();
    $sanPhamDetail = $modelSanPham->getDetailSanPham("phukien");
    $pk.='<div class="tieude" style="margin-top:30px;"><h2>Accessory</h2></div>
    </form>
  </div>
  </div>
  ';
    $pk.='
    <div class="product-section">
  <div class="container">
    <div class="row">';
        for ($i = 0; $i < sizeof($sanPhamDetail); $i++) {
           $pk.='  <div class="col-md-3 col-lg-3">
           <form action="../Controller/C_Cart.php" method="POST" class="product-card">
             <div class="card text-black">
               <img src="../View/Image/'.$sanPhamDetail[$i]->anh.'" alt="Mô tả hình ảnh" class="card-img-top" alt="Apple Computer" />
               <div class="card-body">
                 <div class="text-center">
                   <h5 class="card-title">OLD SAILOR</h5>
                   <p class="text-muted mb-4">'.$sanPhamDetail[$i]->tensp.'</p>
                 </div>
                 <div>
                   <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamDetail[$i]->gia.'</span>
                          </div>
                          <div class="centered-button">
                          <input type="hidden" name="tensp" value=" '.$sanPhamDetail[$i]->tensp.'">
                          <input type="hidden" name="anh" value="'. $sanPhamDetail[$i]->anh.'">
                          <input type="hidden" name="gia" value="'.$sanPhamDetail[$i]->gia.'">
                          <input type="hidden" name="idsp" value="'. $sanPhamDetail[$i]->idsp.'">
                          <input type="submit" name="dathang" class="btn btn-outline-primary custom-search-button" value="Thêm vào giỏ hàng">
                          </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>';
          }
    return $pk;

}
function showsearch($seachContent){
  $search="";
  $modelTimKiem = new Model_SanPham();
  $sanPhamList = $modelTimKiem->searchSanPham($seachContent);
  $search.='<div class="tieude" style="margin-top:30px;"><h2>Sản phẩm cần tìm</h2></div>
  </form>
</div>
</div>
';
  $search.='
  <div class="product-section">
  <div class="container">
    <div class="row">';
        for ($i = 0; $i < sizeof($sanPhamList); $i++) {
           $search.='  <div class="col-md-3 col-lg-3">
           <form action="../Controller/C_Cart.php" method="POST" class="product-card">
             <div class="card text-black">
               <img src="../View/Image/'.$sanPhamList[$i]->anh.'" alt="Mô tả hình ảnh" class="card-img-top" alt="Apple Computer" />
               <div class="card-body">
                 <div class="text-center">
                   <h5 class="card-title">OLD SAILOR</h5>
                   <p class="text-muted mb-4">'.$sanPhamList[$i]->tensp.'</p>
                 </div>
                 <div>
                   <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamList[$i]->gia.'</span>
                          </div>
                          <div class="centered-button">
                          <input type="hidden" name="tensp" value=" '.$sanPhamList[$i]->tensp.'">
                          <input type="hidden" name="anh" value="'. $sanPhamList[$i]->anh.'">
                          <input type="hidden" name="gia" value="'.$sanPhamList[$i]->gia.'">
                          <input type="hidden" name="idsp" value="'. $sanPhamList[$i]->idsp.'">
                          <input type="submit" name="dathang" class="btn btn-outline-primary custom-search-button" value="Thêm vào giỏ hàng">
                          </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>';
        }
  return $search;

}
function showall(){
   $all=" ";
            $modelSanPham = new Model_SanPham();
            $sanPhamList = $modelSanPham->getAllSanPham();
            $all.='<div class="tieude" style="margin-top:30px;"><h2>Tất cả các sản phẩm </h2></div>
            </form>
          </div>
          </div>
          ';
    $all.='
    <div class="product-section">
    <div class="container">
      <div class="row">';
          for ($i = 0; $i < sizeof($sanPhamList); $i++) {
             $all.='  <div class="col-md-3 col-lg-3">
             <form action="../Controller/C_Cart.php" method="POST" class="product-card">
               <div class="card text-black">
                 <img src="../View/Image/'.$sanPhamList[$i]->anh.'" alt="Mô tả hình ảnh" class="card-img-top" alt="Apple Computer" />
                 <div class="card-body">
                   <div class="text-center">
                     <h5 class="card-title">OLD SAILOR</h5>
                     <p class="text-muted mb-4">'.$sanPhamList[$i]->tensp.'</p>
                   </div>
                   <div>
                     <div class="d-flex justify-content-between">
                              <span>Giá</span><span>'.$sanPhamList[$i]->gia.'</span>
                            </div>
                            <div class="centered-button">
                            <input type="hidden" name="tensp" value=" '.$sanPhamList[$i]->tensp.'">
                            <input type="hidden" name="anh" value="'. $sanPhamList[$i]->anh.'">
                            <input type="hidden" name="gia" value="'.$sanPhamList[$i]->gia.'">
                            <input type="hidden" name="idsp" value="'. $sanPhamList[$i]->idsp.'">
                            <input type="submit" name="dathang" class="btn btn-outline-primary custom-search-button" value="Thêm vào giỏ hàng">
                            </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>';
         }
return $all;
}

?>