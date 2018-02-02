<?php
// abstract class for create Rest api with CRUD model
   abstract class absapi{
       
       abstract function create($param);
       abstract function read($param);
       abstract function update($param);
       abstract function delete($param);
       
       public function toapi($method, $param)
       {
           switch($method){
               case "POST":
                return $this->create($param);
                case "get"
                return $this->read($param);
                case "put":
                return $this->update($param);
                case "delete"
                return $this->delete($param);
           }
       }
       
    }

?>