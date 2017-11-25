$(document).ready(function(){
	$("#loading").hide();

	/*$( "#frm_institu" ).on( "submit", function( event ) {
	  /*event.preventDefault();
	  console.log( $( this ).serialize() );*/

	 /* $.ajax({
	   url: $(this).attr("action"),
	   type: $(this).attr("method"),
	   data: $(this).serialize(),
	   beforeSend:function(){

	   	$("#loading").show();

	   },
	   success:function(){
	   	/*$("#loading").fadeOut("slow");*/
	 /*   }
	   });

	});*/

});

function actualizar(id,nom,tel,jefe,correo){
	//console.log(id+nom+tel+jefe+correo);
	$("#txt_uid").val(id);
	$("#txt_unom").val(nom);
	$("#txt_utel").val(tel);
	$("#txt_ujefe").val(jefe);
	$("#txt_ucorreo").val(correo);

	//document.getElementById("txt_nom").value(nom);
	//$('#modal_update').modal('show');
	$("#modal_update").modal('show');
}
