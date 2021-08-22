<?php
$Name=$_POST['username'];
$Pass=$_POST['pass'];

if ($Name=="Nisarg" and $Pass=="Patel")
{
	setcookie("Username",$Name,60*60*24+time());
	header("location:home.php");
}
else
{
	echo "Wrong Username and password Try again !!";
?>
<a href="form.php">Login</a>
<?php
}
?>
