<?php

$method = $_SERVER['REQUEST_METHOD']; 

    if($param == 'admins')
    $newapi == new adminapi($param);
    $res = $newapi->returnres($method,$param)

?>