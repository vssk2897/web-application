<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GOVERNANCE APPLICATION - ADMIN DASHBOARD</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/admin.css">

</head>


<body>
<nav class="navbar navbar-inverse" style="border-radius: 0; margin: 0;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand crud" href="#">GOVERNANCE SYSTEM</a>
    </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dash">
            <a href="../../user/logout.php">Logout</a>
        </li>
        
      </ul>
    </div>
    
  </div>
</nav>

<div class="container-fluid">
    
    <div class="row content">
        
    <div class="col-md-2 admin-links">
       <h3 class="text-center">Admin Dashboard</h3>
        <ul class="">
            <li><a href="../dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>  Dashboard</a></li>
            <li><a href="view.php"><i class="fa fa-user" aria-hidden="true"></i>  View All Users</a></li>
            <li><a href="verified.php"><i class="fa fa-check" aria-hidden="true"></i>   Verified Users</a></li>
            <li><a href="not_verified.php"><i class="fa fa-times" aria-hidden="true"></i>  Not Verified Users</a></li>
        </ul>
    </div>
    <div>
    <h1 class="text-center" style="color : #FFD700;padding :40px 40px 40px 40px;margin :40px 40px 40px 40px;" >View All Users</h1>
        </div>
    <div class="col-md-10">
        
        <div class="row table-responsive">
            
            <div class="col-md-12">
                
             <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="color : #FFD700;">Id</th>
                            <th style="color : #FFD700;">Firstname</th>
                            <th style="color : #FFD700;">Lastname</th>
                            <th style="color : #FFD700;">Email</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            ob_start();
                            $connection = mysqli_connect("localhost", "root", "", "governance");

                            if(!$connection){
                                    die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
                            }

                                            
                            $query = "SELECT * FROM signup";
                            $all_users = mysqli_query($connection, $query);
                        
                            while($row = mysqli_fetch_array($all_users)){
                                $id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $email = $row['email'];
                                                                
                                echo "<tr>";
                                echo "<td>{$id}</td>";
                                echo "<td>{$firstname}</td>";
                                echo "<td>{$lastname}</td>";
                                echo "<td>{$email}</td>";
//                                                              
                                echo "</tr>";
                            }
                        
                        ?>
                        
                        
                    </tbody>
                    
                </table>
            </div>
            
        </div>
        
    </div>
    
</div>   


</div>
</body>
</html>