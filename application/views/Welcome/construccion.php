<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/welcome/construccion/style.css") ?> >
</head>
<body>
	<div class="divNota1" style="display: none;">
		<span>En el tablero de la sociedad luchan personas y no figuras</span>
	</div>
	<div class="contenedorNota2">
		<div class="divNota2" style="display: none;">
			<span>El peon que se corona puede marcar la diferencia</span>
		</div>	
	</div>
	<div class="contenedorNota3">
		<a class="botonIngresar btn" href=<?php echo site_url("Welcome/login"); ?> >
			Ingresar
		</a> 
		
	</div>
	<footer class="fixed-bottom pieDePagina" >
		<div class="notaFooter" style="display: none">
			!Muy pronto la <span class="resaltado1">POLITICA</span> quedara en <span class="resaltado2">JAQUE</span>!	
		</div>
		
		
	</footer>
	<div class="imgBack">
		<img src=<?php echo base_url("Content/img/generales/fondoConstruccion.jpg") ?> >
	</div>
	<div id="pieIr" class="pieIr"></div>

	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript">
		function animacionInicial(){
			$(".divNota1").fadeIn("slow",function(){
				$(".divNota2").fadeIn("slow",function(){
					$(".notaFooter").fadeIn("slow",function(){
						console.log("Termino todo");
					});		
				})
			});
		}
		function goToId(idName)
		{
			if($("#"+idName).length)
			{
				var target_offset = $("#"+idName).offset();
				var target_top = target_offset.top;
				$('html,body').animate(
					{scrollTop:target_top},
					3000,
					animacionInicial
				);				
			}
		}
		$(document).ready(function(){
			var n = $(document).scrollTop();
			if(n == 0){
				goToId("pieIr");	
			}else{
				animacionInicial();
			}
			//console.log("Target offset es ",target_offset);
			
		})
	
		
	</script>
</body>
</html>