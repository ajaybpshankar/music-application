<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$s_id=$_POST['s_id'];
$name=$_POST['singer_name'];
$place=$_POST['place'];
$best_of_songs=$_POST['best_of_songs'];
$awards=$_POST['awards'];


include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `singer` SET `s_id`='".$s_id."',`singer_name`='".$name."',`place`='".$place."',`best_of_songs`='".$best_of_songs."',`awards`='".$awards."' WHERE `s_id`=".$s_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `singer` WHERE `s_id`=".$s_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=sretrieve.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
