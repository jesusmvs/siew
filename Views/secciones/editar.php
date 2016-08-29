<div class="container principal footer">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
				    <h2 class="panel-title text-center">Editar <strong>"<?php echo $datos['nombre']; ?>"</strong></h2>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<form method="POST">
								 <fieldset>
								    <div class="form-group">
									    <label for="inputEmail" class="control-label">Nombre de la Sección:</label>
									    <input class="form-control" name="nombre" type="text" placeholder="Ingrese el Nombre de la Sección.." value="<?php echo $datos['nombre']; ?>" required>
									</div>

									<input type="hidden" value="<?php echo $datos['id']; ?>" name="id">

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