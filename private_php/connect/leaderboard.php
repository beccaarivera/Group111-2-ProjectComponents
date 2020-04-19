<!--<table class="table table-bordered" id="child">
	<thead>
		<tr>
			<th>Rank</th>
			<th>Username</th>
			<th>Levels Completed</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>#1</td>
			<td/>
			<td/>
		</tr>
		<tr>
			<td>#2</td>
			<td/>
			<td/>
		</tr>
		<tr>
			<td>#3</td>
			<td/>
			<td/>
		</tr>
		<tr>
			<td>#4</td>
			<td/>
			<td/>

		</tr>
		<tr>
			<td>#5</td>
			<td/>
			<td/>

		</tr>
	</tbody>
</table>
-->

<?php
session_start();
require 'connect.php';

$selected_level = $con->escape_string($_POST["level_selector"]);
$result = $con->query("SELECT username, time_taken FROM user_scores WHERE level_number = '$selected_level' ORDER BY time_taken ASC LIMIT 5");

$selected_level = $_POST["level_selector"];
$_SESSION["selected_level"] = $selected_level;

$var = 1;
while($highscore = $result->fetch_assoc()){
	$_SESSION["bestplayer".$var] = $highscore["username"];
	$_SESSION["time".$var] = $highscore["time_taken"];
	$var += 1;
}

header("Location: /public_html/pages/leader_board");

?>