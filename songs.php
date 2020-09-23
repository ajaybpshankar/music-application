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

$so_id=$_POST['so_id'];
$name=$_POST['song_name'];
$genre=$_POST['genre'];
$duration=$_POST['duration'];
$m_id=$_POST['m_id'];
$a_id=$_POST['a_id'];
$s_id=$_POST['s_id'];
$link=$_POST['link'];

$sql = "INSERT INTO songs(so_id,song_name,duration,m_id,a_id,link)
VALUES ('".$so_id."','".$name."','".$duration."','".$m_id."','".$a_id."','".$link."')";

if (mysqli_query($conn, $sql)) {
  $query = "INSERT INTO sings(s_id,so_id,genre) VALUES ('".$s_id."','".$so_id."','".$genre."')";
  if (mysqli_query($conn, $query)){
    echo "<center><br><br><h2>New record created successfully</h2>";
	echo  "<br><br><a href=r_songs.php>Back</a></center>";
} }else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
