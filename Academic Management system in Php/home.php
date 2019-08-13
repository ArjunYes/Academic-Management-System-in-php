<?php
session_start();
$tid = $_SESSION['tid'];
?>


<html>
<style>
table {  
      margin:auto;
      margin-top: 50px;
    color: #333;
    font-family: 'Abel', sans-serif;
    font-weight: bold;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing: 0; 
}

td, th {  
    
    border: 1px solid transparent; /* No more visible border */
    height: 60px; 
    width: 200px;
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


    if (!$_SESSION['tid']) {
        echo "you are not logged in";
        header('Location:index.php');
    }

    $username = 'arjun';
    $passwd = '123';
    $db = 'data123';
    $conn = mysqli_connect('localhost', $username, $passwd, $db);
    $tid = $_SESSION['tid'];
    $sql = "SELECT * FROM teach_sub WHERE tid = '$tid'";
    $res = mysqli_query($conn, $sql);
    
    $days = array();
    $days[1] = 'Monday';
    $days[2] = 'Tuesday';
    $days[3] = 'Wednesday';
    $days[4] = 'Thursday';
    $days[5] = 'Friday';
    $days[6] = 'Saturday';
    echo "<table class = 'tb1' >
 <tr>    
 <th>DAY</th>
 <th>hour 1</th>
 <th>hour 2</th>
 <th>hour 3</th>
 <th>hour 4</th>
 <th>hour 5</th>
 <th>hour 6</th>
 </tr>";
   for ($i = 1; $i <= 6;  ++$i)
    {

        $ar = $days[$i];
        $l1 = $l2 = $l3 = $l4 = $l5 = $l6 = "";
        $k1 = $k2 = $k3 = $k4 = $k5 = $k6 = "";
       while($row = mysqli_fetch_assoc($res))
       {    
        $subid = $row['subid'];
        $sql3 = "SELECT * FROM hour_table WHERE day='$ar' AND subid='$subid'";
        $res2 = mysqli_query($conn, $sql3);
        $row2 = mysqli_fetch_assoc($res2);
        $sql1 = "SELECT * FROM subject_table WHERE subid='$subid'";
        $res1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($res1);
        if ($row2['hr_1'] != 0) {
           $l1 = $row['subid'];
           $k1 = $row1['subject_name'];
        }
        if ($row2['hr_2'] != 0) {
           $l2 = $row['subid'];
           $k2 = $row1['subject_name'];
        }
        if ($row2['hr_3'] != 0) {
           $l3 = $row['subid'];
           $k3 = $row1['subject_name'];
        }
        if ($row2['hr_4'] != 0) {
           $l4 = $row['subid'];
           $k4 = $row1['subject_name'];
        }
        if ($row2['hr_5'] != 0) {
           $l5 = $row['subid'];
           $k5 = $row1['subject_name'];
        }
        if ($row2['hr_6'] != 0) {
           $l6 = $row['subid'];
           $k6 = $row1['subject_name'];
        }
      }
      $res = mysqli_query($conn, $sql);
      echo "<tr>
   <th>$ar</th>
   <td>".$l1." - ".$k1."</td>
   <td>".$l2." - ".$k2."</td>
   <td>".$l3." - ".$k3."</td>
   <td>".$l4." - ".$k4."</td>
   <td>".$l5." - ".$k5."</td>
   <td>".$l6." - ".$k6."</td>
   </th>
   </tr>";
  }

    echo "</tablle>";
    echo "</div>";
    ?>


