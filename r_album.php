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
<h1>ALBUM</h1>
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

$sql = "SELECT * FROM album natural join images";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table>";
	echo "  <tr>
    <th>Album ID</th>
    <th>Title</th>
        <th>Language</th>
    <th>Duration</th>
    <th>Release Date</th>
    <th>Image</th>
	

  </tr>";
    while($row = mysqli_fetch_assoc($result)) {

	echo "<tr><td>".$row["a_id"]."</td><td>".$row["title"]."</td><td>".$row["language"]."</td><td>".$row["duration"]."</td><td>".$row["release_date"]."</td><td>";
      echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imag']).'"height="200" width="200"  />
                    </td></tr>';
    }
	echo "</table>";

} else {

    echo "<h2>No Results</h2>";

}

?>
</fieldset> 
<?php
$sql1="CALL `getalbum`()";
$result1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($result1))
	$album_count=$row['count(*)'];
echo "<br />";
echo "Album count=$album_count";
mysqli_close($conn);
?>
<br></br>
<p><a href=album.html>Insert</a></p>
<p><a href=aretrieve.php>Update/Delete</a></p>
<p><a href=uploadimage.php>Update Image</a></p>
<p><a href=homepage.php> Back</p>

</center>
</body>


</html>
