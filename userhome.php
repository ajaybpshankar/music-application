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
.best td{
  padding-left: 30px;
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
        <a href="userhome.php" style="color: blue;background-color:#31E7D7;">Home</a>
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
        <a  href="usermd.php">Music Directors</a>
      </li>
    </ul>
  </nav>
      <?php
         include_once 'database.php';
         $sql = "SELECT * FROM album natural join images where language='english' order by release_date desc limit 7";
         $result = mysqli_query($conn, $sql);
        echo '<p style="text-align:center; font-size:25px;">Latest English Albums</p>';
         while($row = mysqli_fetch_assoc($result))
         {
          $title = $row["title"];
          $a_id=$row["a_id"];
          echo '<tr class="best">';
          echo '<td><a href="userhome1.php?a_id='.$a_id.'"><img src="data:image/jpeg;base64,'.base64_encode($row['imag'] ).'" height="210" width="210"/></a>';
      echo '</td>';


      }
      echo '</tr> ';
        ?>
        <?php
           include_once 'database.php';
           $sql = "SELECT * FROM album natural join images where language='hindi' order by release_date desc limit 7";
           $result = mysqli_query($conn, $sql);
           echo '<p style="text-align:center; font-size:25px;">Latest Hindi Albums</p>';

           while($row = mysqli_fetch_assoc($result))
           {
            $title = $row["title"];
            $a_id=$row["a_id"];
            echo '<tr class="best">';
            echo '<td><a href="userhome1.php?a_id='.$a_id.'"><img src="data:image/jpeg;base64,'.base64_encode($row['imag'] ).'" height="210" width="210"/></a>';
        echo '</td>';


        }
        echo '</tr> ';
          ?>
          <?php
             include_once 'database.php';
             $sql = "SELECT * FROM album natural join images where language='kannada' order by release_date desc limit 7";
             $result = mysqli_query($conn, $sql);
             echo '<p style="text-align:center; font-size:25px;">Latest Kannada Albums</p>';

             while($row = mysqli_fetch_assoc($result))
             {
              $title = $row["title"];
              $a_id=$row["a_id"];
              echo '<tr class="best">';
              echo '<td><a href="userhome1.php?a_id='.$a_id.'"><img src="data:image/jpeg;base64,'.base64_encode($row['imag'] ).'" height="210" width="210"/></a>';
          echo '</td>';


          }
          echo '</tr> ';
            ?>




  </body>
</html>
