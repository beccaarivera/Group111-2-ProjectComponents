
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"/>

		<link href="res/css/universal.css" rel="stylesheet"/>
		<style>
        h1 {color:#e84855;}
        h1{
			font-size:100px;
			text-align:center;
			height:225px;
			padding:15px;
			text-shadow: 0px 5px 12px rgba(0,0,0, .35);
		}

		h2{text-align:center;}

        .btn-group-vertical button:hover{
			text-shadow:0px 0px 6px rgba(255,255,255,.70),0px 0px 3px rgba(255,255,255,.80);
			font-wieght:250;
			box-shadow:0px 0px 15px rgba(255,255,255,.18), 0px 0px 5px rgba(255,255,255,.25);
			border-color:white;
		}
		.btn-group-vertical button{font-size:50px;font-size:50px;
			background-color:#2D2831;
			color:#fff;
			font-weight:200;
		}
		.btn{
			border-radius:8px;
		}
		.btn-group-vertical {
			box-shadow:0px 35px 125px rgba(0,0,0,.25), 0px 0px 8px rgba(0,0,0,.35);
			border-radius:25px;
		}
		</style>
	</head>
	<body>

		<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 2px solid #e84855;">
			<a class="navbar-brand" href="#" style="text-shadow:0px 3px 5px rgba(0,0,0,.15); font-weight:350;font-size:30px;color:#e84855;">Jimmy's Maze</a>
			<ul class=" navbar-nav mr-auto">
				<li class="navbar-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="navbar-item ">
					<a class="nav-link" href="pages/leader_board/index.html">Leader Board</a>
				</li>
				<li class="navbar-item ">
					<a class="nav-link" href="pages/about/index.html">About</a>
				</li>
				<li class="navbar-item ">
					<a class="nav-link" href="pages/user_profile/index.html">Profile</a>
				</li>
			</ul>
			<a class="btn my-2 my-sm-0 rounded-circle btn-prof" style="padding:0px;padding-top:7px;padding-right:.5px;width:65px; height:65px;" href="#" >
				<img class="rounded-circle" src="res/img/profile.png" width="50px"height="50px"/>
			</a>
		</nav>

		<div class=" ">
			<h1 >Jimmy's maze!</h1>
			<div class="col-md-12 text-center">
				<div class="btn-group-vertical" >
					<button type="button" class="btn btn-outline-danger"  id="score" onclick="window.location.href = 'pages/leader_board/index.html'">Check Leaderboard</button>
					<button type="button" class="btn btn-outline-danger" id="about"onclick="window.location.href = 'pages/about/index.html'">About</button>
					<button type="button" class="btn btn-outline-danger" id="start" onclick="window.location.href = '../maze_game/src/mazelevel1.html'">Start Game</button>

				</div>
			</div>
		</div>
	</body>
</html>