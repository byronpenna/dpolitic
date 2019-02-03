<!DOCTYPE html>
<html>
<head>
	<title>Agregar / editar | articulo</title>
	<?php
		$this->load->view("parts/head.php");
	?> 
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/articulos/detalle/style.css") ?> >
</head>
<body>
	<pre>
		<?php
			//print_r($categorias);
		?>
	</pre>
	<input type="hidden" name="txtHdAgregar" class="txtHdAgregar" value=<?php echo site_url("ArticuloController/guardar") ?> >
	<div class="col-lg-offset-2 col-lg-8">
		<form>
			<div class="row">
				<label>Titulo</label>
				<input type="text" class="form-control titulo" name="titulo">	
			</div>
			<div class="row">
				<label>Breve descripción</label>
				<textarea class="form-control breveDescripcion">
					
				</textarea>
			</div>
			<div class="row">
				<label>Breve descripción</label>
				<textarea id="summernote" name="editordata"></textarea>
			</div>
			<div class="row">
				<label>Categoria</label>
				<select class="form-control cbCategoria">
					<?php 
						foreach ($categorias as $key => $categoria) {
					?>
						<option value=<?php echo $categoria->_idCategoria ?> >
							<?php echo $categoria->_categoria ?>
						</option>
					<?php
						}
					?>
				</select>
			</div>
			<div class="row">
				<button class="btn btn-sucess btnGuardar">
					Guardar
				</button>
			</div>

		</form>	
	</div>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/articulo/agregar/script.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/articulo/agregar/function.js") ?>></script>
	
</body>
</html>