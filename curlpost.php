<?php
$url = "http://www.example.com";
$data = array('param1' => 'value1', 'param2' => 'value2');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Set option to receive the response as a string
// Add other options if needed
$response = curl_exec($ch);

if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    curl_close($ch);
    
    $name = "aman ";
    echo "My name is: " . $name. "\n";
    print_r($data);

}


?>
