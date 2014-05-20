<?php

include("includes/Database.php");

$user = $_POST['email'];
$pass = sha1(md5($_POST['password']));

$base = new Database();
$con = $base->connect();
 $sql = "select * from user where email= \"".$user."\" and password= \"".$pass."\"";
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
	session_start();
	$_SESSION['user_id']=$userid ;
	print "Cargando ... $user";
	print "<script>window.location='home.php';</script>";
}else {
	print "<script>window.location='index.php';</script>";
}
?>