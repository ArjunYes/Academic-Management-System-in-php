<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="navigate">
<a href="homepage.php" style="color: #f4f60d">Home</a>
<a href="#contact" style="color: #f4f60d">Contact</a>
<a href="#about" style="color: #f4f60d">About</a>
<a href="login.php" style="color: #f4f60d"> LOGIN </a> &nbsp; &nbsp;
</div>
<?php
session_start();
session_unset(); 
session_destroy();
echo "<h2>LOGGED OUT</h2>";
?>
</body>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.navigate {
  overflow: hidden;
  background-color: #000;
}


.navigate a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navigate a:hover {
  background-color: #eee517;
  color: black;
}

.navigate a.active {
  background-color: #338894;
  color: white;
}
</style>
</html>
