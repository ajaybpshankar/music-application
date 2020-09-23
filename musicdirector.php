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

$m_id=$_POST['m_id'];
$name=$_POST['music_director_name'];
$gender=$_POST['gender'];
$best_music=$_POST['best_music'];
$instrumental_profession=$_POST['instrumental_profession'];
$awards=$_POST['awards'];





$sql = "INSERT INTO music_director(m_id,music_director_name,gender,best_music,instrumental_profession,awards)
VALUES ('".$m_id."','".$name."','".$gender."','".$best_music."','".$instrumental_profession."','".$awards."')";

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>New record created successfully</h2>";
	echo  "<br><br><a href=r_musicdirector.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
