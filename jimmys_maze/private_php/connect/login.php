<?php
session_start();

require 'connect.php';

$post_username = $con ->escape_string($_POST['username']);
$post_password = $con ->escape_string($_POST['password']);

$result = $con ->query("SELECT * FROM users WHERE username='$post_username'");

$_SESSION['login_error'] = "You have entered an incorrect username or password...";
//set this ^ back to null after successfull login

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['logged_in'] = FALSE;
$_SESSION['login_error'] = "You have enterfdsgsfdged an incorrect username or password...";
	header("Location: /public_html/pages/login");
}else { // User exists
    $user = $result->fetch_assoc();
    $pass = password_hash($post_password, PASSWORD_DEFAULT);
    if ( $pass === $user['password'] ) {
        $_SESSION['login_error'] = null;
        $_SESSION['time_registered'] = $user['time_registered'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_uuid'] = $user['uuid'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = TRUE;
		
		header("Location: /");
        
    }else {
        $_SESSION['logged_in'] = FALSE;
		
		header("Location: /public_html/pages/login");
    }
}
