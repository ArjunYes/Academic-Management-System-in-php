<?php
<html>
    <head>
        <meta charset="UTF-8">
        <title>USER ADD</title>
        <link rel="stylesheet" href="css/libcss.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>
    <h1 class="q2">E Activity.</h1>
    <form action="" method="POST">
        <button name ="login" class ="btn">LOGIN</button>
        <button name ="logout" class ="btnx">LOGOUT</button>
            <div class="container">   
            <div class="outerbox"></div>
            <?php
            session_start();
           


            $username = 'arjun';
            $password = '123';
            $db = 'data123';


            $conn = mysqli_connect('localhost', $username, $password, $db);


            $sql1 = "SELECT library from eactivity WHERE office='q'";

            if ($act = mysqli_query($conn, $sql1)) {
                $ac = mysqli_fetch_assoc($act);
                if ($ac['library'] == 'b')
                    echo "<div class=\"activebox2\"></div>";
                else
                    echo"<div class=\"activebox\"></div>";
            }


            if (isset($_POST['login'])) {

                $active = "b";

                $sql = "UPDATE  eactivity  SET library='$active' WHERE office='q'";
                $sql1 = "SELECT library from eactivity WHERE office='q'";
                if (mysqli_query($conn, $sql)) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }





            if (isset($_POST['logout'])) {
                $active = "a";
                $sql = "UPDATE  eactivity  SET library='$active' WHERE office='q'";
                $sql1 = "SELECT library from eactivity WHERE office='q'";
                if (mysqli_query($conn, $sql)) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }



//post
            ?>



         <h1 class = 'header4'> Library</h1>




        </div>
    </form>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

