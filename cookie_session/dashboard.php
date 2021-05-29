<?php
	session_start();
	/*if(!isset($_COOKIE["username"])){
		header("Location:index.php");
	}*/
	if(!isset($_SESSION["username"])){
		header("Location:index.php");
	}
?>
<html>
	<!--<h1>Welcome <?php echo $_COOKIE["username"];?></h1>-->
	<h1>Welcome <?php echo $_SESSION["username"];?></h1>
</html>