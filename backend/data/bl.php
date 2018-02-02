<?php
require_once ('dal.php');
class bl {
private $DB;
    function __construct() {
        $this->DB = new DAL();
    }
    
// get table name and colums and return query
//  function getcolfromtable($table, $col) {
//        $res = $this->DB->=basicquery("SELECT $col FROM $table" );
//        return $res;
//    }
    
function addnewadmin($adminname,$adminrole,$adminphone,$adminmail,$adminpass) {
        $query = "INSERT INTO administrator (name,role,phone,email,password) VALUES ('$adminname','$adminrole','$adminphone','$adminmail','$adminpass')";
        $Create = $this->DB->insertSQL($query);
        return $Create;
}  

    function addnewcource($courcename,$courcedeck,$courcepic) {
        $query = "INSERT INTO courses (name,description,image) VALUES ('$courcename','$courcedeck','$courcepic')";
        $Create = $this->DB->insertSQL($query);
        return $Create;
}
  function SelectAlladmins($table_name) {
        $res = $this->DB->GetAllTable("SELECT name FROM `".$table_name."`");
        return $res;
    }
    
// checks if a id exists on a id row in a DB and returns true or false
 function Check_if_id_exists($table_name, $id) {
        $res =  $this->DB->CheckId("SELECT id FROM ".$table_name." WHERE id='$id'");
        $istrue = ($res > 0 ?  true : false);
        return $istrue;
    }
    
    // check if have username with name and password
 function getuser($table_name, $username,$pass) {
        $res =  $this->DB->runquery("SELECT*FROM $table_name WHERE name = '$username' AND password =$pass");
        $istrue = ($res > 0 ?  true : false);
        return $istrue;
    }


//        // check if have username with this password
//        function getpass($table_name, $user, $pass) 
//        {
//        $result =  $this->DB->runquery();
//        $istrue = ($result > 0 ?  true : false);
//        return $istrue;
//    }
    
    // check if have username with this password
 function userpass($table_name, $pass) {
        $res =  $this->DB->CheckId("SELECT name FROM ".$table_name." WHERE name='$username'");
        $istrue = ($res > 0 ?  true : false);
        return $istrue;
    }
   
 function getLineById($table_name, $id) {
    $res =  $this->DB->getLineById("SELECT * FROM ".$table_name." WHERE id='$id'");
    return $res;
}
 // updates data in a table 
 function update_table($table_name, $id, $updateValues) {
        $update = $this->DB->updateSQL("UPDATE ".$table_name." SET ".$updateValues." WHERE id='$id'");
        return $update;
}

function add_new_admin($name,$role,$phone,$email,$password){
    $query = "INSERT INTO administrator( name,role,phone,email,password ) VALUES($name,$role,$phone,$email,$password)";
    $Create = $this->DB->insertSQL($query, $exicute);
}
    
    
 function create_new_row($table_name, $column, $values, $exicute) {
        $query = "INSERT INTO ".$table_name."(".$column.") VALUES (".$values.")";
        $Create = $this->DB->insertSQL($query, $exicute);
        return $Create;
}
function selectlastRow($table_name){
    $selcet = $this->DB->getLineById("SELECT * FROM ".$table_name." ORDER BY Id DESC LIMIT 1");
    return $selcet;
    
}
 function DeleteRow($table_name, $id) {
        $delete = $this->DB->deleteSQL("DELETE FROM ".$table_name." WHERE id =". $id);
        return $delete;
}
function DeleteRowbyRowName($table_name, $rowname, $param1, $rowname2, $param2) {
    $delete = $this->DB->deleteSQL("DELETE FROM ".$table_name." WHERE " . $rowname. " = ". $param1. " AND " . $rowname2. " = ". $param2);
    return $delete;
}
function innerJoin($selected_tables, $table1, $table2, $Column_equal_to) {
    $innerJion = $this->DB->innerJoion("SELECT ". $selected_tables." FROM ". $table1 ." INNER JOIN " .$table2." ON ". $Column_equal_to);
    return $innerJion;
}
// inner join 3 tables
function innerJoin3table($selected_rows, $table1, $table2, $table3, $Column_equal_to, $Column_equal_to2, $where) {
    $innerJion3 = $this->DB->innerJoion("SELECT ". $selected_rows." FROM ". $table1 ." INNER JOIN " .$table3." ON ". $Column_equal_to ." INNER JOIN " .$table2." ON ". $Column_equal_to2. " WHERE ". $where);
    return $innerJion3;
}
}
    
        