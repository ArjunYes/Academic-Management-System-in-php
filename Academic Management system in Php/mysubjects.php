<?php
session_start();
$sid = $_SESSION['sid'];
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/attendance.css">
  <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>Home</title>
	<div class="container">
			

  <div class="topnav">

            <a class ="active" href="part.php">Home</a>
            <a href="mysubjects.php">Subjects</a>
            <a href="stud_attend.php">Attendance</a>
            <a href="stud_marks.php">Marks</a>
            <a href="stud_assign.php">Assignments</a>
            <a href="map.php">E_Activity</a>
        </div>

</head>
<body>









<?php
     $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql="SELECT * FROM student_table WHERE sid='$sid'";
      $res=mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($res);
      $sem = $row['semid'];
      $sql1="SELECT * FROM subject_table WHERE semid='$sem'";
      $res = mysqli_query($conn,$sql1);
      
      while($row=mysqli_fetch_assoc($res))
      {
      echo"<div class='innerbox1'>";
        $s=$row['subid'];
        $sql1="SELECT * FROM subject_table WHERE subid='$s'";
        $res1=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($res1);
        echo "<a href='cmat.php?mysub=$s'><div class ='header3'>".$s."<br>".$row1['subject_name']."</div></a>";
		echo"</div>";
      }  
	  echo"</div>";
	  
?>

</body>
</html>