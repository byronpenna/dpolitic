<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/style.css") ?> >
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/media.css") ?> >
</head>
<body>
	<input type="hidden" class="txtHdBuscar" value=<?php echo site_url("Welcome/buscar") ?> >
	<input type="hidden" class="txtHdBaseUrl" value=<?php echo base_url() ?> >
	<input type="hidden" class="txtHdSiteUrl" value=<?php echo site_url() ?>  >
	
	<div class="divBuscador row">
		<div class="row">
			<div class="col-lg-offset-3 col-lg-6">
				<h3></h3>	
				<img class="imgBuscador" src=<?php echo base_url("Content/img/generales/logo.jpg") ?>>
				<div class="divBusqueda ">
					<input class="form-control txtBuscar" placeholder="Buscar articulos">
					<button class="btn btnBuscador" >Buscar</button>
				</div>
			</div>
		</div>
		<div class="row">
			<a href=<?php echo site_url("/ArticuloController/gestion/") ?> >
				Gestion
			</a>
			
		</div>
		<div class="row divContenidoArticulo">
			<?php 
				foreach ($articulos as $key => $articulo) {
					$ruta = base_url("Content/img/articulos/".$articulo->_idArticulo."/min.jpg");
					$rutaExist = FCPATH."Content/img/articulos/".$articulo->_idArticulo."/min.jpg";
					if (file_exists($rutaExist)){
						//echo "Existe";
						$img = $ruta;
					}else{
						//echo "<br>".$rutaExist."<br>";
						//echo "<br>no existe<br>".$ruta;
						$img = base_url("Content/img/generales/noImagenArticulo.png");
					}
					
			?>
				<div class="col-lg-4">
					
					<a href=<?php echo site_url("/ArticuloController/detalle/".$articulo->_idArticulo) ?> >
						<div class="row marginNull articulo">
							<h3 class="tituloH3Articulo"><?php echo $articulo->_titulo ?> </h3>
							<img src=<?php echo $img; ?>  >
							<div class="contenidoArticulo">
								<?php
								echo $articulo->_breveDescripcion;
								?>
							</div>
						</div>
					</a>
				</div>
			<?php 
				}
			?>
			<!-- <div class="col-lg-4">
				<a href="#">
					<div class="row marginNull articulo">
						<h3>Ley del agua </h3>
						<img src=<?php echo base_url("Content/img/articulos/1/min.jpg") ?>  >
						<div class="contenidoArticulo">
							Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí".
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<div class="row marginNull articulo">
					<h3>Ley del agua </h3>
					<img src=<?php echo base_url("Content/img/articulos/2/min.jpg") ?>  >
					<div class="contenidoArticulo">
						Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí".
					</div>
				</div>
			</div> -->
			<div class="col-lg-4">
				
			</div>
		</div>
		
		
	</div>
	<footer class="row marginNull" >
		<div class="footer">
			Movimiento libertad todos los derechos reservados
			<br>
			Powered by Ritsa
		</div>
		
	</footer>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/welcome/funciones.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/welcome/script.js") ?>></script>
</body>
</html>