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
if(isset($_POST["insert_btn"]))
{
  $sql="CALL p_t_ozu_projects_insert('".$_POST["pid"]."','".$_POST["name"]."','".$_POST["lid"]."','".$_POST["ps"]."','".$_POST["psd"]."','".$_POST["ped"]."')";
  if(pg_query($con,$sql))
  {
    header("location: insertproj.php?inserted=1");
    header("location: adproject.php");
  }
}
if(isset($_GET["inserted"]))
{
  echo '<script>alert("Project inserted")</script>';
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

label{
  font-size: 20px;
}
</style>
<body>

<center><h3 style="font-size: 25px"><strong>INSERTING IN PROJECT TABLE</strong></h3></center>

<div class="container box">
  <form method ="post" action="">
    <div class="form-group"><center><strong>
      <label>Enter Project id<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="pid" id="pid" class="form-contanier"></center>
    </div>
    <div class="form-group"><center>
      <label>Enter Project name<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="name" id="name" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter leader id<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="lid" id="lid" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter Project status<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="ps" id="ps" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter Project start date<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="psd" id="psd" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <label>Enter Project end date<pre></pre></label>
      <input style="background-color: rgba(100,100,100,0); " type="text" name="ped" id="ped" class="form-contanier"></center>
    </div>
    <br />
    <div class="form-group"><center>
      <input type="submit" name="insert_btn" class="btn btn-info">
    </div></strong></center>
  </form>

</div>

</body>
</html>