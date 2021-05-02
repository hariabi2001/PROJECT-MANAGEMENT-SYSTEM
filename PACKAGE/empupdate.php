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
  $sql="CALL p_t_ozu_emp_update_salary($id,'".$_POST["sal"]."')";
  if(pg_query($con,$sql))
  {
    header("location: empupdate.php?updated=1");
  }
}
if(isset($_POST["total_btn"]))
{
  $id=$_GET['id'];
  $sql="CALL p_t_ozu_emp_update_total_per($id,'".$_POST["total"]."')";
  if(pg_query($con,$sql))
  {
    header("location: empupdate.php?updated=1");
  }
}
if(isset($_POST["mem_btn"]))
{
  $id=$_GET['id'];
  $sql="CALL p_t_ozu_emp_update_m_count($id,'".$_POST["mem"]."')";
  if(pg_query($con,$sql))
  {
    header("location: empupdate.php?updated=1");
  }
}
if(isset($_POST["did_btn"]))
{
  $id=$_GET['id'];
  $sql="CALL p_t_ozu_emp_update_dept_id($id,'".$_POST["did"]."')";
  if(pg_query($con,$sql))
  {
    header("location: empupdate.php?updated=1");
  }
}
if(isset($_GET["updated"]))
{
  echo '<script>alert("Data updated")</script>';
}
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>UPDATING IN DEPARTMENT TABLE</h3>

<div class="container box">
  <form method ="post" action="">
    <div class="form-group">
      <label>Enter the salary to be updated</label>
      <input type="text" name="sal" id="sal" class="form-container">
    </div>
    <br />
    <div class="form-group">
      <input type="submit" name="sal_btn" class="btn btn-info">
    </div>
    <br />
    <div class="form-group">
      <label>Enter the total work percentage to be updated</label>
      <input type="text" name="total" id="total" class="form-container">
    </div>
    <br />
    <div class="form-group">
      <input type="submit" name="total_btn" class="btn btn-info">
    </div>
    <br />
    <div class="form-group">
      <label>Enter the membership count to be updated</label>
      <input type="text" name="mem" id="mem" class="form-container">
    </div>
    <br />
    <div class="form-group">
      <input type="submit" name="mem_btn" class="btn btn-info">
    </div>
    <br />
    <div class="form-group">
      <label>Enter the department id to be updated</label>
      <input type="text" name="did" id="did" class="form-container">
    </div>
    <br />
    <div class="form-group">
      <input type="submit" name="did_btn" class="btn btn-info">
    </div>
    <br />
  </form>

</div>

</body>
</html>