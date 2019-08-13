<style>
table {  
      margin:auto;
      margin-top: 80px;
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

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/stud_marks.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>TEACHER MARKS</title>
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

<?php
session_start();
$tid = $_SESSION['tid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
<input class="btn_okay" type='submit' name='b1' value='Okay'>
<?php
 
      $sub = $_GET['mysub'];
      $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql="SELECT * FROM marks WHERE subid='$sub'";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)!=0)
      {
        echo "<table border='1'>
        <th>Sid</th>
        <th>Class Test 1</th>
        <th>Class Test 2</th>
        <th>Assignment 1</th>
        <th>Assignment 2</th>
        <th>Model</th>";
        while($row=mysqli_fetch_assoc($res))
        {
          $x = $row['sid'];
          $i = $x.'i';
          $j = $x.'j';
          $k = $x.'k';
          $l = $x.'l';
          $m = $x.'m';
          $n = $x.'n';
          echo "<tr>";                
          echo "<td>".$row['sid']."</td>";
          echo "<td>"."<input type='text' class='inp_box' name='$i' required"."</td>";
          echo "<td>"."<input type='text' class='inp_box' name='$j' required"."</td>";
          echo "<td>"."<input type='text' class='inp_box' name='$k' required"."</td>";
          echo "<td>"."<input type='text' class='inp_box' name='$l' required"."</td>";
          echo "<td>"."<input type='text' class='inp_box' name='$m' required"."</td>";
          echo "</tr>";
        }
          echo "</table>";
      }

      if(isset($_POST['b1']))
      {
        $res = mysqli_query($conn,$sql);   
        while($row=mysqli_fetch_assoc($res))
        {
          $x = $row['sid'];
          $i = $x.'i';
          $j = $x.'j';
          $k = $x.'k';
          $l = $x.'l';
          $m = $x.'m';
          $n = $x.'n';
          $i = $_POST[$i]; 
          $j = $_POST[$j];
          $k = $_POST[$k];
          $l = $_POST[$l];
          $m = $_POST[$m];
          $n = $_POST[$n];
          $sql = "UPDATE marks SET test1='$i', test2='$j', assign1='$k', assign2='$l', model='$m', attend='$n' WHERE sid='$x' AND subid='$sub'";
          mysqli_query($conn,$sql);
          header('Location:marks.php');
        } 	 

      }

?>
</form>
</body>
</html>