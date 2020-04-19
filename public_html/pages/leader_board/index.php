
<?php
session_start();
?>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"/>

		<link href="../../res/css/universal.css" rel="stylesheet"/>
		<style>
		h1{
			color : #e84855;
			text-align: center;
			font-size:100px;
			height:50px;
			text-shadow: 0px 5px 12px rgba(0,0,0, .35);
		}
		td{color:#e84855; text-align:center;}
		th{color:#e84855; text-align:center;}
		#bit{font-size:80px}
		#parent {position: relative;}

		#child {
			position: absolute;
			top: 50%;
			left: 50%;
			height: 30%;
			width: 50%;
			margin: 15% 0 0 -25%;
		}

		</style>

	</head>
	<body>
		<?php require_once '../../res/elements/navbar.php'; ?>

		<form action="/private_php/connect/leaderboard.php" method="post">
			<select id="level_select" name="level_selector" onchange="this.form.submit()">
			  <option value="0">Select a Level</option>
			  <option value="1">Level 1</option>
			  <option value="2">Level 2</option>
			  <option value="3">Level 3</option>
			  <option value="4">Level 4</option>
			  <option value="5">Level 5</option>
			  <option value="6">Level 6</option>
			</select>
		</form>

		<h1>Jimmy's Maze!</h1>
		<div class="container" id="parent">
			<table class="table table-bordered" id="child">
				<thead>
					<tr>
						<th colspan="3">
							<?php 
							if(isset($_SESSION["selected_level"])){
								ECHO 'Level '.$_SESSION["selected_level"]; 
							}
							else{
								ECHO 'Level not selected';
							}
							?>
						</th>
					</tr>
					<tr>
						<th>Rank</th>
						<th>Username</th>
						<th>Time taken to complete</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>#1</td>
						<td>
							<?php ECHO $_SESSION["bestplayer1"]; ?>
						<td>
							<?php ECHO $_SESSION["time1"]; ?>
					</tr>
					<tr>
						<td>#2</td>
						<td>
							<?php ECHO $_SESSION["bestplayer2"]; ?>
						<td>
							<?php ECHO $_SESSION["time2"]; ?>
					</tr>
					<tr>
						<td>#3</td>
						<td>
							<?php ECHO $_SESSION["bestplayer3"]; ?>
						<td>
							<?php ECHO $_SESSION["time3"]; ?>
					</tr>
					<tr>
						<td>#4</td>
						<td>
							<?php ECHO $_SESSION["bestplayer4"]; ?>
						<td>
							<?php ECHO $_SESSION["time4"]; ?>

					</tr>
					<tr>
						<td>#5</td>
						<td>
							<?php ECHO $_SESSION["bestplayer5"]; ?>
						<td>
							<?php ECHO $_SESSION["time5"]; ?>

					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>
