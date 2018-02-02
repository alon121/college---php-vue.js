<?php
   
    
class DAL {
   
            private $host = '127.0.0.1';
            private $db   = 'fsp';
            private $user = 'root';
            private $pass = '';
            private $charset = 'utf8';
            private $dsn;
            private $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            private $mydb = 'fsp';
    
    function __construct() {
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $this->mydb = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
    }
    


function getdb() {
    $mydb = $this->mydb;
    return $mydb;
}
    
function RetJson($query) {
    $arr = [];
    while($row = $result->fetch_assoc()){
		array_push($res, $row);
	}
    return json_encode($res);
}
// returns a table from DB as array
function GetAllTable($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return $mytable = $table->fetchAll();
    //  return $mytable = $table->fetchAll(PDO::FETCH_CLASS, $classname);
    
}
// searches for a id in a table and returns the count of the result
function runquery($query) {

    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return $table->rowCount();
}
function getLineById($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return $mytable = $table->fetchAll();
}
function updateSQL($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return true;
}
function insertSQL($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return true;
}
function deleteSQL($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return true;
}
function innerJoion($query) {
    $DB = $this->getDB();
    $table = $DB->prepare($query);
    $table->execute();
    return $mytable = $table->fetchAll();
}
        
}