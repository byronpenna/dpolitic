$(document).ready(function(){
	$(document).on("click",".btnCambiarEstado",function(){
		var tr = $(this).parents("tr");
		var frm = {
			idArticulo: tr.find(".txtHdIdArticulo").val()
		}
		cambiarEstado(frm,function(){

		})
	});
})