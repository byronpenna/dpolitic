<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/index/style.css") ?> >
	
</head>
<body>
	<?php 
		$this->load->view("parts/header.php");
	?>

	<?php 
		$this->load->view("parts/componentes/slider.php");
	?>
	<div class="container">
		
	
	<div class="row divContenidoIndex">
		<div class="row marginNull">
			<div class='col-lg-4 divTextoDestacado'> 
				<div class="row">
					<h2>Bienvenido</h2>	
					<p class="texto">
						Hola, bienvenido a mi espacio personal donde estaré publicando frecuentemente posturas sobre temas de gran relevancia social y profesional.
					</p>
					<p class="texto">
						Este espacio refleja mi opinión la cual puede ser perfectamente debatible por cualquiera de los lectores bajo un ambiente de respeto mutuo y tolerancia a las ideas.
					</p>
					<hr>
					<p class="texto">
						<b>Un poco sobre mi.</b>
					</p>
					<p class="texto">
						Mi nombre Byron Peña conocido en las redes como byronpenna y soy salvadoreño de nacimiento fui criado en una familia muy humilde en una zona populosa, a pesar de no haber contado con muchos recursos me crié pensando que uno mismo moldea su destino y ese pensamiento me acompaña hasta el día de hoy siendo seguramente lo que más me influenció para que adoptará una corriente de pensamiento liberal.
					</p>
					<hr>
					<p class="texto">
						Analista programador de profesión, pero emprendedor de corazón.
					</p>
				</div>
				
			</div>	
			<div class="col-lg-8">
				<div class="tituloPrincipal row">
					<h2>Ultimas Entradas</h2>
				</div>
				<div class="row"></div>
			</div>
		</div>
		<div class="row marginNull">
			<div class="tituloPrincipal row">
				<h2>Entradas externas</h2>
			</div>	
		</div>
	</div>
	</div>
	<?php 
		$this->load->view("parts/footer.php");
	?>
	<?php
		$this->load->view("parts/scripts.php");
	?>
</body>
</html>