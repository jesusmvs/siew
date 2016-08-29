<?php $secciones = $estudiantes->listarSecciones(); ?>
<div class="container principal footer">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
				    <h2 class="panel-title text-center">Editar Datos de <?php echo $datos['nombre']; ?></h2>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="pane-body">
									<img class="img-responsive" src="<?php echo URL; ?>Views/template/imagenes/avatars/<?php echo $datos['imagen']; ?>">
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<form method="POST" enctype="multipart/form-data">
								 <fieldset>
								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Nombre:</label>
									    <input class="form-control" name="nombre" type="text" placeholder="Ingrese el Nombre del Estudiante.." value="<?php echo $datos['nombre']; ?>" required>
									</div>

								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Edad:</label>
									    <input class="form-control" name="edad" type="number" placeholder="Ingrese la Edad del Estudiante.." value="<?php echo $datos['edad']; ?>" required>
									</div>

								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Promedio:</label>
									    <input class="form-control" name="promedio" type="number" placeholder="Ingrese el Promedio del Estudiante.." value="<?php echo $datos['promedio']; ?>" required>
									 </div>

								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Sección (<b>Sección Actual: <?php echo $datos['nombre_seccion']; ?></b>)</label>
									    <select name="id_seccion" class="form-control">
									    	<option selected="selected">Seleccione una Sección</option>
									    	<?php while ($row = mysqli_fetch_array($secciones)) {
									    	if ($datos['id_seccion'] == $row['id']) {?>
									    	<option selected="selected" value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
									    	<?php
									    	} else {?>
									    		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
									    	<?php } } ?>
									    </select>
								    </div>

								    <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">

								    <!--<div class="form-group">
									    <label for="inputEmail" class="control-label">Imagen:</label>
									    <input name="imagen" id="imagen" type="file" required>
								    </div>-->

								    <div class="form-group">
									    <button type="submit" class="btn btn-success">Editar</button>
									   	<button type="reset" class="btn btn-danger">Borrar</button> 	
								    </div>
								</fieldset>
							</form>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>