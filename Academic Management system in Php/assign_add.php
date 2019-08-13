
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




<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/stud_marks.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>STUDENT MARKS</title>
  <div class="container">
      

<div class="topnav">
  
     <a class ="active" href="attendace.php">Home</a>
            <a href="mysub.php">Course Materials</a>
            <a href="stud_attend.php">Attendance</a>
            <a href="stud_marks.php">Marks</a>
            <a href="stud_assign.php">Assignments</a>
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
$n = $_GET['n'];
$s = $_SESSION['mysub'];
?>
<?php
 $dir = 'teachers/$tid/assignment'; 
 $num = (count(scandir('teachers/'.$tid.'/assignment')) - 2);
 $x = $n.$s;
 if($num!=0)
 {
   $resource = opendir("teachers/".$tid."/assignment");
   echo "<form method='post' action=''>";
   echo "<input type='submit' name='b4' value='SUBMITTED ASSIGNMENTS'>";
   while(($file = readdir($resource))!== FALSE) 
   {
      
      if (strpos($file, "$n$s") === 0)
      {
        if(isset($_POST['b4']))
        {  
         $array = explode("x",$file);
         echo "<a href='download.php?file=$file'>".$array[1]."</a>"; 
        }
      }
   }
   
   
 }
 else
 {
    echo "No Such File";
 } 
?>

<form method="post" action="">
<?php

      $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql="SELECT * FROM assignments WHERE subid='$s' AND ass_no='$n'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);
      $num=mysqli_num_rows($res);
      if($num!=0)
      {
      	$dat = $row['dates'];
      	$top = $row['topic'];
      	$des = $row['descr'];
      	echo "<table border='1'>";
      	echo "<th>Date</th>";
      	echo "<th>Topic</th>";
      	echo "<th>Description</th>";
      	echo "<tr>";
      	echo "<td>$dat</td>";
      	echo "<td>$top</td>";
      	echo "<td>$des</td>";
      	echo "</tr>";
      	echo "</table>";
      	echo "<input type='submit' name='b1' value='ADD' disabled>";
      	echo "<input type='submit' name='b3' value='DELETE'>";
      } 	
      else
      {
      	echo "<input type='submit' name='b1' value='ADD'>";
      	echo "<input type='submit' name='b3' value='DELETE' disabled>";
      }
      
 
?>
     
<?php
  if(isset($_POST['b1']))
  {
    echo "<input type='date' name='t1' placeholder='Date'><br>";
    echo "<input type='text' name='t2' placeholder='Topic'>";
    echo "<input type='textarea' name='t3' placeholder='Description'>";	
    echo "<input type='submit' name='b2' value='ADD'>";
  }
  elseif(isset($_POST['b3']))
  {
  	 $sql = "DELETE FROM assignments WHERE subid='$s' AND ass_no='$n'";
  	 mysqli_query($conn,$sql);
  	 if($n==1)
  		{	
  		  header('Location: assign_add.php?n=1');
  	    }
  	    else
  	    {
  	      header('Location: assign_add.php?n=2');	
  	    }	
  }	

  if(isset($_POST['b2']))
  {
    $semid = $s[0];
  	$txt1 = $_POST['t1'];
    $txt2 = $_POST['t2'];
    $txt3 = $_POST['t3'];
  	$sql = "INSERT INTO assignments (semid,dates,ass_no,subid,topic,descr) VALUES ('$semid','$txt1','$n','$s','$txt2','$txt3')";
  	if(!mysqli_query($conn,$sql))
  	{
       echo mysqli_error($conn);
  	}
  	else
  	{
  		if($n==1)
  		{	
  		  header('Location: assign_add.php?n=1');
  	    }
  	    else
  	    {
  	      header('Location: assign_add.php?n=2');	
  	    }	
  	}	
  }	
?>
</form>

