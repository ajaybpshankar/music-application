<html>
<head>
<style>
*{
  font-family: 'Bahnschrift';
  color: white;
}
h1{
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
    <h1>SINGER</h1>
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

$sql = "SELECT * FROM singer";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table>";
	echo "  <tr>
    <th>s_id</th>
    <th>singer_name</th>
      <th>place</th>
    <th>best_of_songs</th>
    <th>awards</th>

  </tr>";


  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["s_id"]."</td><td>".$row["singer_name"]."</td><td>".$row["place"]."</td><td>".$row["best_of_songs"]."</td><td>".$row["awards"]."</td></tr>";
    }
	echo "</table>";

} else {

    echo "<h2>0 results</h2>";

}

mysqli_close($conn);
?>
</center>
</fieldset>
<p><a href=singer.html>Insert</a></p>
<p><a href=sretrieve.php>Update/Delete</a></p>
<p><a href=homepage.php> Back</p>
</html>
