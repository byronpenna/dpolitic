function buscar(frm,callback){
	
	var url = $(".txtHdBuscar").val();	
	console.log("Frm es",frm);
	var peticion = new PeticionAjax(url,frm,"POST");
	peticion.peticion(function(data){
		callback(data);
	})	
}