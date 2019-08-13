<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOD LOGIN</title>
        <link rel="stylesheet" href="css/style1login.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>
    
    
    
    <body>
        <h1 class ="header">HOD Login</h1>
        <h1 class ="header2">Made with ❤ by Arjun</h1>
        
        <div class ="container"></div>
         <div class="thumbnail"></div>
         
         
         
         
     
         <form method = "POST" action="">
                
             <input class="in1" type="text" placeholder="name" name = "name" required=""/>
                <input class="in2" type="password" placeholder="password" name = "password" required=""s/>
                <button name ="login" class ="btn">LOGIN</button>
         
                <p class= "message">Not admin? </p>
                <a href="index.php">Home</a>
         </form>
   


<?php
	
session_start();
$_SESSION['role'] = "librarian";

if(isset($_POST['login']))
{
    $username = 'arjun';
    $password = '123';
    $db = 'data123';
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $conn = mysqli_connect('localhost', $username, $password, $db);
    $result = "SELECT * FROM `loginform` WHERE username='$name' and password='$pass'";
    $sql=mysqli_query($conn,$result);
    
    
    
    if (mysqli_num_rows($sql)==1)
		 {
		 	while($row = mysqli_fetch_assoc($sql)) 
		{
   	session_start();	
        $_SESSION['username']=$name;
        $_SESSION['password']=$pass;
        
        
   	 		
   	 		if(mysqli_num_rows($sql)==1)
   	 		{
                              
   	 			header('Location: HOD.php');
   	 		}
                        else echo "invalid";

   	 		
		}

		 }
	else 
	{
		 echo "Invalid username or password";
	}
}//post
?>

          </body>
</html>