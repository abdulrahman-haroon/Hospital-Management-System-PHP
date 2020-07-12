<html>
<head>

<title>Update</title>
<style>
#all {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#all td, #all th {
  border: 1px solid #ddd;
  padding: 8px;
}
#all tr:nth-child(even){background-color: #f2f2f2;}

#all tr:hover {background-color: #ddd;}

#all th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f44336;
  color: white;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #273746;
    border: none;
    border-radius: 5px;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$Id = $_GET['update'];
$conn =mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['update'])) {
	
	$id = $_GET['update'];
	 $id;
	$result=mysqli_query($conn, "SELECT * FROM nurse WHERE NurseId=$id");
	while ($row = mysqli_fetch_array($result)) { 
		      $NurseId=$row['NurseId']; 
			 $NurseName= $row['NurseName']; 
			 $Qualification= $row['Qualification']; 
			  $Experience=$row['Experience']; 
			
	
}
}

?>
<center><h1>Update From The Exisiting Nurses</h1></center>
<form method="post" action="updateNurseprocess.php">
<table id="all" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Qualification</th>
			<th>Experience</th>
			
			<th colspan="2">  Action</th>
		</tr>
	</thead>
<tr>
<td>
<input type="text" name="NurseId" value="<?php echo $NurseId; ?>">
</td>

<td>
<input type="text" name="NurseName" value="<?php echo $NurseName; ?>">
</td>

<td>
<input type="text" name="Qualification" value="<?php echo $Qualification; ?>">
</td>
<td>
<input type="text" name="Experience" value="<?php echo $Experience; ?>">
</td>
<td>
<div class="input-group">
<button class="btn" type="submit"  name="save ">Update</button>
</div>
</td>
</tr>
</table>
</form>


</body>
</html>