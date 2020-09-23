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

$a_id=$_POST['a_id'];
$title=$_POST['title'];
$language=$_POST['language'];
$duration=$_POST['duration'];
$release_date=$_POST['release_date'];
$sql = "INSERT INTO album (a_id,title,language,duration,release_date)VALUES (".$a_id.",'".$title."','".$language."','".$duration."','".$release_date."')";


if (mysqli_query($conn, $sql)) {
	header("location:upload.php?a_id=$a_id");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
