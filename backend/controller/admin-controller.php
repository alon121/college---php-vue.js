?php
require_once('../data/bl.php');
require_once('../data/DAL.php');
?>

<?php

    class AdminController{
    private $adminmodel;
    public $valarr;
    private $val;
    public function __construct($Model){
        $this->connectModel =$Model; 
    }
    
    public function addadmin($adminname,$adminrole,$adminphone,$adminmail,$adminpass)
    {
        $conn = new bl();
//        $valarr = [$adminname,$adminrole,$adminphone,$adminmail,$adminpass];
        
        $conn = $conn->addnewadmin($adminname,$adminrole,$adminphone,$adminmail,$adminpass);
        if($conn == true){
            return true;
        }
    }

        
    }

?>