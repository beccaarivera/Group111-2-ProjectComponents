<?php
session_start();
require 'connect.php';

$username = $con->escape_string($_SESSION['username']);
$var = 1;
while($var<6){
	$level_number = $con->escape_string($var);
	$result = $con->query("SELECT time_taken FROM user_scores WHERE username='$username' AND level_number='$level_number' ORDER BY time_taken ASC LIMIT 1;");
	$best_time = $result->fetch_assoc();
	$_SESSION["current_user_time_level".$var] = $best_time["time_taken"];
	$var += 1;
}

header("Location: /public_html/pages/user_profile")

?>