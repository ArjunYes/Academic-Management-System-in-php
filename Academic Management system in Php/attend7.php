
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
    echo "<table border='1'>
          <tr>
          <th>name</th>
          <th>password</th>
          </tr>";
          $res=mysqli_query($conn,"SELECT * FROM loginform");
          $r=mysqli_num_rows($res);
          $v=1;
          while($row=mysqli_fetch_array($res))
          {
          	$a=$row['username'];
          	$sl[$v]=$v;
          	$usr[$v]=$row['username'];
          	$pass[$v]=$row['password'];
            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>"."<label> <input type='radio' name='$a' value='Present'>Present</label>"."</td>";
            echo "<td>"."<label> <input type='radio' name='$a' value='Absent'>Absent</label>"."</td>";
            echo "<td>"."<label> <input type='radio' name='$a' value='Not Verified'>Not Verified</label>"."</td>";
            echo "</tr>";
            echo $sl[$v]." ".$usr[$v]." ".$pass[$v]."<br>";
            $v=$v+1; 
          }

           echo "<input type='submit' name='b1' value='Okay'>";
       
           if(isset($_POST['b1']))
           {
           	     $sql = "CREATE TABLE day1 (
           	id VARCHAR(6),     
            username VARCHAR(10),
            password VARCHAR(10),
            status VARCHAR(255)  
             )";
    
                 if (mysqli_query($conn, $sql)) {
                     echo "Table MyGuests created successfully";
                     } else {
                       echo "Error creating table: " . mysqli_error($conn);
                      }
              	for($i=1;$i<=$r;$i++)
              	{	

              	$slr=$sl[$i]; 
              	$user = $usr[$i];
              	$pwd = $pass[$i];	            
                $cv=$_POST[$user];
              	$sql = "INSERT INTO day1  (id,username,password,status) VALUES ('$slr','$user','$pwd','$cv')";
                mysqli_query($conn, $sql);
                }

           }


          ?>	

</form>
</body>
</html>