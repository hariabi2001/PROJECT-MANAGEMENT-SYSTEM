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
	<center><h1>EMPLOYEE UPDATE</h1></center>
</head>
<body>
	<center>
	<?php
	$id=$_GET['id'];
	echo "<tr><td><br><br><br><br><br><br>" . "<a href='t1.php?id=$id'>UPDATE SALARY</a>" . "<br><br><br>" . "<a href='t2.php?id=$id'>UPDATE TOTAL WORK PERCENTAGE</a>" . "<br><br><br>" . "<a href='t3.php?id=$id'>UPDATE MEMBERSHIP COUNT</a>" . "<br><br><br>" . "<a href='t4.php?id=$id'>UPDATE DEPARTMENT ID</a>" . "</td></tr>";
	?>
	</center>
</body>
</html>

