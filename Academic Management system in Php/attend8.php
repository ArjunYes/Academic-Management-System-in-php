
<html>
<head>
	<title>Attendance Form</title>
	<h1>Attnedance Form day <?php echo date('Y-m-d');?></h1>
</head>
<body>
<form method="post" action="">	
<?php
    $username = 'arjun';
    $password = '123';
    $db = 'data123';
    $conn = mysqli_connect('localhost', $username, $password, $db);
   
    $sl = array();
    $usr = array();
    $pass = array();
    $val=array();
    $d=date('Y-m-d');

    echo "<table border='1'>
          <tr>
          <th>name</th>
          <th>ROLL NO</th>
          <th></th>
          <th>Attnedance</th>
          <th></th>
          <th>Date</th>
          </tr>";
          $res=mysqli_query($conn,"SELECT * FROM loginform");
          $r=mysqli_num_rows($res);
          $v=1;
          while($row=mysqli_fetch_array($res))
          {
            
          	$a=$row['username'];
          	$sl[$v]=$v;
          	$usr[$v]=$row['username'];
          	$pass[$v]=$row['rollno'];
            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['rollno']."</td>";
            echo "<td>"."<label> <input type='radio' name='$a' value='Present' required='Please Select'>Present</label>"."</td>";
            echo "<td>"."<label> <input type='radio' name='$a' value='Absent' required='Please Select'>Absent</label>"."</td>";
            echo "<td>"."<label> <input type='radio' name='$a' value='Not Verified'>Not Verified</label>"."</td>";
            echo "<td>".$d;
            echo "</tr>";
            echo $sl[$v]." ".$usr[$v]." ".$pass[$v]." "."<br>";
            $v=$v+1; 
          }

           echo "<input type='submit' name='b1' value='Okay'>";
       
           if(isset($_POST['b1']))
           {
           	     
                echo $d;
              	for($i=1;$i<=$r;$i++)
              	{	

              	$slr=$sl[$i]; 
              	$user = $usr[$i];
              	$pwd = $pass[$i];	            
                $cv=$_POST[$user];
              	$sql = "INSERT INTO day1  (dat,id,username,rollno,status) VALUES ('$d','$slr','$user','$pwd','$cv')";
                mysqli_query($conn, $sql);
                }

           }


          ?>	

</form>
</body>
</html>