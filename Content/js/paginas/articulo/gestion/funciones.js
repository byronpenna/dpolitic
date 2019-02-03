function cambiarEstado(frm,callback){
	var url = $(".txtHdCambiarEstado").val();	
	var peticion = new PeticionAjax(url,frm,"POST");
	console.log("Antes de enviar",url);
	console.log("antes de enviar",frm);
	peticion.peticion(function(data){
		callback(data);
	})	
}