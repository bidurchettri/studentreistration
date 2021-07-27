<!DOCTYPE html>
<html>
<head>
	<title>students</title>
	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<h1><center>Students</center></h1>
<hr>

<?php
include"connection.php";
$sql = "SELECT * FROM students_info;";
$result = $conn->query($sql);
 

if ($result->num_rows > 0) 
{
    // output data of each row
    echo"<table id='customers'>
    <tr>
    <td>Name</td>
    <td>Roll no</td>
    <td> sem</td></tr>";
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


$conn->close();
?>
