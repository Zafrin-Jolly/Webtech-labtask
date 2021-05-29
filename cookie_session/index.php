<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username=$_POST["username"];
		$password=$_POST["password"];
		if($username == "tanvir" && $password=="123456"){
			//setcookie("username",$username,time()+120);
			session_start();
			$_SESSION["username"]=$username;
			header("Location: dashboard.php");
		}
		
		
	}

?>

<html>
	<head></head>
	<body>
		<form action="" method="post">
			Username: <input type="text" name="username"><br>
			Password: <input type="password" name="password"><br>
			<input type="submit" name="submit" value="login">
			
		</form>
	</body>
</html>