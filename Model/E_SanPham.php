<?php
    class Entity_SanPham
    {
        public $idsp;
        public $tensp;
        public $gia;
        public $anh;
        public $loaisp;
    
        public function __construct($idsp, $tensp, $gia, $anh,$loaisp)
        {
            $this->idsp = $idsp;
            $this->tensp = $tensp;
            $this->gia = $gia;
            $this->anh = $anh;
            $this->loaisp=$loaisp;
        }
    }
?>