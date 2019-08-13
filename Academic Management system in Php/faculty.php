<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>STUDENT</title>
        <link rel="stylesheet" href="css/style1.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>
    
    
    
    <body>
        
         <h1 class ="header">Faculty Login</h1>
        <div class ="outercontainer">
            <div style="margin-left:500px; margin-top: 160px;" class="smallcontainer"></div>
            <div class="smallthumbnail"></div>
            <button onclick="window.location.href = '/PhpProject1/library.php'" style="margin-left:500px; margin-top:320px;" name ="Lib" class ="smallbtn">LIBRARY</button>
            
            <div style="margin-left: 700px; margin-top: 160px;" class="smallcontainer"></div>
            <div class="smallthumbnail2"></div>
            <button onclick="window.location.href = '/PhpProject1/mentor_login.php'" style="margin-left:700px; margin-top:320px;" name ="Lib" class ="smallbtn">MENTOR</button>
            
            <div style="margin-left: 900px; margin-top: 160px;" class="smallcontainer"></div>
            <div class="smallthumbnail3"></div>
            <button onclick="window.location.href = '/PhpProject1/billing_login.php'" style="margin-left:900px; margin-top:320px;" name ="Lib" class ="smallbtn">BILLING</button>
            
            <div style="margin-left: 500px; margin-top: 380px;" class="smallcontainer"></div>
            <div class="smallthumbnail4"></div>
            <button onclick="window.location.href = '/PhpProject1/office_login.php'" style="margin-left:500px; margin-top:540px;" name ="Lib" class ="smallbtn">OFFICE</button>
            
            <div style="margin-left: 700px; margin-top: 380px;" class="smallcontainer"></div>
            <div class="smallthumbnail5"></div>
            <button onclick="window.location.href = '/PhpProject1/director_login.php'" style="margin-left:700px; margin-top:540px;" name ="Lib" class ="smallbtn">DIRECTOR</button>
            
            <div style="margin-left: 900px; margin-top: 380px;" class="smallcontainer"></div>
            <div class="smallthumbnail6"></div>
            <button onclick="window.location.href = '/PhpProject1/HOD_login.php'" style="margin-left:900px; margin-top:540px;" name ="Lib" class ="smallbtn">HOD</button>
           
            <div class ="container"></div>
        
    <div class="thumbnail"></div>   
         
         
         
         
         
     
         <form method = "POST" action="">
                
             <input class="in1" type="text" placeholder="tid" name = "tid" required=""/>
                <input class="in2" type="password" placeholder="password" name = "password" required=""/>
                <button name ="submit" class ="btn">LOGIN</button>
         
                <p class= "message">Not faculty? </p>
                <a href="index.php">Home</a>
         </form>
   
</div>


<?php
session_start();
 $pagetitle="LogIn Page";




       if (isset($_POST['submit'])){
        $username = 'arjun';
        $passwd = '123';
        $db = 'data123';
        $conn = mysqli_connect('localhost', $username, $passwd, $db);
        $tid=($_POST['tid']);
        $password=($_POST['password']);

        $sql="SELECT tid, password FROM faculty_table WHERE tid='$tid' AND password='$password'";
        $query=mysqli_query($conn,$sql);
        if($query){
          $row=mysqli_fetch_assoc($query);
        }
        echo $row['tid']." ".$row['passowrd'];
           if($tid==$row['tid'] && $password==$row['password']){
          $_SESSION['tid']=$tid;
        
          header('Location:home.php');
        }else{
            echo "User name or password is incorrect!";
          }    
} 
?>

          </body>
</html>





