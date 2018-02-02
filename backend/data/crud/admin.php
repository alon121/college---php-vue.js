<?php

$conn = new mysqli("localhost", "root", "", "fsp");
if($conn->connect_error){
	die("Could not connect to database!");
}

$res = array();

$action = 'read';

if(isset($_GET['action'])){
	$action = $_GET['action'];
}


if($action == 'read'){
	$result = $conn->query("SELECT * FROM `administrator`");
//	$administrators = array();

	while($row = $result->fetch_assoc()){
		array_push($res, $row);
	}

//	$res[] = $administrators;
}

//if($action == 'create'){
//
//	$username = $_POST['username'];
//	$email = $_POST['email'];
//	$mobile = $_POST['mobile'];
//
//	$result = $conn->query("INSERT INTO `administrator` (`username`, `email`, `mobile`) VALUES ('$username', '$email', '$mobile') ");
//	
//	if($result){
//		$res['message'] = "User added successfully";
//	} else{
//		$res['error'] = true;
//		$res['message'] = "Could not insert user";
//	}
//}
//
//if($action == 'update'){
//	$id = $_POST['id'];
//	$username = $_POST['username'];
//	$email = $_POST['email'];
//	$mobile = $_POST['mobile'];
//
//	$result = $conn->query("UPDATE `users` SET `administrator` = '$username', `email` = '$email', `mobile` = '$mobile' WHERE `id` = '$id'");
//	
//	if($result){
//		$res['message'] = "User updated successfully";
//	} else{
//		$res['error'] = true;
//		$res['message'] = "Could not update user";
//	}
//
//}
//
//if($action == 'delete'){
//	$id = $_POST['id'];
//	
//
//	$result = $conn->query("DELETE FROM `administrator` WHERE `id` = '$id'");
//	
//	if($result){
//		$res['message'] = "User deleted successfully";
//	} else{
//		$res['error'] = true;
//		$res['message'] = "Could not delete administrator";
//	}
//
//}


$conn->close();

header("Content-type: application/json");
echo json_encode($res);
die();