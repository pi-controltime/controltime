$(document).ready(function(){
	$("#loading").hide();
});

function actualizar(suba_codigo,suba_nombre, area_codigo){
	$("#txt_suba_codigo").val(suba_codigo);
	$("#txt_suba_nombre").val(suba_nombre);


	$("#modal_update").modal('show');
}