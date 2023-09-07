
                  <!--  -->
                  <?php
                    session_start();
                    include __DIR__ . '/../../Controller/C_XuliCart.php';
                    if(isset($_SESSION['cart'])){ 
                   
                      echo showcart($_SESSION['cart']); 
                
                    } ?>
               