<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<head>
    <meta charset="UTF-8">
    <title>LANDING PAGE</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
</head>



<?php
if (session_id() != '') {
    $name = $_SESSION['u'];
    echo "Logged in as" . $name;
}
?>

<div class="container">   
    <div class="outerbox"></div>
    <div class="innerbox1"></div>
    <button  onclick="window.location.href = '/PhpProject1/student.php'" class ="btn1">STUDENT</button>
    <div class="innerbox2"></div>
    <button  onclick="window.location.href = '/PhpProject1/faculty.php'" class ="btn2">FACULTY</button>
    <div class="innerbox3"></div>
    <button onclick="window.location.href = '/PhpProject1/parent.php'" class ="btn3">PARENTS</button>
    <div  class="logo">Hey there!</div>
    <div class ="header">

        <div class="img"></div>
        <nav>
            <ul>
                <li><a href ="#">HOME</a></li>
                <li><a href ="aboutus.php">ABOUT</a></li>
                <li><a href ="#">LOGIN</a></li>
                <li><a href ="#">TEAM</a></li>
            </ul>
        </nav>
        <button onclick="window.location.href = '/PhpProject1/admin.php'" class ="btn">ADMIN PANEL</button>
    </div>
    <h1 class="q1">Warm greetings from</h1>
    <h1 class="q2">Academica.</h1>

</div>
<h1 class="q3">Made with ♥ by Arjun S</h1>



