<?php 

    class AdminModel{
        private $name;
        private $role;
        private $phone;
        private $email;
        private $password;
        function __construct($name, $role,$phone,$email,$password){
            $this->name = $name;
            $this->role = $role;
            $this->phone = $phone;
            $this->email = $email;
            $this->password = $password;
        }
    
    function getname(){
        return $this->name;
    }
    function getrole(){
        return $this->$role;
    }
      function getphone(){
        return $this->$phone;
    }
      function getemail(){
        return $this->$email;
    }
      function getpass(){
        return $this->$password;
    }
    
        
    }

?>