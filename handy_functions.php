<?php
    
    error_reporting(E_ERROR);
    
    
    
    function user_exist($con,$userid,$password)
    {
        $password= md5($password);
        $query="SELECT * FROM admin WHERE username='$userid' AND password='$password'";
        $result= mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function is_logged_in()
    {
        if(isset($_SESSION['username']))
        {
            return $_SESSION['username'];
        }
        else
        {
            return false;
        }
    }


    

?>