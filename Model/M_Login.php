<?php

class Model_Login
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function checkAccount()
    {
        $isTrueAccount = false;
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "select * from admin";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        while ($row != null)
        {
            if ($row['name'] == $this->username && $row['pass'] == $this->password)
            {
                $isTrueAccount = true;
                return $isTrueAccount;
            } 
            $row = mysqli_fetch_array($rs);
        }
        
        return false;
    }
    public function checkAccountUser()
    {
        $isTrueAccount = false;
        $link = mysqli_connect("127.0.0.1","root","","web_store");
        $sql = "select * from user";
        $rs = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($rs);
        while ($row != null)
        {
            if ($row['name'] == $this->username && $row['pass'] == $this->password)
            {
                $isTrueAccount = true;
                return $isTrueAccount;
            } 
            $row = mysqli_fetch_array($rs);
        }
      
        return false;
    }
   
}


?>