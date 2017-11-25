$(document).ready(function(){
	$("#loading").hide();
});

function actualizar(AREA_CODIGO,AREA_DESCRIPCION){
	$("#txt_SUBA_CODIGO").val(SUBA_CODIGO);
	$("#txt_SUBA_NOMBRE").val(SUBA_NOMBRE) 

	$("#modal_update").modal('show');
}