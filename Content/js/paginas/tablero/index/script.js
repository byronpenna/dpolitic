$(document).ready(function(){
	$(document).on("click",".btnBuscarTablero",function(e){
		e.preventDefault();
		var frm = {
			textoBusqueda: $(".txtBuscar").val()
		};
		if(frm.textoBusqueda !=""){
			buscar(frm,function(data){
				var obj = jQuery.parseJSON(data);
				console.log("La data devuelta es",obj);
				if (obj.estado){
					var divArticulos = "";
					
					$(".contenidoVariasNoticia").empty();
					$.each(obj.resultado,function(i,articulo){
						var img = $(".txtHdBaseUrl").val()+"Content/img/tablero/noticias/"+articulo._idArticulo+"/fondo.png";
						$.get(img)
						.done(function() { 
							divArticulos = obtenerDivNoticia(articulo,img);	
							$(".contenidoVariasNoticia").append(divArticulos);
						}).fail(function() { 
							img = $(".txtHdBaseUrl").val()+"Content/img/generales/noImagenArticulo.png";
							divArticulos = obtenerDivNoticia(articulo,img);	
							$(".contenidoVariasNoticia").append(divArticulos);
						});
						
					});
					
				}
			})
		}else{
			console.log("VA VACIO");
			var url = $(".txtHdBuscarTodo").val();	
			var peticion = new PeticionAjax(url,frm,"POST");
			peticion.peticion(function(data){
				var obj = jQuery.parseJSON(data);
				console.log("La data devuelta es",obj);
				if (obj.estado){
					var divArticulos = "";
					$(".contenidoVariasNoticia").empty();
					$.each(obj.resultado,function(i,articulo){
						var img = $(".txtHdBaseUrl").val()+"Content/img/tablero/noticias/"+articulo._idArticulo+"/fondo.png";
						$.get(img)
						.done(function() { 
							divArticulos = obtenerDivNoticia(articulo,img);	
							$(".contenidoVariasNoticia").append(divArticulos);
						}).fail(function() { 
							img = $(".txtHdBaseUrl").val()+"Content/img/generales/noImagenArticulo.png";
							divArticulos = obtenerDivNoticia(articulo,img);	
							$(".contenidoVariasNoticia").append(divArticulos);
						});
					})
				}
			});	
		}
		
	})
	$(document).on("click",".noticia",function(e){
		var idNoticia = $(this).find(".txtHdIdNoticia").val();

		window.location.replace($(".txtHdUrlPrincipal").val()+"/Tablero/detalle/"+idNoticia);
	});
	$(document).on("click",".parametroBusqueda",function(){
		//$(".contenidoParametro").hide();
		var contenedor = $(this).next();
		if(contenedor.attr("estado") == 0){
			contenedor.find(".contenidoParametro").show("slow");
			contenedor.attr("estado",1);
		}else{
			contenedor.find(".contenidoParametro").hide("slow");
			contenedor.attr("estado",0);
		}
		
	})
})