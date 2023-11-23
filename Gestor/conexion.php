<?php
$server = "162.241.62.197";
$usuario = "mepresen_lalo";
$contrasena = "4n43l1z4b3th";
$base_de_datos = "mepresen_gestor_clientes_db";

// Realiza la conexión a la base de datos
$conexion = new mysqli($server, $usuario, $contrasena, $base_de_datos);

// Verifica la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
