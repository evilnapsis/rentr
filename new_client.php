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
				<h2>Agregar Cliente</h2>
				<div class="well">
<form class="form-horizontal" role="form" method="post" action="add_client.php">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del cliente">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellido del cliente">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="email" name="email" placeholder="Email del cliente">
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña del cliente">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cliente</button>
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