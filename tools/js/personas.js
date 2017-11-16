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