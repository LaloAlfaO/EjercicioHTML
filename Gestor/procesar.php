<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilamos los datos del formulario
    $codigo_gestion = $_POST["codigo_gestion"];
    $nombre_sitio = $_POST["nombre_sitio"];
    // Otros campos
    $avance = $_POST["avance"];
    $tipo_contacto = $_POST["tipo_contacto"];

    // Aquí puedes realizar operaciones lógicas, como guardar en una base de datos o hacer cálculos.

    // Redirigir o mostrar un mensaje de confirmación
    echo "¡Datos guardados exitosamente!";
}
?>
