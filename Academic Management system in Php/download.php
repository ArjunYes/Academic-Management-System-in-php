<?php
session_start();
$tid = $_SESSION['tid'];
$file = $_GET['file'];
$dir='teachers/'.$tid.'/assignment/'.$file;
header('Content-Type: application/doc');
header('Content-Disposition: inline; filename='.$dir);
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
readfile($dir);
?>