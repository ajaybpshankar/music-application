<html>
  <head>

    <style>
    *{
      font-family: 'Bahnschrift';
    }
li{
  float:left;
  padding-left:10px;
  padding-top:500px;
  font-size:50px;
  text-decoration: none;
  list-style-type: none;
  overflow: hidden;
  color:#414141;
  display: block;
}
.off{
  display: inline;
}

.on{

  display: none;
}

li a:hover .off{
  display: none;
}

li a:hover .on{
  display: inline;
}
      a{
        text-decoration: none;
        width:20px;
        height:20px;
        border:
        outline: none;
        color: white;
        padding-left: 80px;
        padding-right: 80px;
      }
      a:hover{
        color:red;
      }
.logout{
        top:10px;
        padding-left:1300px;
        font-size:30px;
      color:white;
    }
body{
  background-size:cover;
}
    </style>
    <title>Home</title>
  </head>
  <body background="bg.jpg" >
      <a class="logout" href =logout.php>Log Out</a>
          <li><a href="r_album.php">Albums</a></li>

          <li><a href="r_songs.php">
Songs
              </a></li>
          <li><a href="r_singer.php">
Singer
              </a></li>
          <li><a href="r_musicdirector.php">
Music Director
              </a></li>

  </body>
</html>
