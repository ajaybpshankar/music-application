<?php
echo "<h2><center>Delete form</center></h2>";
echo "<br>";
echo "<br>";
$a_id=$_POST['a_id'];
$duration=$_POST['duration'];
$review=$_POST['review'];
$title=$_POST['title'];
include_once 'album.php';

$sql = "DELETE FROM `album` WHERE `a_id`=".$a_id;

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>Record updated successfully</h2>";
	echo  "<br><br><a href=retrieve.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
