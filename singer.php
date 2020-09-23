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
$name=$_POST['singer_name'];
$place=$_POST['place'];
$best_of_songs=$_POST['best_of_songs'];
$awards=$_POST['awards'];


$sql = "INSERT INTO singer(s_id,singer_name,place,best_of_songs,awards)
VALUES ('".$s_id."','".$name."','".$place."','".$best_of_songs."','".$awards."')";

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>New record created successfully</h2>";
	echo  "<br><br><a href=r_singer.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
