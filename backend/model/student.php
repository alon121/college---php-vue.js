<?php namespace mydata;

    class student{
        private $name;
        private $phone;
        private $email; 
        private $img;
    function __constract($name,$phone, $email, $img){
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
            $this->img = $img;
            
        }
    }


?>
