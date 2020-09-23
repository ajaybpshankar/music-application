<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$s_id=$_POST['s_id'];
$a_id=$_POST['a_id'];


include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `songs` SET `s_id`=".$s_id.",`a_id`='".$a_id." WHERE `so_id`=".$so_id."";
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `songs` WHERE `s_id`=".$s_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=soretrieve.php>Back</a></center>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>