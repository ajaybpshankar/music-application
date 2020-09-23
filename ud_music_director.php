<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$m_id=$_POST['m_id'];
$name=$_POST['music_director_name'];
$gender=$_POST['gender'];
$best_music=$_POST['best_music'];
$instrumental_profession=$_POST['instrumental_profession'];
$awards=$_POST['awards'];



include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `music_director` SET `music_director_name`='".$name."',`gender`='".$gender."',`best_music`='".$best_music."',`instrumental_profession`='".$instrumental_profession."',`awards`='".$awards."' WHERE `m_id`=".$m_id;
$message="Record Updated Successfully!!";
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `music_director` WHERE `m_id`=".$m_id;
$query = "DELETE FROM `query` WHERE `m_id`=".$m_id;
$message="Record Deleted Successfully!!";
}

if (mysqli_query($conn, $sql)) {
  if (mysqli_query($conn, $query)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=r_musicdirector.php>Back</a></center>";
} } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
