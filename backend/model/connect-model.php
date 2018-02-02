<?php 

    class connectModel{
        private $username;
        private $pass;
        function __construct($username, $pass){
            $this->username = $username;
            $this->pass = $pass;  
        }
    
    function getuser(){
        return $this->username;
    }
    function getpass(){
        return $this->$pass;
    }
    }

?>