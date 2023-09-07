<?php
    class Entity_KhachHang
    {
        public $idkh;
        public $name;
        public $pass;
        public $phone;
    
        public function __construct($idkh, $name, $pass, $phone)
        {
            $this->idkh = $idkh;
            $this->name = $name;
            $this->pass = $pass;
            $this->phone = $phone;
        }
    }
   
?>