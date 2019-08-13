<?php
session_start();
$tid = $_SESSION['tid'];
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/attendance.css">
    <title>Home</title>
	<div class="container">
			

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="attendance.php">Attendance</a></li>
  <li><a href="contact.asp">Profile</a></li>
  <li><a href="about.asp">Students</a></li>
  <li><a href="marks.php">Marks</a></li>
</ul>



	

</head>
<body>


<body>
<?php
      $y=$_GET['mysub'];
      $_SESSION['mysub']=$y;
      $d=date('l');
      $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql = "SELECT * FROM subject_table WHERE subid='$y'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);
      $_SESSION['sem']=$row['semid'];
      $sql="SELECT * FROM hour_table WHERE subid='$y' AND day='$d'";
      $res=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($res))
      {
        if($row['hr_1']==1)
        { 
         $s='hr_1';      
 echo"<div class='innerbox1'>";		 
         echo "<a href='attend2.php?myhr=$s'>"."hour_1"."</a>"."<br>";
		  echo"</div>";
        }
        if($row['hr_2']==1)
        { 
         $s='hr_2'; 
		 echo"<div class='innerbox1'>";
         echo "<a href='attend2.php?myhr=$s'>"."hour_2"."</a>"."<br>";
		 echo"</div>";
        }
        if($row['hr_3']==1)
        { 
         $s='hr_3';     
echo"<div class='innerbox1'>";		 
         echo "<a href='attend2.php?myhr=$s'>"."hour_3"."</a>"."<br>";
		  echo"</div>";
        }
        if($row['hr_4']==1)
        { 
         $s='hr_4';         
         echo "<a href='attend2.php?myhr=$s'>"."hour_4"."</a>"."<br>";
        }
        if($row['hr_5']==1)
        { 
         $s='hr_5';         
         echo "<a href='attend2.php?myhr=$s'>"."hour_5"."</a>"."<br>";
        }
        if($row['hr_6']==1)
        { 
         $s='hr_6';         
         echo "<a href='attend2.php?myhr=$s'>"."hour_6"."</a>"."<br>";
        }


      }  
 echo"</div>";
?>

</body>
</html>