<?php

    date_default_timezone_set("Asia/Kolkata");
    //error_reporting(E_ERROR);
    //require 'current_token.php';
    
    require 'db_connection.php';
    require 'handy_functions.php';

    $username= $_SESSION['username'];
    
    if(is_logged_in()==$username && isset($_POST['logout_ok']))
    {
    
    $log="";
        
    //$result= mysqli_query($con,"SELECT * FROM ".$log);
    
    if(isset($username)){    
    $query_to_admin_login="UPDATE admin SET logout_time=NOW() WHERE username='$username'";
    mysqli_query($con,$query_to_admin_login);
    }
        
        switch($username)
            {
                case "khurs10101":
                    $log="khurshid_log";
                    break;
                case "prakash@oxomlab":
                    $log="prakash_log";
                    break;
                case "ankit@oxomlab":
                    $log="ankit_log";
                    break;
                case "medhi@oxomlab":
                    $log="medhi_log";
                    break;
                case "joan@oxomlab":
                    $log="joan_log";
                    break;
            }
        
        if(isset($log)){
//        $result= mysqli_query($con,"SELECT * FROM ".$log);
//        $row= mysqli_fetch_array($result);
        
            $query_log="UPDATE ".$log." SET logout_time=NOW() WHERE id= ".$_COOKIE["token"];
            mysqli_query($con,$query_log);
        }
        setcookie("action","",time()-3600);
        setcookie("token","",time()-3600);
        session_destroy();
        
            echo '<html>';   
            echo  '<script>';
            echo        'alert("You are Successfully logged out");';
            echo        'window.location.replace("admin_login.html");';
            echo  '</script>';
            echo  '</html>';
       
       
    }else{
        
        
        ?>
        
        
        
        <html>
               <head>
                   <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="css/bootstrap.css" />
                    <link rel="stylesheet" href="css/font-awesome.min.css" />
<!--                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
               </head>
               <body class="bg-dark" >
                   
                   <div class="container">
                       <div class="row">
                           <div class="col text-center">
                               <h1 class="display-3 text-center text-muted mt-5">You are not logged in</h1>
<!--                               <i class="material-icons mt-5 text-center" style="font-size:100px;color:red">sentiment_very_dissatisfied</i>-->
                               <a href="admin_login.html" style="width:300px;border:3px solid; border-radius:7px;" class="btn btn-outline-success btn-lg mt-5"><b>Login Page</b></a>
                               
                           </div>
                           
                       </div>
                   </div>
                   
                   
                   
                        <script src="js/jquery.min.js"></script>
                        <script src="js/popper.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/tether.min.js"></script>
               </body>
               
               
               
           </html>
        
        
        
        
        
        
        
        <?php
        
    }
//    header("location:admin_login.html");


?>