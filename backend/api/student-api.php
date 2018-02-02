<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    require_once '../controller/student-controller.php';

    class courceapi extends api{
        private $action;
        public $conn;
        function __construct($action){
        $this->action = $action;
        $conn = new coursecontroller();  
        }
        
        function action($action){
           if($action == "getlist"){
            $res = $conn->getlist();   
           } 
      
        
    }

?>