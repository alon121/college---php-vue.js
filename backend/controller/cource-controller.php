?php
require_once('../data/bl.php');
require_once('../data/DAL.php');
?>

<?php

    class CourceController{
    private $courcemodel;
    public $valarr;
    private $val;
    public function __construct($Model){
        $this->connectModel =$Model; 
    }
    
    public function addcource($courcename,$courcedeck,$courcepic)
    {
        $conn = new bl();
//        $valarr = [$adminname,$adminrole,$adminphone,$adminmail,$adminpass];
        
        $conn = $conn->addnewcource($courcename,$courcedeck,$courcepic);
        if($conn == true){
            return true;
        }
    }

        
    }

?>