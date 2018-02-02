<?php
    
    require_once 'basic-controller.php';
    require_once '../data/bl.php';
    class studentcontroller extends basicCon{
        
        private $action;
        private $db;
        public $res;
        function __construct($action){
        $this->action = $action;
        $this->db = new bl();
        $this->res = checkaction($action);
        }
        
        function checkaction($action){
            if{
            $action == 'listadmin';
            $res = $db->getcolfromtable('students','name');   
            }
       
        }
        
    }


?>