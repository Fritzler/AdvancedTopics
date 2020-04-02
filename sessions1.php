<?php
//Christopher Thurn, 1/15/2020, Session File One
//Declare and initialize the local variable $user.
$user = 'Not Logged In';

//Starting the session
session_start();

//Display text to the web page
echo 'Sessions Page One<br />';

//Session_id() returns the actual session ID created by the server.
$SID = session_id();

//Declare and initialize the session variable $_SESSION['user']
$_SESSION['user'] = 'Authorized User';

//Test to see if the session variable is set (contains a value)
if(isset($_SESSION['user']))
{
	//Do if isset is true
	//Setting the local variable to the session variable value
	$user = $_SESSION['user'];
} else {
	//Do if isset is false
	//Setting the local variable to the value 'Guest'
	$user = 'Guest';
}

//Display the value of the local variable to the web page
//Answer should be either 'Authorized User' or 'Guest'
echo 'User variable: '.$user;

//Display the session ID that was generated by the session_start() command
echo '<br /> Session_id: ' .$SID ;
echo '<br /><br /><br />';

//Create and display a link for the next page.
echo '<a href="sessions2.php">Sessions Page Two</a> ';
?>