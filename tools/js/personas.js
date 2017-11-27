$(document).ready(function(){
	$("#tarjetapass").hide();
	$("#txt_doc").focus();



});

function validapass(){
	var pass = document.getElementById("txt_pass").value;
	var passcon = document.getElementById("txt_pass2").value;
	if (pass!="") {
		if (passcon!="") {
			if (pass == passcon) {
				$("#msg_pass").text("En hora buena! Las contraseñas coinciden.");
			}
			else
			{
				$("#msg_pass").text("Sigue intentando. Las contraseñas no coinciden.");
			}
		}
		else
		{
			$("#msg_pass").text("");
		}
	}
	else
	{
		$("#msg_pass").text("");
	}
	
}

function validacceso(){
	
	if ($("#chkpass").is(".is-checked")){
		//alert("no esta checkeado");
		$('#chkpass')[0].MaterialSwitch.off();
		$("#tarjetapass").hide();

	}
	else
	{
		//alert("esta checkeado");	
		$('#chkpass')[0].MaterialSwitch.on();
		$("#tarjetapass").show();
	}
}

/*$("#btn_registrar").click(function(){
  //$( "#frm_persona" ).submit(function( event ) {
	
	if ($("#txt_doc").val()=="") {
		alert("Debe ingresar un numero de documento.");
		$("#txt_doc").focus();
		return false;
	}
	if($("#txt_nombres").val()=="") {
		alert("El nombre es un campo oblicatorio para genera un certificado.");
		$("#txt_nombres").focus();
		return false;
	}
	if($("#txt_apellidos").val()=="") {
		alert("El apellido es un campo oblicatorio para genera un certificado.");
		$("#txt_apellidos").focus();
		return false;
	}
	if($("#txt_correo").val()=="") {
		alert("El correo es obligatorio ya que se enviara el certificado a este.");
		$("#txt_correo").focus();
		return false;
	}

	if ($("#select_institucion").val()==null) {
		
		alert("Debe seleccionar una institucion.");
		$("#select_institucion").focus();
		return false;
	}
	if ($("#select_eps").val()==null) {
		alert("Debe seleccionar una EPS.");
		$("#select_eps").focus();
		return false;
	}
	if($("#select_subarea").val()==null){

		alert("Debe seleccionar una Sub area.");
		$("#select_subarea").focus();
		return false;
	}
		$.ajax({
		url:$("#frm_persona").attr("action"),
		type:$("#frm_persona").attr("method"),
		data:$("#frm_persona").serialize(),
		success:function(respuesta){
			$("msg").html(respuesta);
		},
		error: function() 
        {
            alert("Invalide!");
        }
	})	
	

	

  });*/
