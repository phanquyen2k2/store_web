<?php
    class Entity_LichSuMuaHang
    {   public $idls;
        public $tenkh;
        public $soluong;
        public $tongtien;
        public $phone;
        public $diachi;
    
        public function __construct($idls,$tenkh,$soluong,$tongtien,$phone,$diachi)
        {   $this->idls=$idls;
            $this->tenkh = $tenkh;
            $this->soluong = $soluong;
            $this->tongtien = $tongtien;
            $this->phone= $phone;
            $this->diachi= $diachi;
        }
    }
   
   
?>