<?php
session_start();
?>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"/>

		<link href="../../res/css/universal.css" rel="stylesheet"/>
		<style>
		.container {
			display:block;
			box-shadow:0px 3px 15px rgba(0,0,0,.2);
			border: 2px solid #383b3e;
			padding-top: 25px;
			padding-bottom:15px;
			width:50%;
			margin-left:auto;
			margin-right:auto;
			margin-top:15px;
			border-radius:10px;
			background-color:#e9ecef;
		}
      #user_img {
        border-radius: 10%;
		position:relative;
		max-width:50%;
		max-height:50%;
      }
      h2{
        color: #e84855;
        text-align: left;
        font-size 70px;
        text-shadow: 0px 5px 12px rgba(0,0,0, .35);
      }
	  span{
		  display:inline-block;
		  width:49%;
		  vertical-align:top;
		  }
		 span table{ 
		 width:50px;
			margin-top:10px;
			margin-left:auto;
			margin-right:auto;
			background-color :#383B3E;
		 }
		 thead,tbody{
			 display:inline-block;
		 width:auto;}
	  
      th, td {
    max-width: 100%;
        color: #5eb7e7;
        border: 1px solid white;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
      }
		</style>
	</head>
	<body>
    <?php require '../../res/elements/navbar.php'; ?>
		<div class="container">
		<span>
      <h2 class="name" id="user_name"> Name </h2>
    <img id="user_img" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" >
	</span>
		<span>
      <table id="high_score"  class="table1">
		<thead>
        <tr>
          <th> High Score </th>
          <th> Highest Level Completed </th>
        </tr>
		</thead>
		<tbody>
        <tr>
          <td>  </td>
          <td>  </td>
        </tr>
		</tbody>
      </table>
      <table id="attepts"  class="table2">
		<thead>
        <tr>
          <th colspan="2"> Summary of Past Five Attempts </th>
        </tr>
        <tr>
          <th> Attempt # </th>
          <th> Score </th>
        </tr>
		</thead>
		<tbody>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
		</tbody>
      </table>
	</span>
    </div>
  </body>
</html>
