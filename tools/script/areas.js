$(document).ready(function(){
	$("#loading").hide();
});

function actualizar(AREA_CODIGO,AREA_DESCRIPCION){
	$("#txt_AREA_CODIGO").val(AREA_CODIGO);
	$("#txt_AREA_NOMBRE").val(AREA_NOMBRE) 

	$("#modal_update").modal('show');
}