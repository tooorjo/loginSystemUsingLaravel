<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$n=$p="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$n=$_POST["username"];
	$p=$_POST["pass"];
	//echo $n,"<br>";
	//echo $p;
}
$conn=new mysqli("localhost","root","","project1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$sql = "SELECT username,password,occupation FROM users";
$result=$conn->query($sql);
$reply="";
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		if($n==$row["username"] && $p==$row["password"])
		{
			$reply="Your occupation is ".$row["occupation"];
			break;
		}
	}
	if($reply=="") $reply="NO matching username and password combination.";
}
session_start();
$_SESSION['reply']=$reply;

?>
<meta http-equiv="refresh" content="0;URL=login.php" />
</body>
</html>