<?php namespace mydata;

    class administrator{
        private $name;
        private $role;
        private $phone;
        private $email; 
        private $password;
        function __constract($name,$role,$phone,$email,$password)
        {
            $this->name = $name;
            $this->role = $role;
            $this->phone = $phone;
            $this->email = $email;
            $this->password = $password;
             
        }
    }