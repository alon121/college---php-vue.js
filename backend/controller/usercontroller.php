<?php


class connectController{
    private $connectModel;
        
    public function __construct($Model){
        $this->connectModel =$Model; 
    }
    
    public function checkUser($user,$pass)
    {
        $conn = new bl();
        $conn = $conn->getuser('administrator',$user,$pass);
        if($conn == true){
            return true;
        }
    }
    
    ?>