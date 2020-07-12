<?php 
if(isset($_POST['submit'])){ 

    $dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    $dbPass = "";            //Database Password 
    $dbDatabase = "hospitals_database";    //Database Name 
     
    $db = mysqli_connect($dbHost,$dbUser,$dbPass,$dbDatabase); 
    //Connect to the databasse 
    
    //Selects the database 
     
    /* 
    The Above code can be in a different file, then you can place include'filename.php'; instead. 
    */ 
     
    //Lets search the databse for the user name and password 
    //Choose some sort of password encryption, I choose sha256 
    //Password function (Not In all versions of MySQL). 
    $usr = mysqli_real_escape_string($_POST['username']); 
    $pas = hash('sha256', mysqli_real_escape_string($_POST['passcode'])); 
    $sql = mysqli_query("SELECT * FROM doctorslogin  
        WHERE username='$usr' AND 
        passcode='$pas' 
        LIMIT 1"); 
    if(mysqli_num_rows($sql) == 1){ 
        $row = mysqli_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['username']; 
       
        $_SESSION['logged'] = TRUE; 
        header("Location: users_page.php"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        header("Location: selectPatients.php"); 
        exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: LoginTodoctors.php");     
    exit; 
} 
?> 


<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: LoginToserver.php"); 
    exit; 
} 
echo 'Welcome, '.$_SESSION['username']; 
?>  