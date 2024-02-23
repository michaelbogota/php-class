<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

require_once __DIR__ . "/db.php";
require_once __DIR__ . "/logic.php";

$method = strtoupper($_SERVER['REQUEST_METHOD']);
var_dump($method);
$headers = array_change_key_case(getallheaders(), CASE_LOWER);
if (array_key_exists('api-key', $headers)) {
    $apiKey = $headers['api-key'];
    var_dump($apiKey);
    if ($apiKey == "9942f9ab-5568-44ce-b63c-2f77b9b7a1e7") {
        switch ($method) {
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
