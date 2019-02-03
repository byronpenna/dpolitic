<!DOCTYPE html>
<html>
<head>
	<title>Reina</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/reina/style.css") ?> >
</head>
<body>
	<?php 
		$this->load->view("parts/header.php");
	?>
	<video width="100%" autoplay class="videoBanner" loop>
  		<source  type="video/mp4" src=<?php echo base_url("Content/videos/Reina/index/baner.mp4") ?>>
	  	<!-- <source src="movie.ogg" type="video/ogg">-->
		Your browser does not support the video tag.
	</video>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/reina/index/funciones.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/reina/index/script.js") ?>></script>
</body>
</html>