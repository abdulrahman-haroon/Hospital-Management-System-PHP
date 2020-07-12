<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn =mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno())
{
	echo "Failed to connect to my sql: " .mysqli_connect_error();
}

else{

	$PatientId=$_POST['PatientId'];
	$PatientName=$_POST['PatientName'];
	$Age=$_POST['Age'];
	$Gender=$_POST['Gender'];
	$Sickness=$_POST['Sickness'];
	mysqli_query($conn, "update patients set PatientName='$PatientName',Age='$Age',Gender='$Gender', Sickness='$Sickness' WHERE PatientId='$PatientId';");
	
	
	header('location: selectPatients.php');
	
}
?>