<?php

include "./Db.php";

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$correo = isset($_POST['correo']) ? $_POST['correo'] : "";
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

$db = new Db();
print($db->query("INSERT INTO usuarios (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')"));

?>
