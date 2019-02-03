<!DOCTYPE html>
<html>
<head>
	<title>Tablero</title>
	<?php
		$this->load->view("parts/head.php");
	?>
	<meta property="og:url"           content="https://www.ajedrezpolitico.net" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="Tablero" />
  	<meta property="og:description"   content="Pagina a compartir" />
  	<meta property="og:image"         content="" />
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/paginas/tablero/index/style.css") ?> >
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
	<input type="hidden" class="txtHdBuscar" value=<?php echo site_url("Tablero/buscar") ?> >
	<input type="hidden" class="txtHdBuscarTodo" value=<?php echo site_url("Tablero/ajax_obtenerUltimas") ?> >
	<div class="contenidoCuerpo">
		<div class="navegacion">
			<?php 
				$this->load->view("parts/componentes/navegacion.php");
			?>
		</div>

		<div class="noticias">

			<div class="buscadorNoticias">
				<div class="col-lg-6">
					<!-- Buscador bootsnip -->
					<div class="paddingNull col-lg-10">
					<input type="text" class="form-control txtBuscar" placeholder="Busca tu articulo favorito" />
	                </div>
	                <div class="paddingNull col-lg-2">
	                	<div class="input-group-btn">
	                    <div class="btn-group" role="group">
	                        <div class="dropdown dropdown-lg">
	                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
	                            <div class="dropdown-menu dropdown-menu-right" role="menu">
	                                <form class="form-horizontal" role="form">
	                                  <div class="form-group">
	                                    <label for="filter">Filter by</label>
	                                    <select class="form-control">
	                                        <option value="0" selected>All Snippets</option>
	                                        <option value="1">Featured</option>
	                                        <option value="2">Most popular</option>
	                                        <option value="3">Top rated</option>
	                                        <option value="4">Most commented</option>
	                                    </select>
	                                  </div>
	                                  <div class="form-group">
	                                    <label for="contain">Author</label>
	                                    <input class="form-control" type="text" />
	                                  </div>
	                                  <div class="form-group">
	                                    <label for="contain">Contains the words</label>
	                                    <input class="form-control" type="text" />
	                                  </div>
	                                  <button type="submit" class="btn btn-primary btnBuscarTablero">
	                                  		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	                                  	</button>
	                                </form>
	                            </div>
	                        </div>
		                        <button type="button" class="btn btn-primary btnBuscarTablero">
		                        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		                        </button>
		                    </div>
		                </div>
		            </div>
					<!-- ################# -->
				</div>
			</div>	
			
			<div class="row contenidoVariasNoticia">
				<?php 
					if(isset($articulos)){
						foreach ($articulos as $key => $articulo) {
				?>
					<div class="col-lg-6">
							<div class="container row noticia">
								<input type="hidden" class="txtHdIdNoticia" value=<?php echo $articulo->_idArticulo ?>>
								<div class="contenidoImg">
									<div class="textoDestacadoNoticia" style="display: none">
										Vamos a respetar el estado laico
									</div>
									<div class="cobertorNoticia" style="display: none">
											
									</div>
									<div class="redesCompartir">
										<div class="iconosCompartir">
											<a href="#" class="aSocial">
												<i class="colorWA fab fa-whatsapp"></i>
											</a>
											<a href="#" class="aSocial">
												<i class="colorFB fab fa-facebook"></i>	
											</a>
											<a href="#" class="aSocial">
												<i class="colorIG fab fa-instagram"></i>	
											</a>
											
										</div>
										<div class="textoCompartir">
											
										</div>
										

									</div>
									<img class='imgNoticia' src=<?php echo base_url("Content/img/tablero/noticias/".$articulo->_idArticulo."/fondo.png") ?> >	
								</div>
								
								<h4 class="tituloNoticia">
									<?php 
										echo $articulo->_titulo;
									?>
								</h4>
								<div class="contenido">
									<?php 
										echo $articulo->_breveDescripcion;
									?>
								</div>
								<div class="footerNoticia">

								</div>	
							</div>	
						
					</div>
				<?php 
						}
					}
				?>
				</div>
				<div class="divAnucioNoticia" style="background: red;height: 20px;">
					<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-format="fluid"
					     data-ad-layout-key="-fb+5w+4e-db+86"
					     data-ad-client="ca-pub-7161297069626668"
					     data-ad-slot="6946410631"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>-->
				</div>
			</div>
		</div>
	</div>
	<!--<div class="fb-share-button" 
	    data-href="https://www.ajedrezpolitico.net" 
	    data-layout="button_count">
	  </div>-->
	<?php 
		$this->load->view("parts/footer.php");
	?>
	<?php
		$this->load->view("parts/scripts.php");
	?>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/tablero/index/funciones.js") ?>></script>
	<script type="text/javascript" src=<?php echo base_url("Content/js/paginas/tablero/index/script.js") ?>></script>
	<!-- Load Facebook SDK for JavaScript -->
	  <div id="fb-root"></div>
	  <script>(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>