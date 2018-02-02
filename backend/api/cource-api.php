<?php
require_once('../model/cource-model.php');
require_once('../controller/cource-controller.php');
require_once('../data/bl.php');

?>
<?php

    if(isset($_POST["courcename"]))
    {
    $courcename = $_POST["courcename"];
      
    if (isset($_POST["courcedeck"]))
    $courcedeck = $_POST["courcedeck"]; 
        
     if (isset($_POST["courcepic"]))
    $courcepic = $_POST["courcepic"]; 
        
       
    $courcemodel = new CourceModel($courcename,$courcedeck,$courcepic);
    $courcecontroller = new CourceController($courcemodel);
    $adddata = $courcecontroller->addcource($courcename,$courcedeck,$courcepic);
        
    }
        else{
               echo 'pro';                       
        }
   
    
    
?>