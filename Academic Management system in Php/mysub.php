<?php
session_start();
$tid = $_SESSION['tid'];
?>


<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/stud_marks.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>COURSE MATERIALS</title>
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

<?php
     $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql = "SELECT * FROM teach_sub WHERE tid='$tid'";
      $res = mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($res))
      {

        echo"<div class='innerbox1'>";
        $subid = $row['subid'];
        $sql2 = "SELECT * FROM subject_table WHERE subid = '$subid'";
        $res2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($res2);
        $sub = $row2['subject_name'];
        echo"<div class='id_sub_x'>";
        echo "<a href='cmatup.php?mysub=$subid'>".$subid."<br>".$sub."<br>";
      echo"</div>";
      echo"</div>";
      }  

?>

</head>
<body>