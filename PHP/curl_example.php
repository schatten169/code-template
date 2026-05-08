<?php

define("CONFIG_CERT", "");
define("CONFIG_URL", "");

try {
    // TODO: add payload data
    $payload = json_encode([]);

    // Check certificate before sending curl
    // NOTE: fix certificate not valid in some server
    $_cert = CONFIG_CERT;
    if (!file_exists($_cert))
        copy("https://curl.se/ca/cacert.pem", CONFIG_CERT);

    // Prepare new cURL resource
    $ch = curl_init(CONFIG_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_CAINFO, $_cert);
    curl_setopt($ch, CURLOPT_POST, true); // TODO: change method
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Set HTTP Header for POST request
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    ]);

    // Submit the POST request
    $response = curl_exec($ch);
    if ($response === false) {
        // TODO: report curl error
        echo 'Curl error: ' . curl_error($ch);

        // Optional
        // return;
    }

    // TODO: curl success, then?
    $result = json_decode($response, true);

    // Close cURL session handle
    $ch = null;
} catch (exception $ex) {
    // TODO: report error
    // var_dump(json_encode($ex->getMessage(), 128)); die;

    // Optional
    return;
}

// TODO: then what?