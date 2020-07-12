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

	$NurseId=$_POST['NurseId'];
	$NurseName=$_POST['NurseName'];
	$Qualification=$_POST['Qualification'];
	$Experience=$_POST['Experience'];
	
	mysqli_query($conn, "update nurse set NurseName='$NurseName',Qualification='$Qualification',Experience='$Experience' WHERE NurseId='$NurseId';");
	
	header('location: selectNurse.php');
	
}
?>