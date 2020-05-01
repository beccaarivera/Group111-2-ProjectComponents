# Group111-2-ProjectComponents

PROJECT DESCRIPTION-
  Our project is an online maze game called Jimmy’s Maze. The game contains seven maze levels as well as a leaderboard to compare your time with your friends. Scoring is done with a timer that saves a user’s score and uploads it to a database that populates the leaderboards. The game itself is made from a JavaScript library called phaser.js and the maps are made from tilemaps in a mapmaker called Tiled. The mazes were first created using a program that generates random mazes using the depth first search method. This program allowed us to input the dimensions we wanted the maze to be and then output a maze to the browser. We took those mazes and manually traced them in Tiled which output a .json file that we were able to implement into Phaser. 
  To use Phaser we had to run the application through a local webserver, we chose Wampserver because it is a package that contains both Apache and SQL. For the back end we created a MySQL database to hold user information and score information; we used PHP to link the front end and back end. Session variables were used to keep track of user data while logged in and passing that information through to the database using Post forms. Combining the front end and back end resulted in an online game with a functioning leaderboard and user login/registration features.
 
FLOW OF DIRECTORIES-
 cole is changing them arround so i will work on this later

