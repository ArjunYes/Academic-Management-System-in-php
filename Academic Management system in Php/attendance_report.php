<?php
session_start();
$tid = $_SESSION['tid'];
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/stud_marks.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>STUDENT MARKS</title>
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


</head>
<body>

<style>
table {  
      margin:auto;
      margin-top: 80px;
    color: #333;
    font-family: 'Abel', sans-serif;
    font-weight: bold;
    width: 840px; 
    border-collapse: 
    collapse; border-spacing: 0; 
}

td, th {  
    
    border: 1px solid transparent; /* No more visible border */
    height: 25px; 
    width: 300px;
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #DFDFDF;  /* Darken header a bit */
    font-weight: bold;
}

td {  
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */        
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
</style>



<?php
$username = 'arjun';
$passwd = '123';
$db = 'data123';
$conn = mysqli_connect('localhost', $username, $passwd, $db);
$sql = "SELECT * FROM student_table";
$res = mysqli_query($conn,$sql);
echo "<table border='1'>
        <th>Id</th>
        <th>Name</th>
        <th>Total Hours</th>
        <th>Hours Present</th>
        <th>Hours Absent</th>
        <th>Percentage</th>";
        while($row=mysqli_fetch_assoc($res))
        {
          $sid = $row['sid'];
          $sql1 = "SELECT * FROM attendance WHERE sid='$sid' AND status='Pr'";
          $res1 = mysqli_query($conn,$sql1);
          $num1 = mysqli_num_rows($res1);
          $sql2 = "SELECT * FROM attendance WHERE sid='$sid' AND status='Ab'";
          $res2 = mysqli_query($conn,$sql2);
          $num2 = mysqli_num_rows($res2);
          $sql3 = "SELECT * FROM attendance WHERE sid='$sid'";
          $res3 = mysqli_query($conn,$sql3);
          $num3 = mysqli_num_rows($res3);
          if($num3==0)
          {
            $percent = 0;
          }  
          else
          {  
            $percent = ($num1/$num3)*100;
            $percent = round($percent,2);
          }  
          echo "<tr>";                
          echo "<td>".$row['sid']."</td>";
          echo "<td>".$row['fname']." ".$row['lname']."</td>";
          echo "<td>".$num1."</td>";
          echo "<td>".$num2."</td>";
          echo "<td>".$num3."</td>";
          echo "<td>".$percent."</td>";
          echo "</tr>";
        }
          echo "</table>";
      
?>
