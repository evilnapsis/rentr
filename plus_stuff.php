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
				<div class="col-md-8 col-md-offset-2">
				<h2>Agregar Renta</h2>
				<div class="well">
<form class="form-horizontal" role="form" method="post" action="add_rent.php">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cosa</label>
    <div class="col-lg-10">
<?php
$db = new Database();
$con = $db->connect();
$query=$con->query("select * from stuff where id=$_GET[id]");
$cnt=0;
while($r=$query->fetch_array()){$cnt++;}

if($cnt>0){
  ?>
  <select name="stuff_id" class="form-control">
  <?php
  $query=$con->query("select * from stuff where id=$_GET[id]");
  while($r=$query->fetch_array()){
    echo "<option value=".$r["id"].">".$r["name"]." ".$r["lastname"]."</option>";
  }?>
</select>
  <?php
}
?>    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cantidad</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="cantity" name="cantity" placeholder="Cantidad">
      <input type="hidden" name="is_input" value="1">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Renta</button>
    </div>
  </div>
</form>
				</div>
				</div>
			</div>
		</div>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>