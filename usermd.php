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
        <a  href="usersingers.php">Singers</a>
      </li>
      <li>
        <a  href="usermd.php" style="color: blue;background-color:#31E7D7;">Music Directors</a>
      </li>
    </ul>
  </nav>

  	<center><h2>Music Director Information</h2><table>
  	<tr>
      <th>Name</th>
        <th>Gender</th>
      <th>Best music</th>
      <th>Instrument profession</th>
        <th>Awards</th>
    </tr>
    <?php

    include_once 'database.php';
    $sql = "SELECT * FROM music_director order by music_director_name asc";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
      $m_id=$row["m_id"];
      echo '<tr><td style="font-size:125%;">';
      echo '<a href="usermd2.php?m_id='.$m_id.'">';
      echo "".$row["music_director_name"]."</a></td><td>".$row["gender"]."</td><td>".$row["best_music"]."</td><td>".$row["instrumental_profession"]."</td><td>".$row["awards"]."</td></a></tr>";
      }
  	echo "</table></center>";

  mysqli_close($conn);
  ?>

  </body>
</html>
