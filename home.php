<?php

if(isset($_COOKIE['Username']) and isset($_COOKIE['Password']))
{
	echo "Welcome ".$_COOKIE['Username'];

}
else
{
	header("location:form.php");
}
?>