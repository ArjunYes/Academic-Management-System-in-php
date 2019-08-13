<html>
    <head>
        <meta charset="UTF-8">
        <title>DIRECTOR ACTIVITY</title>
        <link rel="stylesheet" href="css/st.css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Montserrat|Patua+One" rel="stylesheet">
    </head>
    <h1 class="q2">E Activity.</h1>
    <form action="" method="POST">
        
        <button name ="login" class ="btn">ACTIVE</button>
        <button name ="logout" class ="btnx">NOT ACTIVE</button>
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
                $sql = "UPDATE  eactivity  SET Director='$active'";
                mysqli_query($conn,$sql);
            }



            if (isset($_POST['login'])) {

                $active = "a";
                echo"<div class=\"activebox\"></div>";
                $v=1;
                $sql = "UPDATE eactivity  SET Director='$active'";
                mysqli_query($conn,$sql);
            }   

            ?>



         <h1 class = 'header4'>Director</h1>




        </div>
    </form>
</html>
