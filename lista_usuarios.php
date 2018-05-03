<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<title>Lista de usuarios</title>
</head>
<body>
<?php
include 'conexion.php';
$conn = conectar();
$query = ("SELECT id_usuario,nombre,apaterno,amaterno,telefono,correo FROM usuarios");
$process = pg_query($conn, $query);
?>
<h2>Lista de Usuarios Registrados</h2>
<table border="1">
<tr>
	<td>ID</td>
	<td>Nombre</td>
	<td>Apellido Paterno</td>
	<td>Apellido Materno</td>
	<td>Télefono</td>
	<td>Correo</td>
</tr>
<?php
	while ($row = pg_fetch_row($process)) {
	  echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td></tr>';
	}
//Cerrar la conexion a la bd
pg_close($conn);
?>
</table>
</body>
</html>