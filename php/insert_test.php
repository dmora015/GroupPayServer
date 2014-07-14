<?php
$con=mysqli_connect("localhost", "super", "super", "grouppay_db");
$sql="INSERT INTO MEMBERS (fname, lname, email) VALUES ('David', 'Morales', 'notreal@gmail.com')";
if(mysqli_query($con, $sql))
{
	echo "Values inserted!";
}
?>