<?php

session_start();
$tid = $_SESSION['tid'];
$s = $_GET['mysub'];
$_SESSION['mysub'] = $s;
?>

<a href='assign_add.php?n=1'>Assignment 1</a><br>


<a href='assign_add.php?n=2'>Assignment 2</a><br>


