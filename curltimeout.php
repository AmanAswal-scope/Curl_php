$url = "http://www.example.com";
$timeout = 10; // Timeout in seconds
<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set option to receive the response as a string
// Add other options if needed
$response = curl_exec($ch);

if ($response === false) {
    if (curl_errno($ch) == CURLE_OPERATION_TIMEDOUT) {
        echo 'cURL Error: Request timed out.';
    } else {
        echo 'cURL Error: ' . curl_error($ch);
    }
} else {
    // Handle the response
    echo 'Response: ' . $response;
}

curl_close($ch);
?>