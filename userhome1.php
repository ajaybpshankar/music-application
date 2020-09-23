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
h2{
  color: blue;
  font-size: 35px;
}
section{
  display: -webkit-flex;
  display: flex;
  padding-left: 200px;
}
article{
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3
  padding: 50px;
  font-size: 28px;
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
        <a href="userhome.php">Home</a>
      </li>
      <li>
        <a  href="search.php">Search</a>
      </li>
      <li>
        <a href="useralbums.php"style="color: blue;background-color:#31E7D7;">Albums</a>
      </li>
      <li>
        <a href="usersongs.php">Songs</a>
      </li>
      <li>
        <a  href="usersingers.php">Singers</a>
      </li>
      <li>
        <a  href="usermd.php">Music Directors</a>
      </li>
    </ul>
  </nav>
        <?php
        include_once 'database.php';
        $a_id=$_GET['a_id'];
        $sql ="SELECT * FROM album natural join images where a_id=$a_id";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
         echo'
         <center>
         <h2>ALBUM INFORMATION</h2>
        <section> <img src="data:image/jpeg;base64,'.base64_encode($row['imag']).'"height="300" width="200"/>';
       echo"
<article>
             <tr><td>Album Title:</td><td>".$row["title"]."</td></tr><br/><br/>
             <tr><td>Language:</td><td>".$row["language"]."</td></tr><br/><br/>
             <tr><td>Duration:</td><td>".$row["duration"]."</td></tr><br/><br/>
             <tr><td>Release Date:</td><td>".$row["release_date"]."</td></tr><br/><br/>
             </article></section>
             ";
            ?>
            <?php
            include_once 'database.php';
            $a_id=$_GET['a_id'];
            $sql ="SELECT * FROM album a,songs s,singer si,music_director m,sings s1 where s1.so_id=s.so_id and s1.s_id=si.s_id and a.a_id=s.a_id and s.m_id=m.m_id and s.a_id=$a_id";
            $result = mysqli_query($conn, $sql);
            

            echo"
            <br/><center>
            <h2>SONGS INFORMATION</h2>";
            echo "<table>";
          	echo "  <tr>
              <th>Song Title</th>
              <th>Genre</th>
              <th>Duration</th>
              <th>Singers</th>
              <th>Music Director</th>
              <th>Play</th>
            </tr>";
              while($row = mysqli_fetch_assoc($result)) {

          	echo "<tr><td>".$row["song_name"]."</td><td>".$row["genre"]."</td><td>".$row["duration"]. "</td><td>".$row["singer_name"]."</td><td>".$row["music_director_name"]."</td><td><a href='".$row["link"]."'</a>Click Here to Play Song</td></tr>";
              }
          	echo "</table>";


                ?>



  </body>
</html>
