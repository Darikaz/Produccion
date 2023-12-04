<?php
$server = "localhost";
$user = "root";
$pass = "c00rd1n4";
$bd = "srefsmi";
$conexion = new mysqli($server, $user, $pass, $bd);
if ($conexion->connect_errno) {
	die("Conexion Fallida" . $conexion->connect_errno);
}else {
echo "conectado";
}
?>
