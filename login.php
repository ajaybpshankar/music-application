<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mymusic";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		$user = mysqli_real_escape_string($conn, $_POST["username"]);
		$pass = md5(mysqli_real_escape_string($conn, $_POST["password"]));
		$sql="SELECT * FROM admin WHERE username='$user' and password='$pass' ";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);
		if($count == 1)
		{
				session_start();
				$_SESSION['login_admin'] = $user;
				header("location: homepage.php");
		}

		else
		{
				header("location: login.html?user=fail");
		}
		mysqli_close($conn);
?>
