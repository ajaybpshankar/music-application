<!doctype html>
<html>
	<head>
	<title>login</title>
	
 <style>
  table{
  position:absloute;
  top:220px;
  left:590px;
  border:thin solid black;
  border-color:black;
  color:Black;
  cursor:pointer;
  background:rgba(255,255,255,0.2);
  }
 
   p{
  width:100%;
  text-algin:center;
 
  line-height:0.1em;
  margin:10px  0 20px;
  }
  p span{
  background:red;
  padding:0 10px;
  }
</style>
 </head>
	<body background="pic1.jpg"> 
	
	<center>
	<h1><i>login form</i></h1>
	<hr color="black"/>
	</center>
	
	<center>
	<h2 aligh="center" style="color:black">registration fail!!!   try again </h2>
	
	<form action="login.php" method="POST">
	<table> 
	<td align="center"><h1><span style="color":black></span></h1>
		
		<span style="color:"White"></span><i><h3> USER NAME:</i><input type="text" placeholder="Enter Name" name="uname" required width="30%"><br/><br/>
		
		
			<span style="color:"white"></span> <i>EMAIL: </i><input type="email" placeholder="Enter Mail ID" name="email" required  width="30%"><br/><br/>
			<span style="color:"White"></span><i>PASSWORD:</i><input type="password" placeholder="Enter Password" name="password" required  width="30%"><br/><br/>
			
			
		
		
			
			
			

<button type="submit"><i>SUBMIT</i></button>  <br/><br/>
			<button type="submit"><i>RESET</i></button><br/>
		</td>			
	</table>
	</form>
	
	</center>
	
	</body>
	</html>