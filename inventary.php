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
					<h2>Lista de Cosas</h2>
<?php
$db = new Database();
$con = $db->connect();
$query=$con->query("select * from stuff");
$cnt=0;
while($r=$query->fetch_array()){$cnt++;}

if($cnt>0){
	?>
	<table class="table table-bordered table-hover">
	<thead>
		<th></th>
		<th>Nombre</th>
		<th>Disponible</th>
		<th>Activo</th>
	</thead>
	<?php
	$query=$con->query("select * from stuff");
	while($r=$query->fetch_array()){
		echo "<tr>";
		echo "<td><a href='plus_stuff.php?id=$r[id]' class='btn btn-primary btn-sm'><i class='glyphicon glyphicon-plus'></i></a> <a href='history.php?id=$r[id]' class='btn btn-default btn-sm'><i class='glyphicon glyphicon-time'></i></a></td>";
		echo "<td>".$r["name"]."</td>";
		echo "<td>";
		$c=0;
		$query2=$con->query("select * from rent where stuff_id=$r[id]");
		while($rs=$query2->fetch_array()){
			if($rs["is_input"]==1){
				$c += $rs["cantity"];
			}
		}
		echo $c;


		echo "</td>";
		echo "<td>";
		if($r["is_active"]==1){
		echo "<center><i class='glyphicon glyphicon-ok'></i></center>";
		}
		echo "</td>";
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