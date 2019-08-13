

<?php
session_start();
$tid = $_SESSION['tid']; 
 $sub = $_GET['mysub'];
 
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
  
  <a class ="active" href="home.php">Home</a>
            <a href="mysub.php">Subjects</a>
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
        
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>


    <body>
        <div class="container">



            <div class="innerbox">
                <h2 class ="heading2">COURSE MATERIAL UPLOAD</h2>

                
                
                <form enctype="multipart/form-data"
                      action="" method="post">
                    <input  type="hidden" name="MAX_FILE_SIZE" value="200000000" />
                        <input  type="file" name="File" /><br />
                        <br />

                        <input class="btn_cmup" type="submit" value="UPLOAD!" />
                </form>

            </div>
    </body>
</html>

<?php
if (isset($_FILES['File'])) {
    if ($_FILES['File']['type'] == "application/pdf" || $_FILES['File']['type'] == "application/msword" || $_FILES['File']['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
        $source_file = $_FILES['File']['tmp_name'];
        list($filename,$fileext) = explode(".",$_FILES['File']['name']);
        $username = "$sub"."$filename";  
        $new_name = $username.'.'.$fileext; 

        $dest_file = "teachers/$tid/" . $new_name;

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