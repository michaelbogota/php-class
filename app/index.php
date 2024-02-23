<?php

require_once __DIR__ . "/db.php";

$headers = getallheaders();
var_dump($headers);
if (array_key_exists('api-key', $headers)) {
    $apiKey = $headers['api-key'];
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

    $db = new db();
    var_dump($db->query("INSERT INTO usuarios (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')"));
} else {
    echo "Falta su identificacion";
    http_response_code(401);
    exit;
}
?>
