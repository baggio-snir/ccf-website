<?php
require_once './_autoload.php';

// special for tests
if(('cli' === PHP_SAPI)
        && !empty($argv)
        && (2 === $argc)) {
    $method = lib\ApiHandler::METHOD_GET;
    $data = $argv[1];
} else {
    $method = $_SERVER['REQUEST_METHOD'];
    $data = file_get_contents('php://input');
}

ob_start();
$decoded = json_decode($data, true);
if(JSON_ERROR_NONE !== json_last_error()) {
    lib\Logger::getInstance('')->log('Unable to load JSON from "'.$data.'" : '.json_last_error_msg());
}
$result = lib\ApiHandler::getInstance()
        ->setMethod($method)
        ->setAllData($decoded?? [])
        ->handle();
ob_end_clean();

http_response_code($result['code']);
echo json_encode($result);
exit;
