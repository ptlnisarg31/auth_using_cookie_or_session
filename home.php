<?php
session_start();
?>
	<?php
	if(isset($_SESSION['Username']))
	{
		echo "Welcome ".$_SESSION['Username'];
	?>
													<a href="logout.php">Logout</a>

	<?php	
		}
		else
		{
			header('location:form.php');
		}
		?>
											</form>
											</body>
											</html>