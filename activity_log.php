<?php
    error_reporting(E_ERROR);
    require 'db_connection.php';
    require 'handy_functions.php';

    if(is_logged_in()){
        
        $admin_username= is_logged_in();
        $full_name="";
        $name="";
        $image="";
        $log="";
        $page="";
        
        
        
//        $query_to_admin_login="UPDATE admin SET login_time=NOW() WHERE username='$username'";
//        mysqli_query($con,$query_to_admin_login);
//        
//        $query_to_show="SELECT * FROM clients";
//        $result= mysqli_query($con,$query_to_show);
        
        
        
        
            switch($admin_username)
            {
                case "khurs10101":
                    $full_name="Khurshid Alam Bhuyan";
                    $name="Khurshid";
                    $image="img/khurshid.jpg";
                    $log="khurshid_log";
                    $page="khurshid.php";
                    break;
                case "prakash@oxomlab":
                    $full_name="Prakash Pokhrel";
                    $name="Prakash";
                    $image="img/prakash.jpg";
                    $log="prakash_log";
                    $page="prakash.php";
                    break;
                case "ankit@oxomlab":
                    $full_name="Ankit Gupta";
                    $name="Ankit";
                    $image="img/ankit.jpg";
                    $log="ankit_log";
                    $page="ankit.php";
                    break;
                case "medhi@oxomlab":
                   $full_name="Shubhanjan Medhi";
                    $name="S. Medhi";
                    $image="img/medhi.jpg";
                    $log="medhi_log";
                    $page="medhi.php";
                    break;
                case "joan@oxomlab":
                   $full_name="Joan Ahmed";
                    $name="Joan";
                    $image="img/joan.jpg";
                    $log="joan_log";
                    $page="joan.php";
                    break;
            }
        
        
        $query_log="SELECT * FROM ".$log;
        $result= mysqli_query($con,$query_log);
        
        
        
        
     ?>
       
<!--    html goes here   -->
       
<!doctype html>
<html lang="en">
    <head>
        <title>Hello, <?php echo $name ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
<!--        <link rel="stylesheet" href="css/style.css" />-->
    </head>
    <body>
        
        <!-- Nav bar section-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="index.html" class="navbar-brand">OxomLAB</a>
                <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
                     <span class="navbar-toggler-icon"></span>   
                </button>
               
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav">
                        
                        <li class="nav-item">
                            <a href="<?php echo $page ?>" class="nav-link">Dashboard</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="" class="nav-link">Clients</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="activity_log.php" class="nav-link">Log</a>
                        </li>
                        
                    </ul>
                    
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item dropdown">
                            
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>&nbsp;<?php echo $name; ?>
                            </a>
                            
                            <div class="dropdown-menu">
                               
                                <a href="#" class="nav-link text-dark">
                                   <i class="fa fa-user-circle text-dark"></i>&nbsp;&nbsp;Profile
                                </a>
                                
                                <a href="#" class="nav-link text-dark">
                                   <i class="fa fa-gear text-dark"></i>&nbsp;&nbsp;Settings
                                </a>
                            </div>
                            
                        </li>
                        
                        <li class="nav-item">
                            <form method="post" action="master_logout.php">
                            <input type="submit" value="Logout"  name="logout_ok" class="btn btn-dark text-muted">
                            </form>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Navbar section ends-->
        
        <header id="main-header" class="py-2 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    
                        <div class="row">
                            <div class="col-lg-4">
                            <div class="text-center">
                                <img style="width: 150px; height: 150px;" class="rounded-circle" src="<?php echo $image ?>" alt="ankit"> 
                            </div> 
                            </div>
                            <div class="col-lg-8">
                                <div class="mt-4 text-center text-lg-left">
                                    <p><?php echo $full_name; ?></p>
                                    <p>Developer@ OxomLAB</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-6 mt-3">
                      
                       <div class="row">
                          
                           <div class="col">
                               
                                <div class="text-center text-lg-left">
                                    <h1><i class="fa fa-gears"></i>&nbsp;Activity Log</h1>
                                </div>
                                
                           </div>
                    
                       </div>
                       
<!--
                       <div class="row">
                           
                           <div class="col-lg-4 mt-4">
                               
                              <a class="btn btn-outline-light  btn-block" data-toggle="modal" data-target="#addPostModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Post</a> 
                               
                           </div>
                           
                           <div class="col-lg-4 mt-4">
                               
                               <a class="btn btn-outline-light  btn-block disabled" data-toggle="modal" data-target="#addAdminModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Admin</a> 
                               
                           </div>
                           
                           <div class="col-lg-4 mt-4">
                               
                               <a class="btn btn-outline-light  btn-block disabled" data-toggle="modal" data-target="#addClientModal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Client</a> 
                               
                           </div>
                           
                       </div>
-->
                    </div>
                </div>
            </div>
            
        </header>
        
        
        <section id="client-details">
            
            <div class="container">
               
                 <div class="row">
                    <div class="col-lg-9">
                       <div class="card mt-4 p-0 m-0">
                           <div class="card-header">
                               <h4>Log Details</h4>
                           </div>
                           <table class="table table-striped table-responsive-md p-0 m-0">
                               <thead class="table-dark">
                                   <tr>
                                        <th>Login Time</th>
                                        <th>Logout Time</th>
                                        
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php
                                        
                                        while($row= mysqli_fetch_array($result)){
                                            echo "<tr>";
                                            echo "<th>",$row['login_time'],"</th>";
                                            echo "<th>",$row['logout_time'],"</th>";
                                            echo "<tr>";
                                            
                                        }
        
                                    ?>
                               </tbody>
                           </table>
                       </div> 
                    </div>    
                    
                    <div class="col-lg-3">
                        
                    </div>
                    
                </div>
                
            </div>
            
        </section>
        
        
        
        
        <!-- Adding Modal Content-->
        
        <!-- post modal area-->
        <div class="modal fade" id="addPostModal">
            
            <div class="modal-dialog modal-lg">
                
                <div class="modal-content">
                    
                    <div class="modal-header bg-primary text-white">
                        
                        <h5 class="modal-title" id="addPostModalLabel">
                            Add Post
                        </h5>
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                        
                    </div>
                    
                    <form action="">
                        <div class="form-group bg-faded p-3">
                            <label for="title" class="form-control-label">Title</label>
                            <input type="text" class="form-control">
                        </div>
                        
                         <div class="form-group bg-faded px-3">
                            <label for="Category" class="form-control-label">Category</label>
                            <select name="" id="" class="form-control">
                                <option value="">Technology</option>
                                <option value="">Development</option>
                                <option value="">Business</option>
                            </select>
                            
                        </div>
                        
                         <div class="form-group bg-faded px-3">
                            <label for="file" class="form-control-label">Upload Image</label><br>
                            <input type="file" class="form-control-file btn btn-outline-primary" id="fileUpload">
                            <small class="form-text text-muted" id="fileUploadHelp">
                                Max 3MB Size
                            </small>
                        </div>
                        
                         <div class="form-group bg-faded p-3">
                            <label for="body" class="form-control-label">Body</label>
                            <textarea name="editor1" id="editor"  class="form-control">
                            </textarea>
                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" data-dismiss="modal">Add Post</button>
                        </div>
                        
                    </form>
                    
                    
                </div>
                
            </div>
            
        </div>
       
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('editor1');
        </script>
    </body>
</html>
        
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!--  html ends  -->
    
    <?php
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

?>