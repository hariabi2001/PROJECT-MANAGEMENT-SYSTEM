<?php
$host = "localhost";
$user = "postgres";
$pass = "hari2001";
$db = "dbmspackage";

// Create connection
$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
           or die ("could not connect to server\n");
// Check connection
if (!$con) {
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST["sal_btn"]))
{
  $id=$_GET['id'];
  $sql="CALL p_t_ozu_tasks_update_stat($id,'".$_POST["st"]."')";
  if(pg_query($con,$sql))
  {
    header("location: updatetaskst.php?updated=1");
    header("location: adtask.php");
  }
}
if(isset($_GET["updated"]))
{
  echo '<script>alert("Status is updated")</script>';
}
?>
<!DOCTYPE html>
<html>
<style>
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

input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}

label
{
  font-size: 20px;
}

</style>
<body>

<h3 style="font-size: 25px"><center><strong>UPDATING TASK STATUS</strong></center></h3>

<div class="container box">
  <form method ="post" action="">
    <div class="form-group"><center><strong>
      <label>Enter the status to be updated<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="st" id="st" class="form-container"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <input type="submit" name="sal_btn" class="btn btn-info"></center>
    </div>
  </form>

</div>

</body>
</html>