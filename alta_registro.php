<!DOCTYPE HTML>
<html>
<head>
<title>Alta Registro</title>
</head>
<body>
<?php
include 'conexion.php';
$conn = conectar();

$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$telefono = $_POST['telefono'];
$correo = $_POST['mail'];

echo "<h2>Registro</h2><br>Nombre: ".$nombre;
echo "<br>Apellido paterno: ".$apaterno;
echo "<br>Apellido materno: ".$amaterno;
echo "<br>Telèfono: ".$telefono;
echo "<br>Correo: ".$correo;


$query = ("INSERT INTO usuarios (nombre,apaterno,amaterno,telefono,correo) VALUES ('$nombre','$apaterno','$amaterno','$telefono','$correo')");
$process = pg_query($conn, $query);
if  (!$process) {
   echo "<br>No se pudo realizar el registro";
}
else {
   echo "<br>El registro se ha realizado exitosamente";
}
pg_close($conn);
?>
<br><br>
<form action="http://www.registro.unam.mx/registro.php">
    <input type="submit" value="Regresar al formulario" />
</form>
</body>
</html>
