<!DOCTYPE html>
<html>
<head>
<title>SONGS</title>
<link rel="stylesheet" type="text/css" href="songs.css">
</head>
<body background="mic.jpg" >
<form action="songs.php" method="post">
  <div class="songs-form">
 <h2><b> SONGS</b></h2>
   <div class ="form-input">
  <fieldset>
   <center>
	<table>
	<tr><td>Song ID:</td><td><input type="text" name="so_id" required></td></tr>
	<tr><td>Song_Name:</td><td><input type="text" name="song_name" required></td></tr>
<tr><td>Genre:</td><td><input type="text" name="genre" required></td></tr>
<tr><td>Duration:</td><td><input type="time" name="duration" required></td></tr>
<tr><td>Music Director ID:</td><td>
  <select name="m_id" required>

  <?php
          include_once 'database.php';
          $sql = "SELECT * FROM music_director";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result))
          {
            echo '<option value="';
            echo "".$row["m_id"]."";
            echo '">';
            echo "".$row["music_director_name"]."-".$row["m_id"]."</option>";
           }
  ?>
           </select>

</td></tr>
<tr><td>Album ID:</td><td>
  <select name="a_id" required>

  <?php
          include_once 'database.php';
          $sql = "SELECT * FROM album";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result))
          {
            echo '<option value="';
            echo "".$row["a_id"]."";
            echo '">';
            echo "".$row["title"]."-".$row["a_id"]."</option>";
           }
  ?>
           </select></td></tr>
<tr><td>Singer ID:</td><td>
  <select name="s_id" required>

  <?php
          include_once 'database.php';
          $sql = "SELECT * FROM singer";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result))
          {
            echo '<option value="';
            echo "".$row["s_id"]."";
            echo '">';
            echo "".$row["singer_name"]."-".$row["s_id"]."</option>";
           }
  ?>
           </select>
         </td></tr>
<tr><td>Link:</td><td><input type="text" name="link" required></td></tr>

	<tr><td></td><td><input type="submit" name="submit" value="Insert"></td></tr>


    <center>
	</table>
  </fieldset>
  </div>
</form>




</body>
</html>
