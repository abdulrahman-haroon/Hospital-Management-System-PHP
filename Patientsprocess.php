<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['PatientName'])) {
$PatientName=$_POST["PatientName"];
$PatientId=$_POST["PatientId"];
$Age=$_POST["Age"];
$Gender=$_POST["Gender"];
$Sickness=$_POST["Sickness"];


$query="INSERT INTO `patients`(`PatientId`, `PatientName`, `Age`, `Gender`, `Sickness`) VALUES ('$PatientId','$PatientName','$Age','$Gender','$Sickness')";
$conn=mysqli_connect("localhost","root","");
if(mysqli_connect_errno())
{
	echo "Failed to connect to my sql: " .mysqli_connect_error();
}
if($conn)
{
	
	if(mysqli_select_db($conn,"hospitals_database"))
	{
		
		$result=mysqli_query($conn,$query);
	}
}
 header('location: selectPatients.php');

}
if (isset($_GET['del'])) {
	
	$id = $_GET['del'];
	echo $id;
	mysqli_query($conn, "DELETE FROM patients WHERE PatientId=$id");
	
	header('location: selectPatients.php');
}


?>
