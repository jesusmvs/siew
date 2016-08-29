<div class="container principal">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h2 class="panel-title text-center">Listado de Estudiantes</h2>
			</div>
			<div class="panel-body">
			    
			<table class="table table-striped table-hover ">
			  	<thead>
				    <tr>
				      <th>Imagen</th>
				      <th>Nombre</th>
				      <th>Edad</th>
				      <th>Promedio</th>
				      <th>Sección</th>
				      <th>Acciones</th>
				    </tr>
			  	</thead>
			  	<tbody>
<?php  
	
	while ($row = mysqli_fetch_array($datos)) {
		echo "<tr>";
		echo "<td><img src='".URL."Views/template/imagenes/avatars/".$row ['imagen']."' class='avatar img-circle'></td>";
		echo "<td><a href='".URL."estudiantes/ver/".$row ['id']."'>".$row ['nombre']."</a></td>";
		echo "<td>".$row ['edad']."</td>";
		echo "<td>".$row ['promedio']."</td>";
		echo "<td>".$row ['nombre_seccion']."</td>";
		echo "<td><a class='btn btn-warning' href='".URL."estudiantes/editar/".$row ['id']."'>Editar</a>";
		echo " <a class='btn btn-danger' href='".URL."estudiantes/eliminar/".$row ['id']."'>Eliminar</a></td>";
		echo "</tr>";
		
	}

?>
				</tbody>
			</table> 
			</div>
		</div>
		</div>
		
	</div>
</div>