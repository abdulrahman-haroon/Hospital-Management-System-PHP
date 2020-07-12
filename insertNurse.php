<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nurse Insert</title>
<style>
body{

  font-family: Arial, Helvetica, sans-serif;
   background: url(nurse_innovators-904790024_900x.jpg) no-repeat center center;
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
  position: absolute;
  right:0;
   margin: 30;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
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
  background-color: #f44336;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>



<body>
<div class="bg-img">
<form method="post" action="process.php" class="container">
<div >
			<center> <b><label>NURSE INFORMATION </label></b> </center>
		</div>
		<br>

<label>Nurse ID</label>
<input type="text" name="NurseId">

<label>Nurse Name</label>
<input type="text" name="NurseName">



<label>Qulalification</label>
<input type="text" name="Qualification">


<label>Experience</label>
<input type="text" name="Experience">


<button class="btn" type="submit"  name="save ">ADD</button>
<button class="btn" type="reset">CANCEL</button>

</div>
</form>
</body>
</html>
