$(document).ready(function(){
	$("#loading").hide();
});

function actualizar(area_codigo,area_descripcion){
	$("#txt_area_codigo").val(area_codigo);
	$("#txt_area_nombre").val(area_nombre) 

	$("#modal_update").modal('show');
}