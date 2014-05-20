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
						<h1>Rentar Cosas</h1>
						<p>Organiza, y Controla tus Cosas Rentadas</p>
				</div>
			</div>
<?php
include "_menu_.php";
?>			
			<div class="row">
				<div class="col-md-12">
					<h2>Lista de Clientes</h2>
<?php
$db = new Database();
$con = $db->connect();
$query=$con->query("select * from user where is_admin=0");
$cnt=0;
while($r=$query->fetch_array()){$cnt++;}

if($cnt>0){
	?>
	<table class="table table-bordered table-hover">
	<thead>
		<th></th>
		<th>Nombre</th>
		<th>Correo Electronico</th>
	</thead>
	<?php
	$query=$con->query("select * from user where is_admin=0");
	while($r=$query->fetch_array()){
		echo "<tr>";
		echo "<td><a href='view_client.php?id=$r[id]' class='btn btn-default btn-sm'><i class='glyphicon glyphicon-eye-open'></i></a></td>";
		echo "<td>".$r["name"]." ".$r["lastname"]."</td>";
		echo "<td>".$r["email"]."</td>";

		echo "</tr>";
	}?>
</table>
	<?php
}

?>


				</div>
				</div>
			</div>
		</div>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>