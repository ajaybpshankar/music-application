<html>
  <head>
    <style>
    *{
      font-family: 'Bahnschrift';
      color:white;
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
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  color: blue;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: blue;
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
        <a  href="search.php" style="color: blue;background-color:#31E7D7;">Search</a>
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
        <a  href="usermd.php">Music Directors</a>
      </li>
    </ul>
  </nav>
  <?php
  include_once 'database.php';
  $sql ="SELECT * FROM album a,songs s,singer si,music_director m,sings s1 where s1.so_id=s.so_id and s1.s_id=si.s_id and a.a_id=s.a_id and s.m_id=m.m_id";
  $result = mysqli_query($conn, $sql);
echo '
  <br/><center>
  <h2>Search for Songs</h2>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Song Name" title="Type in a name">';
  echo '<table id="myTable">';
  echo "  <tr>
    <th>Song Title</th>
    <th>Album Title</th>
    <th>Genre</th>
    <th>Duration</th>
    <th>Singers</th>
    <th>Music Director</th>
    <th>Play the song</th>
  </tr>";
    while($row = mysqli_fetch_assoc($result)) {
$a_id=$row["a_id"];
  echo "<tr><td>".$row["song_name"]."</td><td>";
  echo '<a href="userhome1.php?a_id='.$a_id.'">';
  echo "".$row["title"]."</a>";
  echo "</td><td>".$row["genre"]. "</td><td>".$row["duration"]. "</td><td>".$row["singer_name"]."</td><td>".$row["music_director_name"]."</td><td><a href='".$row["link"]."'</a>Click Here to Play Song </td></tr>";
    }
  echo "</table>";


      ?>
      <script>
      function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      </script>
  </body>
</html>
