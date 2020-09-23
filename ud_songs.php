<?php
echo "<h2><center>Update form</center></h2>";
echo "<br>";
echo "<br>";
$so_id=$_POST['so_id'];
$name=$_POST['song_name'];
$genre=$_POST['genre'];
$duration=$_POST['duration'];
$m_id=$_POST['m_id'];
$a_id=$_POST['a_id'];
$s_id=$_POST['s_id'];
$link=$_POST['link'];

include_once 'database.php';

if(isset($_POST['update']))
{
$sql = "UPDATE `songs` SET `so_id`=".$so_id.",`song_name`='".$name."',`duration`='".$duration."',`m_id`=".$m_id.",`a_id`=".$a_id.",`link`='".$link ."'  WHERE `so_id`=".$so_id." ";
$query = "UPDATE `sings` SET `so_id`=".$so_id.",`s_id`=".$s_id.",`genre`='".$genre."' WHERE `so_id`=".$so_id." ";
$message="Record Updated Successfully!!";
if (mysqli_query($conn, $sql)) {
  if (mysqli_query($conn, $query)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=r_songs.php>Back</a></center>";
}}
}
if(isset($_POST['delete']))
{
$sql = "DELETE FROM `songs` WHERE `so_id`=".$so_id;
$query = "DELETE FROM `sings` WHERE `so_id`=".$so_id;
$message="Record Deleted Successfully!!";
if (mysqli_query($conn, $sql)) {
  if (mysqli_query($conn, $query)) {
    echo "<center><br><br><h2>".$message."</h2>";
	echo  "<br><br><a href=r_songs.php>Back</a></center>";
} }}

?>
