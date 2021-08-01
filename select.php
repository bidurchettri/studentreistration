<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
  <link href="main.css" rel="stylesheet"></style>
<style>

</style>
</head>
<body>


<div style="background-color: blue;color:white; padding-top: 20px;padding-bottom: 20px;">
  <h1><center>Search Students</center></h1>
  <form action="select.php" method="POST">
    <center> 
      <input type="text" name="Rollno" placeholder="Enter RollNo" class="in">
      <input type="submit" name="search" value="Serach" class="bt">
    </center>
  </form>
</div>
<hr>






<?php
include"connection.php";
if(isset($_POST["search"]))
{
  $rollno=$_POST["Rollno"];
  $sql = "SELECT * FROM students_info WHERE rollno='$rollno';";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    // output data of each row
    echo"<table id='customers'>
    <tr>
    <td>Name</td>
    <td>Roll no</td>
    <td> Sem</td></tr>";
    while($row = $result->fetch_assoc()) 
    {
      echo "<tr>
      <td>" . $row["name"]. "</td>".
      "<td>" . $row["rollno"]. "</td>".
      "<td>" . $row["sem"]. "</td>"
      ."</tr>";
     }
    echo"</td>";
  } 
  else 
  {
    echo "0 results";
  }
}

$conn->close();
?>


