<html>
    <head>
        <meta charset="UTF-8">
        <title>LIBRARY ACTIVITY</title>
        <link rel="stylesheet" href="css/st.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>
    <h1 class="q2">E Activity.</h1>
    <form action="" method="POST">
        
        <button name ="login" class ="btn">LOGIN</button>
        <button name ="logout" class ="btnx">LOGOUT</button>
            <div class="container">   
            <div class="outerbox"></div>
            <?php
            
            session_start();
           
            $v = 0;
            $username = 'arjun';
            $password = '123';
            $db = 'data123';

            $conn=mysqli_connect('localhost',$username,$password,$db);
            
                


                if ($v==0)
                    echo "<div class=\"activebox2\"></div>";
                else
                    echo"<div class=\"activebox\"></div>";
            
            
            if (isset($_POST['logout'])) {
                $active = "b";
                echo "<div class=\"activebox2\"></div>";
                $v=1;
                $sql = "UPDATE  eactivity  SET library='$active' WHERE office='q'";
                mysqli_query($conn,$sql);
                $sql1 = "SELECT library from eactivity WHERE office='q'";
                if (mysqli_query($conn, $sql1)) {
                    
                } else {
                    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
                }
            }



            if (isset($_POST['login'])) {

                $active = "a";
                echo"<div class=\"activebox\"></div>";
                $v=1;
                $sql = "UPDATE eactivity  SET library='$active' WHERE office='q'";
                mysqli_query($conn,$sql);
                $sql1 = "SELECT library from eactivity WHERE office='q'";
                if (mysqli_query($conn, $sql)) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }





        

            ?>



         <h1 class = 'header4'> Library</h1>




        </div>
    </form>
</html>
