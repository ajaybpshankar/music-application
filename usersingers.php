<html>
  <head>
    <style>
    *{
      font-family: 'Bahnschrift';
      color: white;
    }
    body{
      background-color: #181818;
    }

    ul {
        list-style-type: none;
        overflow: hidden;
        padding-left: 0px;
        width: 100%;
        background-color: yellow;
    }
    li{
      float: left;
    }
  	nav  ul li{
  		list-style-type:none;
  		display:block;
  		transition:0.5s all;
  	}

  	nav ul li:hover{
  		background-color:#31E7D7;
  	}

  	nav ul li a{
      display: block;
      text-align: center;
  		text-decoration:none;
  		color: green;
      padding-left: 22px;
      padding-right: 22px;
      padding-top: 25px;
      padding-bottom: 25px;
      font-size: 120%;
      font-weight: bold;
      width: 203px;
      height: 30px;

  	}
.best{
  background-color: white;
  float: left;
  width:25%;
}
.topright {
    display: block;
    text-align: center;
    text-decoration: none;
    position: absolute;
    top: 15px;
    right:0px;
    font-size: 20px;
    color: black;
}
.topright:hover{
  color: blue;
  font-weight: bold;
}

h1{
  color: white;
  padding-top: 30px;
  font-size: 45px;
    text-align: center;
}
table {
    border-collapse: collapse;
    width: 80%;
	font-size:150%;
}

th, td {
    font-size: 125%;
    text-align: center;
    padding: 10px;
}
    </style>


    <title>Home</title>
  </head>
  <body>
    <h1>M  U  S  I  K  A  L</h1>
      <a href="login.html">
    <div class="topright">
      <p style="padding-left:20px; color:white;">Admin Login</p>
    </div></a>
    <nav>
    <ul>
      <li>
        <a href="userhome.php" >Home</a>
      </li>
      <li>
        <a  href="search.php">Search</a>
      </li>
      <li>
        <a href="useralbums.php">Albums</a>
      </li>
      <li>
        <a href="usersongs.php">Songs</a>
      </li>
      <li>
        <a  href="usersingers.php" style="color: blue;background-color:#31E7D7;">Singers</a>
      </li>
      <li>
        <a  href="usermd.php">Music Directors</a>
      </li>
    </ul>
  </nav>
  <?php
  include_once 'database.php';
  $sql = "SELECT * FROM singer order by singer_name asc";
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) > 0) {
      // output data of each row
  	echo "<center><h2>Singer Information</h2><table>";
  	echo " <tr>
      <th>Name</th>
        <th>Place</th>
      <th>Popular Songs</th>
      <th>Awards</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
      $s_id=$row["s_id"];
      echo '<tr><td style="font-size:125%;">';
      echo '<a href="usersingers2.php?s_id='.$s_id.'">';
      echo "".$row["singer_name"]."</a></td><td>".$row["place"]."</td><td>".$row["best_of_songs"]."</td><td>".$row["awards"]."</td></a></tr>";
      }
  	echo "</table></center>";
  } else {
      echo "<h2>0 results</h2>";
  }

  mysqli_close($conn);
  ?>

  </body>
</html>
