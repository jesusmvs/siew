<div class="container principal">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h2 class="panel-title text-center">Listado de Secciones</h2>
			</div>
			<div class="panel-body">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<table class="table table-striped table-hover" >
		  			<thead>
					    <tr>
					      <th>ID</th>
					      <th>Sección</th>
					      <th>Acciones</th>
					    </tr>
				  	</thead>
				  	<tbody>
<?php  
	
	while ($row = mysqli_fetch_array($datos)) {
		echo "<tr>";
		echo "<td>".$row ['id']."</td>";
		echo "<td>".$row ['nombre']."</td>";
		echo "<td><a class='btn btn-warning' href='".URL."secciones/editar/".$row ['id']."'>Editar</a>";
		echo " <a class='btn btn-danger' href='".URL."secciones/eliminar/".$row ['id']."'>Eliminar</a></td>";
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
		
	</div>
</div>