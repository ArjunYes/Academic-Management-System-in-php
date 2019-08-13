<?php
session_start();
$sid = $_SESSION['sid'];
$s = $_GET['mysub'];
$username = 'arjun';
$passwd = '123';
$db = 'data123';
$conn = mysqli_connect('localhost', $username, $passwd, $db);
$sql = "SELECT * FROM teach_sub WHERE subid='$s'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);



$tid = $row['tid'];
?>
<?php
 $dir = 'teachers/$tid'; 
 $num = (count(scandir('teachers/'.$tid)) - 2);
 if($num!=0)
 {
   $resource = opendir("teachers/".$tid);
   while(($file = readdir($resource))!== FALSE) 
   {
      
      if (strpos($file,$s) === 0)
      {
         $array = explode("$s",$file);
         echo "<a href='download2.php?file=$file&mysub=$s'>".$array[1]."</a> <br>"; 

      }
   }
   
   
 }
 else
 {
    echo "No Such File";
 } 
?>






