<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    text-align: left;
    padding: 8px;
}

</style>
</head>
 <fieldset>
      <legend>HAS</legend>

	<center>

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

$sql = "SELECT * FROM has";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table>";
	echo "  <tr>
    <th>s_id</th>
    <th>a_id</th>

  </tr>";
    while($row = mysqli_fetch_assoc($result)) {

	echo "<tr><td>".$row["s_id"]."</td><td>".$row["a_id"]."</td><td>";
    }
	echo "</table>";

} else {

    echo "<h2>0 results</h2>";

}

mysqli_close($conn);
?>
</center>
</fieldset>
</html>
