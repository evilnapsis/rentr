<?php
include "user_valid.php";

if(count($_POST)>0){
$base = new Database();
$con = $base->connect();
$is_active = 0;

$sql = "insert into user (name,lastname,email,password,created_at) value(\"$_POST[name]\",\"$_POST[lastname]\",\"$_POST[email]\",\"".sha1(md5($_POST["email"]))."\",NOW())";
$q= $con->query($sql);

if($q){
	$id=$con->insert_id;
	setcookie("added","added");
	header("Location: view_client.php?id=$id");	
}

}else{
	header("Location: home.php");
}
?>