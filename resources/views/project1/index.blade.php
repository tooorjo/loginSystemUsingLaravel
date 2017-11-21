<!DOCTYPE html>
<html>
<head>
<title>login page</title>
</head>
<body>
<h4>Enter your username and password to login.</h4>
<form method="post" action="/userInfo">
Username:
<input type="text" name="username">
<br>Password:
<input type="password" name="password">
<br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" value="submit">
</form>
<?php
/*$reply="";
session_start();

if(isset($_SESSION['reply']))
{
	$reply=$_SESSION['reply'];
}
session_destroy();
echo $reply."<br>";
*/
?>
<br><br>
<h4>Do not have an account?? <a href='register'>register</a> then, it's FREE!!!!
</body>
</html>