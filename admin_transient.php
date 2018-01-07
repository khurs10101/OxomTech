<?php

    date_default_timezone_set("Asia/Kolkata");
    error_reporting(E_ERROR);
    
    require 'db_connection.php';
    require 'handy_functions.php';
    
    
    


    if(isset($_POST['submit']))
    {
        
        
        //if someone is logged in and hasnt logged out
        //We want to implement a function that if anyone is logged in then we want to clear it
        if(isset($_SESSION['username']))
        {
            $username= $_SESSION['username'];
            
            $log="";
//
//            $result= mysqli_query($con,"SELECT * FROM ".$log);
//
//            $query_to_admin_login="UPDATE admin SET logout_time=NOW() WHERE username='$username'";
//            mysqli_query($con,$query_to_admin_login);
//
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
            
            
            
//
            if(isset($log)){
                
            

//
                $result= mysqli_query($con,"SELECT * FROM ".$log." ORDER BY id DESC LIMIT 1");
                $row= mysqli_fetch_array($result);
                
                $query_log="UPDATE ".$log." SET logout_time=NOW() WHERE id= ".$row['id'];
                mysqli_query($con,$query_log);
                
            }
                
                setcookie("action","",time()-3600);
                setcookie("token","",time()-3600);
//                session_destroy();

        }
        
        
        
        
        $admin_username= $_POST['userid'];
        $admin_password= $_POST['password'];
        
        
        
        
        //check if username exist
        if(user_exist($con,$admin_username,$admin_password))
        {
            switch($admin_username)
            {
                case "khurs10101":
                    $_SESSION['username']= $admin_username;
                    //echo $admin_username;
                    header("location: khurshid.php");
                    break;
                case "prakash@oxomlab":
                    $_SESSION['username']= $admin_username;
                     //echo $admin_username;
                    header("location: prakash.php");
                    break;
                case "ankit@oxomlab":
                    $_SESSION['username']= $admin_username;
                     //echo $admin_username;
                    header("location: ankit.php");
                    break;
                case "medhi@oxomlab":
                    $_SESSION['username']= $admin_username;
                    //echo $admin_username;
                    header("location: medhi.php");
                    break;
                case "joan@oxomlab":
                    $_SESSION['username']= $admin_username;
                    //echo $admin_username;
                    header("location: joan.php");
                    break;
            }
        }else
        {
            echo "User doesnt exist";
        }
        
        
        
    }


?>