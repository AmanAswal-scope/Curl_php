<?php
// Initialize cURL
$ch = curl_init(); // initialise curl session and return curl handle which further used in setopt function
//var_dump($ch);

$url = "http://www.google.com";
//$url="https://reqres.in/api/users?page=2";
$timeout = 10;
curl_setopt($ch, CURLOPT_URL, $url);

// Set option to receive the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

// Close cURL
curl_close($ch);

// Display the response
echo $response;



/*

CURLOPT_RETURNTRANSFER:
Description: Set this option to true to return the transfer as a string instead of outputting it directly.

CURLOPT_URL:
Description: Set this option to the URL you want to send the cURL request to.

CURLOPT_POST:
Description: Set this option to true if you want to perform an HTTP POST request.

CURLOPT_POSTFIELDS:
Description: If CURLOPT_POST is set to true, use this option to set the POST data.

CURLOPT_HTTPHEADER:
Description: Set this option to an array of HTTP header fields to include in the request.

CURLOPT_USERAGENT:
Description: Set this option to a string to specify the User-Agent header for the request.

CURLOPT_TIMEOUT:
Description: Set this option to the maximum number of seconds the cURL functions can take.

CURLOPT_CONNECTTIMEOUT:
Description: Set this option to the maximum number of seconds to allow cURL functions to execute.

CURLOPT_SSL_VERIFYPEER:
Description: Set this option to false to stop cURL from verifying the peer's SSL certificate.

CURLOPT_SSL_VERIFYHOST:
Description: Set this option to 0 to not check the names in the SSL certificate.

CURLOPT_FOLLOWLOCATION:
Description: Set this option to true to follow any "Location" header that the server sends as part of the HTTP header.

CURLOPT_COOKIE:
Description: Set this option to a string to include cookies with the request.

CURLOPT_HTTPAUTH:
Description: Set this option to the HTTP authentication method to use.

CURLOPT_USERPWD:
Description: Set this option to a username and password string in the format username:password.

CURLOPT_PROXY:
Description: Set this option to the proxy server's hostname.

CURLOPT_PROXYPORT:
Description: Set this option to the proxy server's port number.

CURLOPT_PROXYUSERPWD:
Description: Set this option to the username and password for the proxy server in the format username:password.

*/

?>