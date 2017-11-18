$(document).ready(function(){
	$("#tarjetapass").hide();


});

function validapass(){
	var pass = document.getElementById("txt_pass").value;
	var passcon = document.getElementById("txt_pass2").value;
	if (pass!="") {
		if (passcon!="") {
			if (pass == passcon) {
				alert("Contraseñas iguales");
			}
			else
			{

			}
		}
		else
		{

		}
	}
	else
	{

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