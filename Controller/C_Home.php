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
    <div class="main">';
        for ($i = 0; $i < sizeof($sanPhamDetail); $i++) {
           $ao.=' <div class="product-card col-md-4 col-lg-3">
                    <div class="card text-black">
                      <img src="../View/Image/'.$sanPhamDetail[$i]->anh.'" alt="Mô tả hình ảnh"
                        class="card-img-top" alt="Apple Computer" />
                      <div class="card-body">
                        <div class="text-center">
                          <h5 class="card-title">OLD SAILOR</h5>
                          <p class="text-muted mb-4">'.$sanPhamDetail[$i]->tensp.'</p>
                        </div>
                        <div>
                          <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamDetail[$i]->gia.'</span>
                          </div>
                          
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4"></div>
                      </div>
                    </div>
                  </div>  
              </div>
            </div>
           </div>
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
    <div class="main">
     ';
        for ($i = 0; $i < sizeof($sanPhamDetail); $i++) {
           $quan.=' <div class="product-card col-md-4 col-lg-3">
                    <div class="card text-black">
                      
                      <img src="../View/Image/'.$sanPhamDetail[$i]->anh.'" alt="Mô tả hình ảnh"
                        class="card-img-top" alt="Apple Computer" />
                      <div class="card-body">
                        <div class="text-center">
                          <h5 class="card-title">OLD SAILOR</h5>
                          <p class="text-muted mb-4">'.$sanPhamDetail[$i]->tensp.'</p>
                        </div>
                        <div>
                          <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamDetail[$i]->gia.'</span>
                          </div>
                          
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4"></div>
                      </div>
                    </div>
                  </div>  
              </div>
            </div>
           </div>
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
      <div class="main">';
          for ($i = 0; $i < sizeof($sanPhamDetail); $i++) {
             $pk.=' <div class="product-card col-md-4 col-lg-3">
                      <div class="card text-black">
                        
                        <img src="../View/Image/'.$sanPhamDetail[$i]->anh.'" alt="Mô tả hình ảnh"
                          class="card-img-top" alt="Apple Computer" />
                        <div class="card-body">
                          <div class="text-center">
                            <h5 class="card-title">OLD SAILOR</h5>
                            <p class="text-muted mb-4">'.$sanPhamDetail[$i]->tensp.'</p>
                          </div>
                          <div>
                            <div class="d-flex justify-content-between">
                              <span>Giá</span><span>'.$sanPhamDetail[$i]->gia.'</span>
                            </div>
                            
                          </div>
                          <div class="d-flex justify-content-between total font-weight-bold mt-4"></div>
                        </div>
                      </div>
                    </div>  
                </div>
              </div>
             </div>
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
    <div class="main">';
        for ($i = 0; $i < sizeof($sanPhamList); $i++) {
           $search.=' <div class="product-card col-md-4 col-lg-3">
                    <div class="card text-black">
                      
                      <img src="../View/Image/'.$sanPhamList[$i]->anh.'" alt="Mô tả hình ảnh"
                        class="card-img-top" alt="Apple Computer" />
                      <div class="card-body">
                        <div class="text-center">
                          <h5 class="card-title">OLD SAILOR</h5>
                          <p class="text-muted mb-4">'.$sanPhamList[$i]->tensp.'</p>
                        </div>
                        <div>
                          <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamList[$i]->gia.'</span>
                          </div>
                          
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4"></div>
                      </div>
                    </div>
                  </div>  
              </div>
            </div>
           </div>
          </div>';
        }
  return $search;

}
function showall(){
   $all=" ";
            $modelSanPham = new Model_SanPham();
            $sanPhamList = $modelSanPham->getAllSanPham();
            $all.='<div class="tieude" style="margin-top:30px;"><h2>Tất cả các sản phẩm</h2></div>
            </form>
          </div>
          </div>
          ';
    $all.='
    <div class="product-section">
    <div class="container">
      <div class="main">
     ';
        for ($i = 0; $i < sizeof($sanPhamList); $i++) {
           
            $all.='<div class="product-card col-md-4 col-lg-3">
                    <div class="card text-black">
                      <img src="../View/Image/'.$sanPhamList[$i]->anh.'" alt="Mô tả hình ảnh"
                        class="card-img-top" alt="Apple Computer" />
                      <div class="card-body">
                        <div class="text-center">
                          <h5 class="card-title">OLD SAILOR</h5>
                          <p class="text-muted mb-4">'.$sanPhamList[$i]->tensp.'</p>
                        </div>
                        <div>
                          <div class="d-flex justify-content-between">
                            <span>Giá</span><span>'.$sanPhamList[$i]->gia.'</span>
                          </div>
                          
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4"></div>
                      </div>
                    </div>
                  </div>';
         }
return $all;
}
?>