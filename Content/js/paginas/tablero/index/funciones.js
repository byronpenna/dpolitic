function buscarOriginales(){
	
}
function buscar(frm,callback){
	var url = $(".txtHdBuscar").val();	
	//console.log("Frm es",frm);
	var peticion = new PeticionAjax(url,frm,"POST");
	peticion.peticion(function(data){
		callback(data);
	})	
}
function obtenerDivNoticia(articulo,img){
	div = "\
	<div class='col-lg-6'>\
		<div class='container row noticia'>\
			<input type='hidden' class='txtHdIdNoticia' value='"+articulo._idArticulo+"'>\
			<div class='contenidoImg'>\
				<div class='textoDestacadoNoticia' style='display: none'>\
					Vamos a respetar el estado laico\
				</div>\
				<div class='cobertorNoticia' style='display: none'>\
						\
				</div>\
				<div class='redesCompartir'>\
					<div class='iconosCompartir'>\
						<a href='#' class='aSocial'>\
							<i class='colorWA fab fa-whatsapp'></i>\
						</a>\
						<a href='#' class='aSocial'>\
							<i class='colorFB fab fa-facebook'></i>	\
						</a>\
						<a href='#' class='aSocial'>\
							<i class='colorIG fab fa-instagram'></i>	\
						</a>\
						\
					</div>\
					<div class='textoCompartir'>\
						\
					</div>\
					\
				</div>\
				<img class='imgNoticia' src='"+img+"'>\
			</div>\
			<h4 class='tituloNoticia'>\
				"+articulo._titulo+"\
			</h4>\
			<div class='contenido'>\
				"+articulo._breveDescripcion+"\
			</div>\
			<div class='footerNoticia'>\
				\
			</div>\
		</div>\
	</div>\
	";
	return div;
}