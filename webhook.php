<?php
$msg = "test";
mail("e_uribe2011@yahoo.com","This Happened",$msg);
echo "<p>Trying</p>";
header('Content-type: application/json');

// php://input contains raw data, POST can only handle simple key value
// whereas input can handle more complicated such as nested arrays, etc
//$body = file_get_contents("php://input");
//$webhook = json_decode($body, true);

$response->speech = "Nope, guess again!";
$response->displayText =  "Nope, guess again!";
$response->source = "beinspired";

exit(json_encode($response));
?>
