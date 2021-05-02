<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.block {
  display: block;
  width: 30%;
  border: none;
  background-color: black;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: black;
  color: white;
}
a{
  color: black;
  font-weight: bold;
  font-size: 20px;
  background-color: transparent;
  text-decoration: none;
}

body{
font-family: Calibri, Helvetica, sans-serif;  
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNXiUY7LVBqz_aTvp7FK-uxZ48wY_d_wA0Ja6Tw16bBNfiIlpkAqbfOC02aCIaobd_2Tg&usqp=CAU');  
  background-attachment: fixed;  
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
	<center><h1>PROJECT UPDATE</h1></center>
</head>
<body>
	<center>
	<?php
		$id=$_GET['id'];
		echo "<tr><td><br><br><br><br><br><br>" . "<a href='updatetaskcid.php?id=$id'>UPDATE COORDINATOR ID</a>" . "</td></tr><br><br><br>";
		echo "<tr><td>" . "<a href='updatetaskst.php?id=$id'>UPDATE TASK STATUS </a>" . "</td></tr><br><br><br>";
		echo "<tr><td>" . "<a href='updatetasksd.php?id=$id'>UPDATE START DATE OF THE TASK </a>" . "</td></tr><br><br><br>";
		echo "<tr><td>" . "<a href='updatetasked.php?id=$id'>UPDATE END DATE OF THE TASK </a>" . "</td></tr><br><br><br>";
	?>
	</center>
</body>
</html>