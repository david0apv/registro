<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/registro.css">
<script src="js\jquery-3.3.1.js"></script>
<script src="js\jquery.validate.js"></script>

<script>
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
		// validate signup form on keyup and submit
		$("#formulario").validate({
			rules: {
				nombre: {
					required: true,
					minlength: 2
				},
				apaterno: {
					required: true,
					minlength: 2
				},
				amaterno: {
					minlength: 2
				},
				telefono: {
					required: true,
					number: true,
					minlength: 8,
					maxlength: 10
				},
				mail: {
					required: true,
					email: true
				}
			},
			messages: {
				nombre: {
					required: "<font color='red'> Por favor ingresa tu nombre</font>",
					minlength: "<font color='red'> Tu nombre debe tener al menos 2 caracteres</font>"
				},
				apaterno: {
					required: "<font color='red'> Por favor ingresa tu apellido paterno</font>",
					minlength: "<font color='red'> Tu apellido debe tener al menos 2 caracteres</font>"
				},
				amaterno: {
					minlength: "<font color='red'> Tu apellido debe tener al menos 2 caracteres"
				},
				telefono: {
					required: "<font color='red'> Por favor ingresa tu télefono",
					number: "<font color='red'> El teléfono solo puede consistir de números",
					minlength: "<font color='red'> Tu télefono debe tener al menos 8 digitos",
					maxlength: "<font color='red'> Tu télefono debe tener como máximo 10 digitos"
				},
				mail: "<font color='red'> Debes ingresar un correo electrónico valido<font color='red'>"
			}
		});
	});
</script>

<title>Registro de usuarios</title>
</head>
<body>
<h2>Registro de usuarios</h2>
<div>
<form action="" method="POST" id="formulario" >
<p>Introduzca su nombre y apellidos</p>
<label for="nombre">Nombre: </label><input type="text" name="nombre" required><br><br>
<label for="apaterno">Apellido paterno: </label><input type="text" name="apaterno" required><br><br>
<label for="amaterno">Apellido materno: </label><input type="text" name="amaterno"><br><br>

<p>Introduzca su número telefónico</p>
<label for="telefono">Telèfono: </label><input type="text" name="telefono" required><br><br>

<p>Introduzca su correo electrónico</p>
<label for="mail">Correo electronico: </label><input type="mail" name="mail" required><br><br>
<input type="submit" value="Enviar">
</form>
</div>
</body>
</html>
