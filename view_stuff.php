<?php
include "user_valid.php";
?>
<html>
	<head>
		<meta charset="utf8"/>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>

	</head>
	<body>
	<div class="container">
<div class="row">
				<div class="col-md-12">
						<h2>Rentar Cosas</h2>
						<p>Organiza, y Controla tus Cosas Rentadas</p>
				</div>
			</div>
<?php
include "_menu_.php";
?>			
			<div class="row">
				<div class="col-md-12">
<?php
if(isset($_COOKIE["added"])){
	echo "<p class='alert alert-success'>Se ha agregado exitosamente la cosa a la base de datos.</p>";
	setcookie("added","",time()-18600);
}

?>
				<div class="jumbotron">
<?php
$db = new Database();
$con = $db->connect();
$query=$con->query("select * from stuff where id=$_GET[id]");
$id="";
while($r=$query->fetch_array()){
echo "<h2>$r[name]</h2>";
echo "<p>$r[description]</p>";
$id = $r["id"];
$price = $r["price"];
echo <<<EEE
<a href="" class="btn btn-lg btn-primary pull-right">$ $price</a>
EEE;
}

?>
<div class="clearfix"></div>
</div>
<?php

echo <<<AAA
<div class="pull-right">
<a href="" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Editar </a>
<a href="" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar </a>
</div>
AAA;

?>
				</div>
				</div>
			</div>
		</div>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>