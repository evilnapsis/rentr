<?php
include "user_valid.php";

if(count($_POST)>0){
$base = new Database();
$con = $base->connect();
$is_active = 0;

echo $sql = "insert into rent (client_id,stuff_id,days) value(\"$_POST[client_id]\",\"$_POST[stuff_id]\",\"$_POST[days]\")";
$q= $con->query($sql);

if($q){
	$id=$con->insert_id;
	 setcookie("added","added");
	 header("Location: view_rent.php?id=$id");	
}

}else{
	 header("Location: home.php");
}
?>