<?php

require_once __DIR__ . "/db.php";

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$correo = isset($_POST['correo']) ? $_POST['correo'] : "";
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

$db = new db();
print($db->query("INSERT INTO usuarios (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')"));

?>
