<?php
session_start();
$Name=$_POST['username'];
$Pass=$_POST['pass'];
if ($Name=="Nisarg" and $Pass=="Patel")
{
$_SESSION['Username']=$Name;
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