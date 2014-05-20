<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Rentr</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="#"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-ok"></i> Agregar <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Renta</a></li>
          <li><a href="new_stuff.php">Cosa</a></li>
          <li><a href="new_client.php">Cliente</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar ...">
      </div>
      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Buscar</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-dashboard"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Rentas</a></li>
          <li><a href="#">Inventario</a></li>
          <li><a href="stuffs.php">Cosas</a></li>
          <li><a href="clients.php">Clientes</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Configuracion</a></li>
          <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>