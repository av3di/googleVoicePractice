<?php
ini_set("always_populate_raw_post_data", -1);
header('Content-type: application/json');

// php://input contains raw data, POST can only handle simple key value
// whereas input can handle more complicated such as nested arrays, etc
$body = file_get_contents("php://input");
//$webhook = json_decode($body, true);

$response->speech = "Nope, guess again!";
$response->displayText =  "Nope, guess again!";
$response->source = "beinspired";

echo json_encode($response);
?>
