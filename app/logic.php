<?php
function create()
{
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $correo = isset($_POST['correo']) ? $_POST['correo'] : "";
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

    $db = new db();
    $result = $db->insert("INSERT INTO usuarios (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')");
    if ($result) {
        echo "Creado!!!!!";
        http_response_code(201);
    }
}

function records()
{
    $db = new db();
    $result = $db->query("SELECT * FROM usuarios");
    var_dump($result);
    if (is_array($result)) {
        echo json_encode($result);
        http_response_code(200);
    }
}