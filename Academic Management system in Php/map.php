<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ONLINE ACTIVITY</title>
        <link rel="stylesheet" href="css/stylemap.css">
        <link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
    <div class="button">ONLINE ACTIVITY</div>
    <link async href="http://fonts.googleapis.com/css?family=Warnes" data-generated="http://enjoycss.com" 
          rel="stylesheet" type="text/css"/>
</head>



<body>
            <div class ="m1" style="margin-top: 315px; margin-left: 855px;"> Library </div>
             <div class ="m1" style="margin-top: 140px; margin-left: 630px;"> Mentor </div>
              <div class ="m1" style="margin-top: 300px; margin-left: 630px;"> Billing </div>
               <div class ="m1" style="margin-top: 210px; margin-left: 635px;"> Office</div>
                <div class ="m1" style="margin-top: 200px; margin-left: 400px;"> Director </div>
                 <div class ="m1" style="margin-top: 280px; margin-left: 520px;"> HOD </div>
   
</body>
 <?php
            header("Refresh: 3");
            session_start();
           
            $v = 0;


            

            $username = 'arjun';
            $password = '123';
            $db = 'data123';


            $conn = mysqli_connect('localhost', $username, $password, $db);
            $sql1 = "SELECT * from eactivity WHERE office='q'";
            $res = mysqli_query($conn, $sql1);
            $r = mysqli_fetch_assoc($res);


            if($r['library']=='a')
            {
                 echo "<div class=\"imglib\"></div>";
            }    
            else
            {
                
            }



            if($r['HOD']=='a')
            {
                 echo "<div class=\"imghod\"></div>";
            }    
            else
            {
                
            }


            if($r['billing']=='a')
            {
                 echo "<div class=\"imgbill\"></div>";
            }    
            else
            {
                
            }


             if($r['Director']=='a')
            {
                 echo "<div class=\"imgdir\"></div>";
            }    
            else
            {
                
            }

            if($r['mentor']=='a')
            {
                 echo "<div class=\"imgmentor\"></div>";
            }    
            else
            {
                
            }


            if($r['office_admin']=='a')
            {
                 echo "<div class=\"imgoffice\"></div>";
            }    
            else
            {
                
            }







            


//post
            ?>

</html>