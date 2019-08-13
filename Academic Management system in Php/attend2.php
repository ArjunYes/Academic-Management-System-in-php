<?php


echo"<div class ='container'>";

session_start();
$tid = $_SESSION['tid'];
$sub = $_SESSION['mysub'];
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


<style>
table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
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




<head>
	<title>ATTENDANCE MARK</title>
  <link rel="stylesheet" href="css/part.css">
</head>
<body>
<form method="post" action="">
<input type='submit' name='b1' value='Okay'>
<?php
      $h = $_GET['myhr'];
      echo $h;
      $sub = $_SESSION['mysub'];
      $sem = $_SESSION['sem'];
      $d = date('Y-m-d');
      $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql = "SELECT * FROM attendance WHERE (subid='$sub' AND tid='$tid') AND (hr='$h' AND tid='$tid')";
      $res = mysqli_query($conn,$sql);
      $r = mysqli_num_rows($res);
      if($r==0)
      {	
       $sql = "SELECT * FROM student_table WHERE semid='$sem'";
       $res=mysqli_query($conn,$sql);
       while($row=mysqli_fetch_assoc($res))
       {
         $r = $row['sid'];
         $sql = "INSERT INTO attendance (sid,tid,subid,hr,dateofa,status) VALUES ('$r','$tid','$sub','$h','$d','')";
      	 mysqli_query($conn,$sql);
       }
      }	
      echo "<table border='1'>
            <tr>
            <th>Sid</th>
            <th>Tid</th>
            <th>Hrid</th>
            <th>DateOfAttendance</th>
        
            <th>         Status</th>
            <th></th>
            </tr>";
            $sql="SELECT * FROM attendance WHERE (tid='$tid' AND subid='$sub') AND (hr='$h' AND tid='$tid')";
            $res=mysqli_query($conn,$sql);
            $r=mysqli_num_rows($res);
            $v=1;
            while($row=mysqli_fetch_array($res))
            {
            
          	$a=$row['sid'];
          	$usr[$v]=$row['sid'];
            echo "<tr>";
            echo "<td>".$row['sid']."</td>";
            echo "<td>".$tid."</td>";
            echo "<td>".$row['hr']."</td>";
            echo "<td>".$d;
            echo "<td>"."<label> <input type='radio' name='$a' value='Present' required>Present</label>"."</td>";
            echo "<td>"."<label> <input type='radio' name='$a' value='Absent'>Absent</label>"."</td>";
            
            echo "</tr>";
            
            $v=$v+1; 
            }
  
 
       
           if(isset($_POST['b1']))
           {
           	     
                echo $d;
              	for($i=1;$i<=$r;$i++)
              	{	
              	 $user = $usr[$i];	            
                 $cv=$_POST[$user];
              	 $sql = "UPDATE attendance SET status='$cv' WHERE (sid='$user' AND tid='$tid') AND (subid='$sub' AND hr='$h')";
                 mysqli_query($conn, $sql);
                }
                $sql = "SELECT * FROM marks WHERE subid='$sub'";
                $res = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($res))
                {
                  $sid = $row['sid'];
                  $subid = $row['subid'];
                  $sql2 = "SELECT * FROM attendance WHERE sid='$sid'";
                  $res2 = mysqli_query($conn,$sql2);
                  $total_hours = mysqli_num_rows($res2);
                  $sql2 = "SELECT * FROM attendance WHERE sid='$sid' and status ='Pr'";
                  $res2 = mysqli_query($conn,$sql2);
                  $hours_present = mysqli_num_rows($res2);
                  $total_percentage = ($hours_present/$total_hours)*100;
                  $total_percentage = round($total_percentage,2);
                  $sql2 = "UPDATE marks SET attend='$total_percentage' WHERE sid='$sid' AND subid='$subid'";
                  mysqli_query($conn,$sql2);
                }  

           }

?>
</form>
</body>

</html>