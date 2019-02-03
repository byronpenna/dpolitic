<!DOCTYPE html>
<html>
<head>
	<title>Detalle Tablero</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/tablero/detalle/style.css") ?> >
</head>
<body>
	<?php 
		$this->load->view("parts/header.php");
	?>
	<video width="100%" autoplay class="videoBanner" loop>
  		<source  type="video/mp4" src=<?php echo base_url("Content/videos/Tablero/index/baner.mp4") ?>>
	  	<!-- <source src="movie.ogg" type="video/ogg">-->
		Your browser does not support the video tag.
	</video>
	<div class="contenidoCuerpo">
		<div class="navegacion">
			<?php 
				$this->load->view("parts/componentes/navegacion.php");
			?>
		</div>

		<div class="noticias">
			
			<div class="row container noticia">
				<div class="row container navegacionArticulo">
					<div class="col-lg-12">
						<div class="col-lg-2 barraNavegacionNoticiaL barraNavegacionNoticia" >
							<i class="fas fa-chevron-left"></i>
						</div>
						<div class="col-lg-offset-8 col-lg-2 barraNavegacionNoticiaR barraNavegacionNoticia" style="text-align: right;">
							<i class="fas fa-chevron-right"></i>
						</div>
					</div>
				</div>
				<div class="row container tituloNoticia">
					<h2>
						<?php echo $articulo->_titulo ?>
					</h2>

				</div>
				<div class="row container imgNoticia">

				</div>
				<div class="row container contenidoNoticia">
					<?php 
						echo $articulo->_articulo;
					 ?>
				</div>
				<div class="row container comentariosNoticia">
					<h2>Comentarios noticia</h2>
				</div>
			</div>
			
		<div>
			<!--<pre>
				<?php
					print_r($articulo);
				?>
			</pre>-->
		</div>	
	</div>
	<?php 
		$this->load->view("parts/footer.php");
	?>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/tablero/detalle/funciones.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/tablero/detalle/script.js") ?>></script>
</body>
</html>