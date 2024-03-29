<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

require_once __DIR__ . "/db.php";
require_once __DIR__ . "/logic.php";

function unauthorized()
{
    echo "Falta su identificacion";
    http_response_code(401);
    exit;
}

$method = strtoupper($_SERVER['REQUEST_METHOD']);
$headers = array_change_key_case(getallheaders(), CASE_LOWER);
if (!array_key_exists('api-key', $headers)) {
    unauthorized();
}

$apiKey = $headers['api-key'];
if ($apiKey != "9942f9ab-5568-44ce-b63c-2f77b9b7a1e7") {
    unauthorized();
}

switch ($method) {
    case 'GET':
        records();
        break;
    case 'POST':
        create();
        break;
}
?>
