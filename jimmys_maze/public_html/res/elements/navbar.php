
<script>
var visibleHub = false;
function openUserHub(){
	if(visibleHub){
		document.getElementById("userHub").style.display = "none";
		visibleHub = false;
	}else{
		document.getElementById("userHub").style.display = "block";
		visibleHub = true;
	}
}

</script>
		<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 2px solid #e84855;">
			<a class="navbar-brand" href="#" style="text-shadow:0px 3px 5px rgba(0,0,0,.15); font-weight:350;font-size:30px;color:#e84855;">Jimmy's Maze</a>
			<ul class=" navbar-nav mr-auto">
				<li class="navbar-item">
					<a class="nav-link" href="/public_html">Home</a>
				</li>
				<li class="navbar-item ">
					<a class="nav-link" href="/public_html/pages/leader_board">Leader Board</a>
				</li>
				<li class="navbar-item ">
					<a class="nav-link" href="/public_html/pages/about">About</a>
				</li>
				<li class="navbar-item ">
					<a class="nav-link" href="/public_html/pages/profile">Profile</a>
				</li>
			</ul>
			<a class="btn my-2 my-sm-0 rounded-circle  btn-prof" style="padding:0px;padding-top:7px;padding-right:.5px;width:65px; height:65px;" href="#" >
				<img class="rounded-circle" src="/public_html/res/img/profile.png" width="50px"height="50px" onclick="openUserHub()" />
			</a>
			<style>
				#userHub{
					display:none;
					background-color: #383b3e;
					padding :15px;
					border-radius: 10px;
					color :#e84855;
					text-shadow: 0px 0px 10px black;
					position: absolute;
						right :8px;
						top:90px;
						box-shadow: 0px 0px 15px rgba(0,0,0,.5);
				}
				#userHub div{
					display:block;
					width:fit-content;
					margin-left:auto;
					margin-right:auto;
					margin-top:5px;
				}
			</style>
			<div id="userHub">
				<?php 
					if($_SESSION['logged_in']){
						echo '<div><button class="btn btn-lg btn-primary"  type="submit">Logout</button></div>';
					}else{
						
					}
				?>
				<h6> You are currently not logged in </h6>
				<div>
				<a href="/public_html/pages/login" class="btn btn-lg btn-primary"  type="submit">Login</a>
				<a href="/public_html/pages/register" class="btn btn-lg btn-primary"  type="submit">Register</a>
				</div>
			</div>
		</nav>