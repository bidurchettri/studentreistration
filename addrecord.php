<?php
	include "connection.php";
	if(isset($_POST["submit"]))
	{
		echo"hello";
		$name=$_POST["name"];
		$rollno=$_POST["rollno"];
		$dept=$_POST["dept"];
		$sem=$_POST["sem"];
		$sql="INSERT INTO students_info(rollno,name,sem,department) values('$rollno','$name','$sem','$dept')";
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Recorded added sucesfully'); window.location.href='home.html';</script>";
		}
		else
		{
			echo "<script>alert('Recorded cration failed , try again'); window.location.href='home.html';</script>";
			echo"error".mysql_error();
		}

	}

?>