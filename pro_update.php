<?php session_start();


$newFname = $_POST['get_first'];
$newLname = $_POST['get_last'];
$newPword = $_POST['password'];
$newEmail = $_POST['email'];



/*
$_SESSION['id'];	

$_SESSION['user'];

$_SESSION['fname'];

$_SESSION['lname'];

$_SESSION['pword'];

$_SESSION['email'];

$_SESSION['resume'];
*/


$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
mysql_select_db('pb0612_nursing', $db); // select database 

if( $newFname != "")
{
	$sql = "UPDATE users SET `fname`=[".$newFname."] WHERE `user_id` = ".$_SESSION['id'];
	mysql_query($sql, $db);
	$_SESSION['fname']; = $newFname;
}
if( $newLname != "")
{
	$sql = "UPDATE users SET `lname` = [".$newLname."] WHERE user_id = ".$_SESSION['id'];
	mysql_query($sql, $db);
	$_SESSION['lname'] = $newLname;
}
if( $newPword != "")
{
	$sql = "UPDATE users SET `password`=[".$newPword."] WHERE user_id = ".$_SESSION['id'];
	mysql_query($sql, $db);
	$_SESSION['pword'] = $newPword;
}
if( $newEmail != "")
{
	$sql = "UPDATE users SET `email`=[".$newEmail."] WHERE user_id = ".$_SESSION['id'];
	mysql_query($sql, $db);
	$_SESSION['email'] = $newEmail;
}

?>
