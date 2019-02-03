<!DOCTYPE html>
<html>
<head>
	<title>Gestión de articulos</title>
	<?php
		$this->load->view("parts/head.php");
	?> 
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/articulos/gestion/style.css") ?> >
</head>
<body>
	<pre>
		<?php 
			//print_r($articulos);
		?>
	</pre>
	<input type="hidden" name="txtHdCambiarEstado" class="txtHdCambiarEstado" value=<?php echo site_url("ArticuloController/cambiarEstado") ?> >
	<div class="col-lg-offset-2 col-lg-8">
		<table class="table ">
			<thead>
				<tr>
					<th class="hidden">Oculto</th>
					<th>Titulo</th>
					<th>Breve descripción</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($articulos as $key => $articulo) {
				?>
					<tr>
						<td class="hidden">
							<input type="hidden" class="txtHdIdArticulo" name="txtHdIdArticulo" value=<?php echo $articulo->_idArticulo ?> >
						</td>
						<td>
							<?php echo $articulo->_titulo ?>
						</td>
						<td>
							<?php echo $articulo->_breveDescripcion ?>
						</td>
						<td>
							<?php echo $articulo->_publicado ?>
						</td>
						<td>
							<button class="btn btnEliminar">Eliminar</button>
							<button class="btn btnCambiarEstado">Cambiar estado</button>
						</td>
					</tr>
				<?php 
				}
				?>
			</tbody>
		</table>	
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>	
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/articulo/gestion/script.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/articulo/gestion/funciones.js") ?>></script>
</body>
</html>