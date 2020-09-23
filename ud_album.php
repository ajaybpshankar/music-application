<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$a_id=$_POST['a_id'];
$title=$_POST['title'];
$language=$_POST['language'];
$duration=$_POST['duration'];
$release_date=$_POST['release_date'];




include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `album` SET `a_id`='".$a_id."',`title`='".$title."',`language`='".$language."',`duration`='".$duration."',`release_date`='".$release_date."' WHERE `a_id`=".$a_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `album` WHERE `a_id`=".$a_id;
$query = "DELETE FROM `songs` WHERE `a_id`=".$a_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
  if (mysqli_query($conn, $query)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=r_album.php>Back</a></center>";
}} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
