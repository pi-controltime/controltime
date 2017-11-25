$(document).ready(function(){
	$("#loading").hide();
});

function actualizar(eps_codigo,eps_descripcion){
	$("#txt_eps_codigo").val(eps_codigo);
	$("#txt_eps_nombre").val(eps_nombre) 

	$("#modal_update").modal('show');
}