<?php


define("CONFIG_NUSOAP_LIB", "");
define("CONFIG_CERT", "");
define("CONFIG_URL", "");
define("CONFIG_URL_PATH", "test");

require_once(CONFIG_NUSOAP_LIB);

$result = false;
$payload = []; // TODO: add payload
$client = new nusoap_client(CONFIG_URL);

try {
    ini_set('soap.wsdl_cache_enabled', 0);

    $result = $client->call(CONFIG_URL_PATH, $payload);
    // TODO: validate result
} catch (exception $ex) {
    // TODO: report nusoap error
    echo 'Nusoap error: ' . $client->getError();
}

// TODO: then what?