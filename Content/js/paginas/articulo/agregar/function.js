function agregar(frm,callback){
	var url = $(".txtHdAgregar").val();	
	var peticion = new PeticionAjax(url,frm,"POST");
	console.log("Antes de enviar",url);
	console.log("Antes de enviar",frm);
	peticion.peticion(function(data){
		callback(data);
	})	
}