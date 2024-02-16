<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$correo = isset($_POST['correo']) ? $_POST['correo'] : "";
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

$port = "5432";
$host = $_ENV['HOST_DB'];
$database = $_ENV['DB'];;
$username = $_ENV['HOST_DB_USER'];
$password = $_ENV['HOST_DB_PASS'];

$conn = pg_connect("host=$host port=$port dbname=$database user=$username password=$password");

if (!$conn) {
    echo "Error al conectar a la base de datos: " . pg_last_error($conn);
    exit();
} else {
    echo "Conectado!";
}
?>
