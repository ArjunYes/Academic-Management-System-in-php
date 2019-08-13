

<style>
table {  
      margin:auto;
      margin-top: 50px;
      margin-left: 350px;
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

<?php
session_start();
$id = $_SESSION['sid']; 
 $n = $_GET['n'];
 $sub = $_GET['sub'];
$id = $_SESSION['sid']; 
$sem = $_SESSION['sem'];
if (!$_SESSION['sid']){
        echo "you are not logged in";
        header('Location:index.php');
    }
$sid = $_SESSION['sid'];
 $id = $_SESSION['sid'];
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/stud_attendance.css">
 <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    <title>STUDENT ASSIGNMENT</title>
   <div class="container">
         

<div class="topnav">
  
     <a class ="active" href="part.php">Home</a>
            <a href="mysubjects.php">Subjects</a>
            <a href="stud_attend.php">Attendance</a>
            <a href="stud_marks.php">Marks</a>
            <a href="stud_assign.php">Assignments</a>
            <a href="map.php">E_Activity</a>

 
 
</div>
<form action="" method="POST">
             <button name ="login2" class ="btnX">LOGOUT</button>
            </form>


</head>
<body>





<?php

 
 echo $n.$sub;
 $username = 'arjun';
 $passwd = '123';
 $db = 'data123';
 $conn = mysqli_connect('localhost', $username, $passwd, $db);
 $sql = "SELECT * FROM teach_sub WHERE subid='$sub'";
 $res = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($res);
 $tid = $row['tid'];
?>
<html>
    <head>
        <title>FILE UPLOAD</title>
        <link rel="stylesheet" href="css/st.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>


    <body>
        <div class="container">



            <div class="innerbox">
                <h2 class ="heading2">ONLINE ASSIGNMENT UPLOAD</h2>

                <h2 class ="heading">1.Upload PDF/Doc File :</h2>
                
                
                <form enctype="multipart/form-data"
                      action="" method="post">
                    <input  type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                        <input  type="file" name="File" /><br />
                        <br />

                        <input class="btnX2" type="submit" value="upload!" />
                </form>

            </div>
    </body>
</html>

<?php

                //code form teachers upload

      $username = 'arjun';
      $passwd = '123';
      $db = 'data123';
      $conn = mysqli_connect('localhost', $username, $passwd, $db);
      $sql="SELECT * FROM assignments WHERE subid='$sub' AND ass_no='$n'";
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
        
      }     
      else
      {
        echo "<input type='submit' name='b1' value='ADD'>";
        echo "<input type='submit' name='b3' value='DELETE' disabled>";
      }
      
 


if (isset($_FILES['File'])) {
    if ($_FILES['File']['type'] == "application/pdf" || $_FILES['File']['type'] == "application/msword" || $_FILES['File']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
        $source_file = $_FILES['File']['tmp_name'];
        $username = "$n"."$sub"."x"."$id"; 
        list($filename,$fileext) = explode(".",$_FILES['File']['name']); 
        $new_name = $username.'.'.$fileext; 

        $dest_file = "teachers/$tid/assignment/" . $new_name;

        if (file_exists($dest_file)) {
            print "The file name already exists!!";
        } else {
            move_uploaded_file($source_file, $dest_file)
                    or die("Error!!");
            if ($_FILES['File']['error'] == 0) {
                echo $_FILES['File']['name'];
                print "Document file uploaded successfully!";
                print "<b><u>Details : </u></b><br/>";
                print "File Name : " . $_FILES['File']['name'] . "<br.>" . "<br/>";
                print "File Size : " . $_FILES['File']['size'] . " bytes" . "<br/>";
                print "File location : upload/" . $_FILES['File']['name'] . "<br/>";
            }
        }
    } else {
        if ($_FILES['File']['type'] != "application/pdf" || $_FILES['File']['type'] != "application/msword" || $_FILES['File']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
            print "Error occured while uploading file : " . $_FILES['File']['name'] . "<br/>";
            print "Invalid  file extension, should be pdf/doc/docx !!" . "<br/>";
            print "Error Code : " . $_FILES['File']['error'] . "<br/>";
        }
    }
}
?>