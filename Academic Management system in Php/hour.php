
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
 <title>TIMETABLE</title>
 <div class="container">


  <div class="topnav">

   <a class ="active" href="user_add.php">Home</a>
   <a href="hour.php">Timetable</a>
   <a href="teach_sub.php">Teacher->Subject</a>
   <a href="report.php">Reports</a>
   <a href="map.php">E_Activity</a>



 </div>
 <form action="" method="POST">
   <button name ="login2" class ="btn">LOGOUT</button>
 </form>




 <!DOCTYPE html>
 <html>
 <title>ADD HOUR</title>

 <body>
  <div class="container">
    <h1 class ="heading_x1" > ADD HOUR</h1>
    <form method="post" action="">
      <div class="sub_head">Semester</div>
      <select name="sem">
        <option selected="selected" value="N/A">N/A</option>
        <option value="1">SEM1</option>
        <option value="2">SEM2</option>
        <option value="3">SEM3</option>
        <option value="4">SEM4</option>
        <option value="5">SEM5</option>
        <option value="6">SEM6</option>
      </select>

      <div class="sub_head">Subject</div>
      <select name='sub'>
       <option selected="selected" value="N/A">N/A</option>
       <?php    
       $username = 'arjun';
       $passwd = '123';
       $db = 'data123';
       $conn = mysqli_connect('localhost', $username, $passwd, $db);
       $sql = "SELECT * FROM subject_table";
       $res = mysqli_query($conn,$sql);
       while ($row=mysqli_fetch_assoc($res))
       {
        $sub = $row['subid'];    
        $sname = $row['subject_name']
        ?>     
        <option value="<?php echo $sub ?>"><?php echo $sub.' - '.$sname?></option>
        <?php
      }
      ?>  
    </select>

    <div class="sub_head">Day</div>
    <select name="day">
      <option selected="selected" value="N/A">N/A</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
    </select> 

    <div class="sub_head">Hour</div>
    <select name="hr">
      <option selected="selected" value="N/A">N/A</option>
      <option value="hr_1">hour 1</option>
      <option value="hr_2">hour 2</option>
      <option value="hr_3">hour 3</option>
      <option value="hr_4">hour 4</option>
      <option value="hr_5">hour 5</option>
      <option value="hr_6">hour 6</option>
    </select>
    <br><br>
    <input class="btn_insert" type="submit" name="b1" value="Insert">
    <input class="btn_view" type="submit" name="b2" value="View">
  </form>  
</body>
</html>
<?php
if(isset($_POST['b1']))
{
  $sem = $_POST['sem'];
  $sub = $_POST['sub'];
  $day = $_POST['day'];
  $hour = $_POST['hr'];
  if($sem=='N/A' || $sub=='N/A' || $day=='N/A' || $hour=='N/A')
  {
    echo "<script> alert('Please select from all tabs');</script>".$sem.$sub.$day.$hour;
  }        
  else
  {
    $sql = "SELECT * FROM hour_table WHERE (day='$day' AND subid='$sub') AND (semid='$sem' AND $hour='1')";
    $sql1 = "SELECT * FROM hour_table WHERE (day='$day' AND subid='$sub') AND (semid='$sem')";
    $res = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($res);
    if($num!=0)
    {
     echo "<script> alert('An entry was already made'); </script>";
   }    
   else
   {
    $res = mysqli_query($conn,$sql1);
    if($num=mysqli_num_rows($res))
    {
      $sql = "UPDATE hour_table SET $hour='1' WHERE day='$day' AND subid='$sub'";
      mysqli_query($conn,$sql);
      echo "<script> alert('table updated succesfully'); </script>";
    }  
    else
    {
      $sql = "INSERT INTO hour_table (semid,subid,day,$hour) VALUES ('$sem','$sub','$day','1')";
      mysqli_query($conn,$sql);
      echo "<script> alert('Successful'); </script>";   
    }
  }
}    

}

if(isset($_POST['b2']))
{
  $sql = "SELECT * FROM hour_table";
  $res = mysqli_query($conn,$sql);
  echo "<table broder='1'>" ; 
  echo "<th>day</th>";
  echo "<th>semid</th>";
  echo "<th>subid</th>";
  echo "<th>hour 1</th>";
  echo "<th>hour 2</th>";
  echo "<th>hour 3</th>";
  echo "<th>hour 4</th>";
  echo "<th>hour 5</th>";
  echo "<th>hour 6</th>";
  while($row=mysqli_fetch_assoc($res))
  {
    ?>
    <tr>
      <td><?php echo $row['day'] ?></td>
      <td><?php echo $row['semid'] ?></td>
      <td><?php echo $row['subid'] ?></td>
      <td><?php echo $row['hr_1'] ?></td>
      <td><?php echo $row['hr_2'] ?></td>
      <td><?php echo $row['hr_3'] ?></td>
      <td><?php echo $row['hr_4'] ?></td>
      <td><?php echo $row['hr_5'] ?></td>
      <td><?php echo $row['hr_6'] ?></td>
    </tr>
    <?php
  }        
  echo "</table>";
}  
?>
</head>
<body>

