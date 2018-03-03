<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<link rel="stylesheet" type="text/css" href="css/registro.css">
<title>Registro de usuarios</title>
</head>
<body>
<h2>Registro de usuarios</h2>
<div>
<form action="alta_registro.php" method="post">
<p>Introduzca su nombre y apellidos</p>
Nombre: <input type="text" name="nombre"><br><br>
Apellido paterno: <input type="text" name="apaterno"><br><br>
Apellido materno: <input type="text" name="amaterno"><br><br>
</div>
<div>
<p>Introduzca su número telefónico</p>
Telèfono: <input type="text" name="telefono"><br><br>
</div>
<div>
<p>Introduzca su correo electrónico</p>
Correo electronico: <input type="mail" name="mail"><br><br>
<input type="submit" value="Enviar">
</form>
</div>
</body>
</html>
