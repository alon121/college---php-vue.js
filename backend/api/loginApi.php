<?php
require_once('../model/connect-model.php');
require_once('../controller/connect-controller.php');
require_once('../data/bl.php');

?>
<?php

    if(isset($_POST["password"]))
    {
    $password = $_POST["password"];
        
    if (isset($_POST["username"]))
    {
        $user = $_POST["username"];
        $connectModel = new connectModel($user,$password);
        $ConController = new connectController($connectModel); 
        
        $haveuser =  $ConController->checkUser($user,$password);
       
       /* $UserProp = $ConController->checkUser();    
        var_dump($UserProp);
        die();
        */
     
            if($haveuser == true && havepass == true){
            
            header("Location:../../frontend/pages/main.html");
        }
        else{
                header("Location:../../frontend/pages/error.html");                        
        }
    
    }}

?>