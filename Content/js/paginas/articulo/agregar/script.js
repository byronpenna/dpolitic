$(document).ready(function() {
  /* Plugins */
  $('#summernote').summernote();
  /* Eventos */
  $(document).on("click",".btnGuardar",function(e){
  	e.preventDefault();
  	var frm = {
  		titulo:           $(".titulo").val(),
      breveDescripcion: $(".breveDescripcion").val(),
  		contenido:        $('#summernote').summernote('code'),
      idCategoria:      $(".cbCategoria").val()

  	};

  	agregar(frm,function(){

  	})
  })
});
