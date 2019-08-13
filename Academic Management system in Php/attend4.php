
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


    echo "<table border='1'>
          <tr>
          <th>name</th>
          <th>rollno</th>
          </tr>";
          $res=mysqli_query($conn,"SELECT * FROM loginform");
          $r=mysqli_num_rows($res);
          $v=1;
          $check=array();
          while($row=mysqli_fetch_array($res))
          {
               $ch=0;
          	$d=date('Y-m-y');
          	$a=$row['username'];
            $check[$a]=$v;
          	$sl[$v]=$v;
          	$usr[$v]=$row['username'];
          	$pass[$v]=$row['rollno'];
            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['rollno']."</td>";
            echo "<td>"."<label> <input type='checkbox' name='$a' value='Present'>Present</label>"."</td>";
            echo "</tr>";
            echo $sl[$v]." ".$usr[$v]." ".$pass[$v]."<br>";

            $v=$v+1; 
          }
if(isset($_POST['$a']))
                {
                	$ch = 1;
                }	
           echo "<input type='submit' name='b1' value='Okay'>";
           if(isset($_POST['b1']))
           {
       
            	for($i=1;$i<=$r;$i++)
              	{	
                $a = $usr[$i];
              	$slr = $sl[$i]; 
              	$user = $usr[$i];
              	$pwd = $pass[$i];	
                if($ch==0)
                {
                	$val="Absent";
                }
                else
                {
                    $val="Present";
                }
                
              	$sql = "INSERT INTO day1  (dat,username,password,status) VALUES ('$d','$user','$pwd','$val')";
                mysqli_query($conn, $sql);
		
                 

                }

           }


          ?>	

</form>
</body>
</html>
