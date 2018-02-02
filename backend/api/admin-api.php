<?php
require_once('../model/admin-model.php');
require_once('../controller/admin-controller.php');
require_once('../data/bl.php');

?>
<?php

    if(isset($_POST["adminname"]))
    {
    $adminnamer = $_POST["adminname"];
      
    if (isset($_POST["adminrole"]))
    $adminrole = $_POST["adminrole"]; 
        
     if (isset($_POST["adminphone"]))
    $adminphone = $_POST["adminphone"]; 
        
    if (isset($_POST["adminmail"]))
    $adminmail = $_POST["adminmail"];  
        
     if (isset($_POST["adminpass"]))
    $adminpass = $_POST["adminpass"]; 
       
    $adminmodel = new AdminModel($adminnamer,$adminrole,$adminphone,$adminmail,$adminpass);
    $admincontroller = new AdminController($adminmodel);
    $adddata = $admincontroller->addadmin($adminnamer,$adminrole,$adminphone,$adminmail,$adminpass);
        
    }
        else{
               echo 'pro';                       
        }
   
    
    
?>