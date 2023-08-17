<?php
    class Entity_KhachHang
    {
        public $id;
        public $name;
        public $pass;
        public $phone;
    
        public function __construct($id, $name, $pass, $phone)
        {
            $this->id = $id;
            $this->name = $name;
            $this->pass = $pass;
            $this->phone = $phone;
        }
    }
    // class Entity_KhachHang {
    //     private $id;
    //     private $name;
    //     private $pass;
    //     private $phone;
    
    //     public function __construct($id, $name, $pass, $phone) {
    //         $this->id = $id;
    //         $this->name = $name;
    //         $this->pass = $pass;
    //         $this->phone = $phone;
    //     }
    
    //     public function getId() {
    //         return $this->id;
    //     }
    
    //     public function getName() {
    //         return $this->name;
    //     }
    
    //     public function getPass() {
    //         return $this->pass;
    //     }
    
    //     public function getPhone() {
    //         return $this->phone;
    //     }
    
    //     public function setName($name) {
    //         $this->name = $name;
    //     }
    
    //     public function setPass($pass) {
    //         $this->pass = $pass;
    //     }
    
    //     public function setPhone($phone) {
    //         $this->phone = $phone;
    //     }
    // }
    
?>