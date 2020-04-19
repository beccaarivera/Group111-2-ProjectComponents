<?php
session_start();
?>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"/>

    <link href="../../res/css/universal.css" rel="stylesheet"/>
    <style>
      img {
        border-radius: 10%;
        margin-left: 150px;
        margin-top: 50px;
      }
      h1 {
        color : #e84855;
        text-align: center;
        font-size:90px;
        text-shadow: 0px 5px 12px rgba(0,0,0, .35);
      }
      h2 {
        color: #e84855;
        text-align: left;
        font-size 70px;
        text-shadow: 0px 5px 12px rgba(0,0,0, .35);
      }
      .name{
        width:50%;
        margin-left:150px;
        margin-right:auto;
        margin-top:150px;
      }
      th, td {
        color: #ffffff;
        border: 1px solid white;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
        width: 50%;
      }
      table {
        border: 1px solid white;
        border-collapse: collapse;
        margin-right: 250px;
        width: 40%
      }
      .table1 {
        margin-top: -250px;
      }
      .table2 {
        margin-top: -100px;
      }
    </style>
  </head>
  <body>
    <?php require '../../res/elements/navbar.php'; ?>
    <div class="name" id="user_name">
      <h2>
        <?php ECHO $_SESSION["username"]; ?>
      </h2>
    </div>
    <img id="user_img" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" width="200" height="200">
    <div>
      <table id="attepts" align="right" class="table2">
        <tr>
          <th colspan="2"> Best Times for Each Level </th>
        </tr>
        <tr>
          <th> Level # </th>
          <th> Best time </th>
        </tr>
        <tr>
          <td>1</td>
          <td>
            <?php ECHO $_SESSION["current_user_time_level1"]; ?>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>
            <?php ECHO $_SESSION["current_user_time_level2"]; ?>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>
            <?php ECHO $_SESSION["current_user_time_level3"]; ?>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>
            <?php ECHO $_SESSION["current_user_time_level4"]; ?>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>
            <?php ECHO $_SESSION["current_user_time_level5"]; ?>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>