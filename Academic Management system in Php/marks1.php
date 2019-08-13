<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/stud_marks.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>TEACHER MARKS</title>
  <div class="container">
      

<div class="topnav">
  
     <a class ="active" href="part.php">Home</a>
            <a href="mysubjects.php">Subjects</a>
            <a href="attendance.php">Attendance</a>
            <a href="marks.php">Marks</a>
            <a href="assign_sub.php">Assignments</a>
            <a href="map.php">E_Activity</a>

 
 
</div>
<form action="" method="POST">
             <button name ="login2" class ="btn">LOGOUT</button>
            </form>


</head>
<body>


<?php
session_start();
$tid = $_SESSION['tid'];
$sub = $_GET['mysub'];
$username = 'arjun';
$passwd = '123';
$db = 'data123';
$conn = mysqli_connect('localhost', $username, $passwd, $db);
$sql = "SELECT * FROM marks WHERE subid='$sub'";
$res = mysqli_query($conn,$sql);
$num = mysqli_num_rows($res);
if($num==0)
{
  $sql = "SELECT * FROM subject_table WHERE subid='$sub'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($res);
  $semid = $row['semid'];
  $sql = "SELECT * FROM student_table WHERE semid='$semid'";
  $res = mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($res))
  {
  	$sid = $row['sid'];
  	$sql1 = "INSERT INTO marks (sid,subid,test1,test2,assign1,assign2,model,attend) VALUES ('$sid','$sub','NULL','NULL','NULL','NULL','NULL','NULL')";
  	mysqli_query($conn,$sql1);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
 <a href='marks2.php?mysub=<?php echo $sub; ?>'>Class Test 1</a><br>
 <a href='marks3.php?mysub=<?php echo $sub; ?>'>Class Test 2</a><br>
 <a href='marks4.php?mysub=<?php echo $sub; ?>'>Assignment 1</a><br>
 <a href='marks5.php?mysub=<?php echo $sub; ?>'>Assignment 2</a><br> 
 <a href='marks6.php?mysub=<?php echo $sub; ?>'>Model</a> <br>
 <a href='allmarks.php?mysub=<?php echo $sub; ?>'>All</a><br> 
</form>
</body>
</html>