<div class="container principal footer">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
				    <h2 class="panel-title text-center">Datos de <?php echo $datos['nombre']; ?></h2>
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
							<ul class="list-group">
								<li class="list-group-item">
									<b>Nombre:</b> <?php echo $datos['nombre']; ?>
								</li>
								<li class="list-group-item">
									<b>Edad:</b> <?php echo $datos['edad']; ?>
								</li>
								<li class="list-group-item">
									<b>Promedio:</b> <?php echo $datos['promedio']; ?>
								</li>
								<li class="list-group-item">
									<b>Sección:</b> <?php echo $datos['nombre_seccion']; ?>
								</li>
								<li class="list-group-item">
									<b>Fecha de Registro:</b> <?php echo $datos['fecha']; ?>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>