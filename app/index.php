<?php

require_once __DIR__ . "/db.php";

$headers = array_change_key_case(getallheaders(), CASE_LOWER);
if (array_key_exists('api-key', $headers)) {
    $apiKey = $headers['api-key'];
    if ($apiKey == "9942f9ab-5568-44ce-b63c-2f77b9b7a1e7") {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
        $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

        $db = new db();
        $result = $db->query("INSERT INTO usuarios (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')");
        if ($result) {
            echo "Creado!!!!!";
            http_response_code(201);
        }
    }
} else {
    echo "Falta su identificacion";
    http_response_code(401);
    exit;
}
?>
