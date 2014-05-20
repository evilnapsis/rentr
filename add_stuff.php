<?php
include "user_valid.php";

if(count($_POST)>0){
$base = new Database();
$con = $base->connect();
$is_active = 0;
if(isset($_POST["is_active"])){$is_active=1;}

$sql = "insert into stuff (name,description,price,is_active,created_at) value(\"$_POST[name]\",\"$_POST[description]\",\"$_POST[price]\",$is_active,NOW())";
$q= $con->query($sql);

if($q){
	$id=$con->insert_id;
	setcookie("added","added");
	header("Location: view_stuff.php?id=$id");	
}

}else{
	header("Location: home.php");
}
?>