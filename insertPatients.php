<html>
<head>
<title>Patient Insert</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{

  font-family: Arial, Helvetica, sans-serif;
   background: url(826888-hospital-wallpapers-1920x1080-for-mac.jpg) no-repeat center center;
    top:0;
    left:0;
    min-width:100%;
    min-height:100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
   background-size: cover; 
}
content {
  max-width: 500px;
  margin: auto;
}
* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: left;
  
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 13px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #7FB3D5;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}ink rel="stylesheet" href="styles.css">

</style>

</head>

<body>
<form method="post" action="Patientsprocess.php" class="container">
<div >
			<center> <b><label>PATIENT INFORMATION </label></b> </center>
		</div>
		<br>
<div class="input-group">
<label>ID</label>
<input type="text" placeholder="Enter Patient ID" name="PatientId">
</div>
<div class="input-group">
<label>Name</label>
<input type="text" placeholder="Enter Patient Name" name="PatientName">
</div>
<div class="input-group">
<label>Age</label>
<input type="text" placeholder="Enter Patient Age" name="Age">
</div>
<div class="input-group">
<label>Gender</label>
<input type="text" placeholder="Enter Patient Gender" name="Gender">
</div>
<div class="input-group">
<label>Sickness</label>
<input type="text" placeholder="Enter Patient Sickness" name="Sickness">
</div>
<center>
<div class="input-group">
<button class="btn" type="submit"  name="save ">ADD</button>
<button class="btn" type="reset">CANCEL</button>
</div>
</center>
</form>


</body>
</html>
