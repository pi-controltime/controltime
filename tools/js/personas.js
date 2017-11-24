$(document).ready(function(){
	$("#tarjetapass").hide();



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


  $( "#frm_persona" ).submit(function( event ) {
	console.log($("#frm_persona").serialize());
	$.ajax({
		url:$("#frm_persona").attr("action"),
		type:$("#frm_persona").attr("method"),
		data:$("#frm_persona").serialize(),
		success:function(respuesta){
			alert(respuesta);
		}
	})

  });
