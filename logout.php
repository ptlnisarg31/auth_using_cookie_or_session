<?php

session_start();
session_destroy ();
$session="destroyed";
if($session=="destroyed")
{
	header("location:form.php");
}
?>