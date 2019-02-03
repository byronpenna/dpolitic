<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Titulo" ?></title>
	<?php
		$this->load->view("parts/head.php");
	?> 
	
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/articulos/detalle/style.css") ?> >

</head>
<body>
	

	<div class="row marginNull divCuerpoNoticia">
		<div class="marginNull row titulo">
			<h3 class="tituloNoticia">
				<?php echo $articulo->_titulo; ?>
			</h3>
		</div>
		<div class="divContenidoCuerpoNoticia">
			<div class="row marginNull contenedorImagenContenidoCuerpo">
			<img class="imgContenidoCuerpo" src=<?php echo base_url("Content/img/articulos/".$articulo->_idArticulo."/min.jpg") ?> >
			</div>
			<div class="row marginNull">
				<?php 
					echo $articulo->_articulo;
				?>
			</div>
			<div class="row marginNull footerArticulo">
				<div class="col-md-10">
				  <h2 class="heading">Compartelo con tus amigos</h2>
				  <a href="javascript::;"><div class="twitter-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="facebook-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="google-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="linkedin-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="pinterest-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="instagram-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="tumblr-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="reddit-hover social-slide"></div></a>
				  <a href="javascript::;"><div class="stumbleupon-hover social-slide"></div></a>
				</div>
			</div>
		</div>
	</div>	
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/welcome/funciones.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/welcome/script.js") ?>></script>
</body>
</html>