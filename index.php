<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario HTML básico</title>
</head>
<body>
<h1>Formulario de contacto</h1>
<form action="/index.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Introduzca su nombre">
    <br>
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" placeholder="Introduzca su correo electrónico">
    <br>
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="5" cols="30" placeholder="Introduzca su mensaje"></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>