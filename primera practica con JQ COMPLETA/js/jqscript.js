$("#botonEnviar").click(function(){
	// Verificacion de campos vacios

	var campoVacio="";
	var mensajeError="";

	if ($("#email").val()=="") {
		campoVacio=campoVacio+"Email<br>"
	}

	if ($("#telefono").val()=="") {
		campoVacio=campoVacio+"telefono<br>"
	}

	if ($("#password").val()=="") {
		campoVacio=campoVacio+"password<br>"
	}
	if ($("#confirmarPass").val()=="") {
		campoVacio=campoVacio+"Confirmacion del password<br>"
	}

	if (campoVacio!="") {
		mensajeError="<p>Los siguientes campos estan vacios:</p>"+campoVacio+mensajeError;
	}
	function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
	}

	//validando email
	if (isEmail($("#email").val())==false) {
		mensajeError=mensajeError+"<p> El email no es correcto </p>"
	}

	//validando campo numerico de telefono
	if($.isNumeric($("#telefono").val())==false){
		mensajeError=mensajeError+"<p>Los datos del telefono solo pueden ser numeros"
	}

	//validando que las contraseñas sean iguales
	if ($("#password").val() != $("#confirmarPass").val()) {
		mensajeError=mensajeError+"<p> Las contraseñas no coinciden!!!</p>"	}	

	if (mensajeError !="") {
		$("#mensajeErrorCampos").html(mensajeError);
	}
	else {
		$("#mensajeExito").html(alert('Te has registrado con exito!'));
	}
})



