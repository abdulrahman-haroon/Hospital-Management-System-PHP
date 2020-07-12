<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['NurseName'])) {
$NurseName=$_POST["NurseName"];
$NurseId=$_POST["NurseId"];
$Qualification=$_POST["Qualification"];
$Experience=$_POST["Experience"];



$query="INSERT INTO `nurse`(`NurseId`, `NurseName`, `Qualification`, `Experience`) VALUES ('$NurseId','$NurseName','$Qualification','$Experience')";
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
 header('location: selectNurse.php');

}
if (isset($_GET['del'])) {
	
	$id = $_GET['del'];
	echo $id;
	mysqli_query($conn, "DELETE FROM nurse WHERE NurseId=$id");
	
	header('location: selectNurse.php');
}

if (isset($_GET['update'])) {
	
	$id = $_GET['update'];
	echo $id;
	header('location: update.php');
	mysqli_query($conn, "update students set Email='$email' WHERE ID='$id';");
	
	header('location: updatedeletenurse.php');
}

?>
