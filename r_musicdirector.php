<html>
<head>
<style>
*{
  font-family: 'Bahnschrift';
  color: white;
}
h1{
  text-align: center;
  padding-top: 20px;
}
table {
    border-collapse: collapse;
    width: 80%;
	font-size:150%;
}

th, td {
    font-size: 125%;
    text-align: center;
    padding: 10px;
}
a{
  text-align: center;
	border:inline;
	outline:inline;
	outline-color: black;
	border-right:red;
	padding-top:20px;
	padding-bottom:20px;
	font-size:30px;
	display:block;
}


</style>
</head>
<body background="mic.jpg" >
	<center>
    <h1>MUSIC DIRECTOR</h1>
 <fieldset>
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

$sql = "SELECT * FROM music_director";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table>";
	echo "  <tr>
    <th>m_id</th>
    <th>music_director_name</th>
    <th>gender</th>
    <th>best_music</th>
    <th>instrumental_profession</th>
    <th>awards</th>


  </tr>";
    while($row = mysqli_fetch_assoc($result)) {

	echo "<tr><td>".$row["m_id"]."</td><td>".$row["music_director_name"]. "</td><td>".$row["gender"]."</td><td>".$row["best_music"]."</td><td>".$row["instrumental_profession"]."</td><td>".$row["awards"]. "</td><td>";
    }
	echo "</table>";

} else {

    echo "<h2>0 results</h2>";

}

mysqli_close($conn);
?>
</center>

</fieldset>
<br></br>
<p><a href=musicdirector.html>Insert</a></p>
<p><a href=mdretrieve.php>Update/Delete</a></p>
<p><a href=homepage.php> Back</p>
</html>
