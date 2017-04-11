/* $("#circulo_rojo").click(function () {
	alert("Has hecho clic en el circulo rojo");
})

$("#cuadrado_azul").click(function () {
	alert("Has hecho clic en el cuadrado azul");
})

$("#cuadrado_verde").click(function () {
	alert("Has hecho clic en el cuadrado verde");
}) 

$("div").click(function(){
	$(this).fadeOut("slow");
}) 

$("#desvanecer").click(function(){
	$("p").fadeOut("slow");
})

$("#mostrar").click(function(){
	$("#poculto").fadeIn("slow");
})


$("#magia").click(function(){
	if ($("#texto").css("display")=="none") {
		$("#texto").fadeIn("slow");
	}
	else {
		$("#texto").fadeOut("slow");
	}
})


$("#cuadrado_verde").click(function(){
	$(this).animate({
	height: "400px",
    width: "400px",
    borderRadius: "50%",
    },2000);
}) */

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



