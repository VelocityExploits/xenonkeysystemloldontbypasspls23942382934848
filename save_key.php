<?php
// save_key.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the key from POST request
    $key = $_POST['key'];

    // Define the path to the keys file
    $file = 'Keys.txt';

    // Append the key to the file
    file_put_contents($file, $key . PHP_EOL, FILE_APPEND | LOCK_EX);

    // Send a response to indicate success
    echo 'Key saved successfully';
} else {
    // Not a POST request
    http_response_code(405); // Method Not Allowed
    echo 'Method Not Allowed';
}
?>
