<html>
<head>
<title>Data</title>
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
h1 {
 background: linear-gradient(to right, transparent, #F1948A  );
  padding: 30px;
  
  font-family:verdana;
}
</style>
</head>
<body>
<center><div class="input-group">	
    <a href="http://localhost/hospital/AfterLoginpage.html"><button class="btn" type="submit" name="submit">Back To Home</a></button> 
	
	</div></center>
<center><h1>ALL DATA OF NURSES</h1></center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospitals_database";
$conn =mysqli_connect($servername, $username, $password, $dbname);
$query="select * from nurse;";
if(mysqli_connect_errno())
{
	echo "Failed to connect to my sql: " .mysqli_connect_error();
}
if($conn)
{
	//echo"connected to server "; 
	echo"<br>";
	$result=mysqli_query($conn,$query);
}

?>

<table id="all">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Qualification</th>
			<th>Experience</th>
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<?php while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['NurseId']; ?></td>
			<td><?php echo $row['NurseName']; ?></td>
			<td><?php echo $row['Qualification']; ?></td>
			<td><?php echo $row['Experience']; ?></td>
		<td>
				<div class="input-group">
				<a href="process.php?del=<?php echo $row['NurseId']; ?>">
<center><button class="btn">delete</button></center></div></a>
			</td>
			<td>
				<div class="input-group">
				<a href="nurseFrom.php?update=<?php echo $row['NurseId']; ?>">
<center><button class="btn">update</button></center></div></a>
			</td>
		</tr>
	<?php } ?>
	
	</table>
</body>	
</html>