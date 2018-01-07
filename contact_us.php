<?php
    
    require 'db_connection.php';
    $error="";

    if(isset($_POST['submit'])){
        
        //backend data validation
        //ends
        
//        //temp connection
//        //credentials
//        $hostname="localhost";
//        $db_name="oxomlab_master_db";
//        $username="root";
//        $password="";
//        //ends
//
//        //connection to database
//        $con= mysqli_connect("localhost","root","","oxomlab_master_db");
//        if($con){
//            echo "hello";
//        }else{
//            echo "tata";
//        }
//
//        //end
        
        
        
        $client_name= $_POST['name'];
        $client_organization= $_POST['comp-name'];
        $client_email= $_POST['email'];
        $client_mobile= $_POST['mobile-no'];
        
        //echo " ".$client_name." ".$client_organization." ".$client_email." ".$client_mobile;
        
        $query_to_insert="INSERT INTO clients(name,organization,email,mobile,timestamp) VALUES('$client_name','$client_organization','$client_email','$client_mobile',NOW())";
        
        mysqli_query($con,$query_to_insert);
        
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
                               <h1 class="display-3 text-center text-muted mt-5">thankyou we will contact you soon</h1>
<!--                               <i class="material-icons mt-5 text-center" style="font-size:100px;color:red">sentiment_very_dissatisfied</i>-->
                               <a href="index.html" style="width:300px;border:3px solid; border-radius:7px;" class="btn btn-outline-success btn-lg mt-5"><b>homepage</b></a>
                               
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



?>