<?php namespace Views;

	$template = new Template();

	class Template {

		public function __construct(){

?>		

	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Administración de Estudiantes | HW</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Views/template/css/general.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
	      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-main">
				        <span class="sr-only"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Administración Estudiantil</a>
	    		</div>

	    		<div class="collapse navbar-collapse" id="navbar-main">
			      	<ul class="nav navbar-nav">
				        <li><a href="<?php echo URL; ?>">Inicio</a></li>
				        <li class="dropdown">
				          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiante <span class="caret"></span></a>
					        <ul class="dropdown-menu" role="menu">
					            <li><a href="<?php echo URL;?>estudiantes">Listado</a></li>
					            <li><a href="<?php echo URL;?>estudiantes/agregar">Agregar</a></li>
					        </ul>
					    </li>
					    <li class="dropdown">
				          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones <span class="caret"></span></a>
					        <ul class="dropdown-menu" role="menu">
					            <li><a href="<?php echo URL;?>secciones">Listado</a></li>
					            <li><a href="<?php echo URL;?>secciones/agregar">Agregar</a></li>
					        </ul>
					    </li>
				  	</ul>
				  </div>
			</div>
		</nav>

<?php
		}
		public function __destruct(){

?>

		<footer class="navbar navbar-default navbar-fixed-bottom text-center">
			<label class="text-muted">
			Todos los derechos reservados &copy 2016 <br>
			Ing. Jesús Velásquez | Web Development
			</label>
		</footer>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>


	</body>
	</html>

<?php
		}

	}

?>