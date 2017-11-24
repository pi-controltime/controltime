$(document).ready(function(){
	$("#loading").hide();
});

function actualizar(EPS_CODIGO,EPS_DESCRIPCION){
	$("#txt_EPS_CODIGO").val(EPS_CODIGO);
	$("#txt_EPS_DESCRIPCION").val(EPS_DESCRIPCION);

	$("#modal_update").modal('show');
}