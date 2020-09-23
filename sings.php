<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mymusic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Getting Values from HTML Page using Post Method and storing in Variables

$s_id=$_POST['s_id'];
$so_id=$_POST['so_id'];




$sql = "INSERT INTO sings(s_id,so_id)
VALUES ('".$s_id."','".$so_id."')";

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>New record created successfully</h2>";
	echo  "<br><br><a href=index.html>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>