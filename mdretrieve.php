<!DOCTYPE html>
<html>
<head>
<title> Retrieve data</title>
</head>
<body background="mic.jpg">
<link rel="stylesheet" type="text/css" href="mdretrieve.css">
<fieldset>

<h1 style="color:white;text-align:center;">UPDATE/DELETE</h1>

	<center>
<table>

<form id="DataForm" action="ud_music_director.php" method="post"></form>


<?php
include_once 'database.php';
session_start();
echo "<form method='POST' action=''>";
/*check the number of records to move from last to first record*/
$countQuery="SELECT count(*) as cnt FROM music_director";
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


$sql1="SELECT * FROM music_director LIMIT 1 OFFSET $a";
$result=mysqli_query($conn,$sql1);
if(!$result){
	echo("There was an error with inserting into the table." . mysqli_error($conn));
	exit();
	}
		$i=0;
while($row = mysqli_fetch_array($result)) {

?>
<tr style="color:white;"><td>Music ID</td><td><input type="text" name="m_id" value="<?php echo $row["m_id"];?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Gender</td><td><input type="text" name="gender" value="<?php echo $row["gender"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Instrumental Profession</td><td><input type="text" name="instrumental_profession" value="<?php echo $row["instrumental_profession"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Music_Director_Name</td><td><input type="text" name="music_director_name" value="<?php echo $row["music_director_name"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Awards</td><td><input type="text" name="awards" value="<?php echo $row["awards"]; ?>" form="DataForm"/></td></tr>
<tr style="color:white;"><td>Best Music</td><td><input type="text" name="best_music" value="<?php echo $row["best_music"]; ?>" form="DataForm"/></td></tr>
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
<br></br><tr><td><a style="padding:800px;" href=r_musicdirector.php> Back</td></tr>
</body>
</html>
