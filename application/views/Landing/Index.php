<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/landing/Index/style.css") ?> >
	

</head>
<body>
	<div class="row container contenedorPrincipalLand">
		<h2 class='tituloContenedorPrincipal'>
			Día mundial de lucha contra el cancer
		</h2>
		<div class='row contenido'>
			<div class='col-lg-6'>
				<div class='row'>
					<h4>Escribele a la asamblea	<h4>
				</div>
				<div class="row">
					<img class="imgAsamblea" src=<?php echo base_url("Content/img/landing/DiaCancer/asamblea.jpg") ?> >
				</div>
				<div class='row'>
					<a href="https://twitter.com/intent/tweet?screen_name=AsambleaSV&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @AsambleaSV</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
			<div class='col-lg-5'>
				<div class="row">
					<h4>Escribele a los diputados de la comisión<h4>	
				</div>
				<div class="row">

					<div class="sliderDiputados">
					  <div>
					  	<img class="imgAsamblea" src=<?php echo base_url("Content/img/landing/DiaCancer/Diputados/eileenRomero.png") ?> >
					  	<div class="row container textoFoto">
					  		Eileen Romero Diputada del PCN 	
					  	</div>
					  	
					  </div>
					  <div>
					  	<img class="imgAsamblea" src=<?php echo base_url("Content/img/landing/DiaCancer/Diputados/DavidReyes.png") ?> >
					  	<div class="row container textoFoto">
					  		David Reyes Diputado del partido Arena 	
					  	</div>
					  	<a href="https://twitter.com/intent/tweet?screen_name=_davidreyes&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @_davidreyes</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					  </div>
					  <div>
					  	<img class="imgAsamblea" src=<?php echo base_url("Content/img/landing/DiaCancer/Diputados/eileenRomero.png") ?> >
					  	<a href="https://twitter.com/intent/tweet?screen_name=Villabull&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @Villabull</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					  	<div class="row container textoFoto">
					  		David Reyes Diputado del partido Arena 	
					  	</div>
					  </div>
					  <div>
					  	<img class="imgAsamblea" src=<?php echo base_url("Content/img/landing/DiaCancer/Diputados/eileenRomero.png") ?> >
					  </div>
					</div>
					

				</div>	
			</div>	
		</div>
		<div class="row">
			<img class="logoPrincipal" src=<?php echo base_url("Content/img/generales/logo.png") ?> >
		</div>
	</div>

	
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  	$('.sliderDiputados').slick({
			  infinite: true,
			  slidesToShow: 1
			});
		});
	
	</script>
</body>
</html>