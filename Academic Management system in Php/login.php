



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
        <link rel="stylesheet" href="css/style1login.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>
    
    
    
    <body>
        <h1 class ="header">Faculty Login</h1>
        <h1 class ="header2">Made with ❤ by Arjun</h1>
        
        <div class ="container"></div>
         <div class="thumbnail"></div>
         
         
         
         
     
         <form method = "POST" action="">
                
             <input class="in1" type="text" placeholder="tid" name = "tid" required=""/>
                <input class="in2" type="password" placeholder="password" name = "password" required=""/>
                <button name ="submit" class ="btn">LOGIN</button>
         
                <p class= "message">Not faculty? </p>
                <a href="index.php">Home</a>
         </form>
   













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
        


              
                    
                       
                        
              



 
     
        
            
               
            
       
    
          
