<?php
session_start();
$tid = $_SESSION['tid'];
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/attendance.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>ASSIGNMENTS</title>
  <div class="container">
      

<div class="topnav">
  
  <a class ="active" href="home.php">Home</a>
            <a href="mysub.php">Course Materials</a>
            <a href="attendance.php">Attendance</a>
            <a href="marks.php">Marks</a>
            <a href="assign_sub.php">Assignments</a>
            <a href="report.php">Reports</a>
            <a href="map.php">E_Activity</a>
 
 
</div>
<form action="" method="POST">
             <button name ="login2" class ="btn">LOGOUT</button>
            </form>

<?php
      $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql="SELECT * FROM teach_sub WHERE tid='$tid'";
      $res=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($res))
      {
		  echo"<div class='innerbox1'>";
        $s=$row['subid'];
        $sql1="SELECT * FROM subject_table WHERE subid=$s";
        $res1=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($res1);
       
        echo "<div class ='header3'>"."<a href='assignment.php?mysub=$s'>".$s."</a> ".$row1['subject_name']."</div>";
		echo"</div>";
      }  
	  echo"</div>";
	  
?>

</body>
</html>