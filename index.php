<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$response = [
    "email" => "matthewadeniyi55@gmail.com",  // Replace with your actual HNG12 email
    "current_datetime" => gmdate("c"),    // Generates ISO 8601 UTC time
    "github_url" => "https://github.com/Matthewadeniyi/Hng12-stage0"
];

echo json_encode($response);
?>
