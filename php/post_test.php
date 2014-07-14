<?php
$con=mysqli_connect("localhost", "super", "super", "grouppay_db");
if(mysqli_connect_errno($con))
{
	echo "Failed to connect: error no " . mysql_connect_error();
}

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM MEMBERS WHERE login='$username' AND password='$password'");
$return_array = array();
while($row = $result->fetch_array(MYSQLI_ASSOC))
{
	$userObj = 'User';
	$array[] = array(
		'login' 	=> $row['login'],
		'password'	=> $row['password'],
		'fname' 	=> $row['fname'],
		'lname'		=> $row['lname'],
		'email'		=> $row['email'],
		'pic'		=> $row['pic']
	);

	$return_array[$userObj] = $array;
}
header('Content-Type: application/json');
echo json_encode($return_array);

mysqli_close($con);
?>	