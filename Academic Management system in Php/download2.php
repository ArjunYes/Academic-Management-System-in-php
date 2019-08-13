<?php
session_start();
$sid = $_SESSION['sid'];
$sub = $_GET['mysub'];
$file = $_GET['file'];
$username = 'arjun';
$passwd = '123';
$db = 'data123';
$conn = mysqli_connect('localhost', $username, $passwd, $db);
$sql = "SELECT * FROM teach_sub WHERE subid='$sub'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$tid = $row['tid'];
$dir='teachers/'.$tid.'/'.$file;
header('Content-Type: application/doc');
header('Content-Disposition: inline; filename='.$dir);
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
readfile($dir);
?>