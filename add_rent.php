<?php
include "user_valid.php";

if(count($_POST)>0){

$base = new Database();
$con = $base->connect();

if(!isset($_POST["is_input"])){
// si no es una entrada


echo $sql = "insert into rent (client_id,stuff_id,days,created_at) value(\"$_POST[client_id]\",\"$_POST[stuff_id]\",\"$_POST[days]\",NOW())";
$q= $con->query($sql);

if($q){
	$id=$con->insert_id;
	 setcookie("added","added");
	 header("Location: view_rent.php?id=$id");	

}else{
	 header("Location: home.php");
}
}else{
	// si es una entrada

echo $sql = "insert into rent (client_id,stuff_id,days,cantity,is_input,created_at) value(\"$_SESSION[user_id]\",\"$_POST[stuff_id]\",0,\"$_POST[cantity]\",1,NOW())";
$q= $con->query($sql);

if($q){
	$id=$con->insert_id;
	 setcookie("added","added");
	 header("Location: inventary.php");	

}else{
	 header("Location: home.php");
}


}

}



?>