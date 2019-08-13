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
<input type='submit' name='b1' value='Okay'>
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
        <th>Class Test 2</th>";
        while($row=mysqli_fetch_assoc($res))
        {
          $x = $row['sid'];
          $j = $x.'j';
          echo "<tr>";                
          echo "<td>".$row['sid']."</td>";
          echo "<td>"."<input type='text' name='$j' required >"."</td>";
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
          $j = $x.'j';
          $j = $_POST[$j];
          $sql = "UPDATE marks SET test2='$j' WHERE sid='$x' AND subid='$sub'";
          mysqli_query($conn,$sql);
        } 	 

      }

?>
</form>
</body>
</html>