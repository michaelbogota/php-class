<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

require_once __DIR__ . "/db.php";
require_once __DIR__ . "/logic.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$headers = array_change_key_case(getallheaders(), CASE_LOWER);
if (array_key_exists('api-key', $headers)) {
    $apiKey = $headers['api-key'];
    if ($apiKey == "9942f9ab-5568-44ce-b63c-2f77b9b7a1e7") {
        switch ($metodo) {
            case 'GET':
                records();
                break;
            case 'POST':
                create();
                break;
        }

    }
} else {
    echo "Falta su identificacion";
    http_response_code(401);
    exit;
}
?>
