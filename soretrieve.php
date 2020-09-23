<!DOCTYPE html>
<html>
<head>
<title> Retrieve data</title>
</head>
<body background="mic.jpg">
<link rel="stylesheet" type="text/css" href="soretrieve.css">
<fieldset>
   <h1 style="color:white; text-align:center;"> UPDATE/DELETE</h1>
	<center>
<table>

<form id="DataForm" action="ud_songs.php" method="post"></form>


<?php
include_once 'database.php';
session_start();
echo "<form method='POST' action=''>";
/*check the number of records to move from last to first record*/
$countQuery="SELECT count(*) as cnt FROM songs natural join sings";
$result=mysqli_query($conn,$countQuery);
$count = mysqli_fetch_array($result);
$no_of_records=$count["cnt"];

if(isset($_POST['next']))
	{
		$a=($_POST['a']+1)%$no_of_records;
	}
if(isset($_POST['prev']))
	{
		if($_POST['a']==0)
		{
			$a=$no_of_records-1;
		}
		else
				$a=$_POST['a']-1;
	}
if(!isset($a))
	{
		$a=0;
	}


$sql1="SELECT * FROM songs so natural join sings  LIMIT 1 OFFSET $a";
$result=mysqli_query($conn,$sql1);
if(!$result){
	echo("There was an error with inserting into the table." . mysqli_error($conn));
	exit();
	}
		$i=0;
while($row = mysqli_fetch_array($result)) {

?>
<tr style="color:white;"><td>Song ID</td><td><input type="text" name="so_id" value="<?php echo $row["so_id"];?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Song_Name</td><td><input type="text" name="song_name" value="<?php echo $row["song_name"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Genre</td><td><input type="text" name="genre" value="<?php echo $row["genre"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;" ><td>Duration</td><td><input type="text" name="duration" value="<?php echo $row["duration"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;" ><td>Music_Director ID</td><td><input type="text" name="m_id" value="<?php echo $row["m_id"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Album ID</td><td><input type="text" name="a_id" value="<?php echo $row["a_id"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Singer ID</td><td><input type="text" name="s_id" value="<?php echo $row["s_id"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Link</td><td><input type="text" name="link" value="<?php echo $row["link"]; ?>" form="DataForm"/></td></tr>

<?php
}
?>

<?php

echo "<input type='hidden' value='$a' name='a'>";
echo "<tr><td></td><td><input type='submit' name='next' value='next'> ";
echo "<input type='submit' name='prev' value='prev'></td></tr> ";
?>
<tr><td></td><td><input type="submit" name="update" value="Update" form="DataForm"/>
<input type="submit" name="delete" value="Delete" form="DataForm"/></td></tr>
</table>
</center>
</fieldset>
<br></br><tr><td><a style="padding:800px;" href=r_songs.php> Back</td></tr>
</body>
</html>
