<div class="container principal footer">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
				    <h2 class="panel-title text-center">Agregar Estudiantes</h2>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<form method="POST" enctype="multipart/form-data">
								 <fieldset>
								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Nombre:</label>
									    <input class="form-control" name="nombre" type="text" placeholder="Ingrese el Nombre del Estudiante.." required>
									</div>

								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Edad:</label>
									    <input class="form-control" name="edad" type="number" placeholder="Ingrese la Edad del Estudiante.." required>
									</div>

								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Promedio:</label>
									    <input class="form-control" name="promedio" type="number" placeholder="Ingrese el Promedio del Estudiante.." required>
									 </div>

								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Sección:</label>
									    <select name="id_seccion" class="form-control">
									    	<option selected="selected">Seleccione una Sección</option>
									    	<?php while ($row = mysqli_fetch_array($datos)) { ?>
									    	<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>

									    	<?php }	?>	
									    </select>
								    </div>

								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Imagen:</label>
									    <input name="imagen" id="imagen" type="file" required>
								    </div>

								    <div class="form-group">
									    <button type="submit" class="btn btn-success">Registrar</button>
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
