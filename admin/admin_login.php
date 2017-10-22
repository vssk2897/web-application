
<?php 
    global $error1, $error2;

    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }


    if(isset($_POST['admin_login'])){
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];
        
        $email = mysqli_real_escape_string($connection, $admin_email);
        $pass = mysqli_real_escape_string($connection, $admin_password);
        
        $select_query = "SELECT * FROM admin WHERE email = '{$email}'";
        $query = mysqli_query($connection, $select_query);
        
        $row = mysqli_fetch_array($query);
        $email_admin = $row['email'];
        $pass_admin = $row['password'];
        
        if(!empty($admin_email) && !empty($admin_password)){
            
            if($email == $email_admin && $pass == $pass_admin){
                header("Location: admin/dashboard.php");
                
                $_SESSION['email'] = $email_admin;
            }else{
                $error1 = "<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            Admin Login Credentials are Invalid.</div>";
            }
            
        }else{
            $error2 = "<div class='alert alert-danger email_alert'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        Email and Password Fields Cannot be Empty.</div>";
        }
    }

?>
<div class="container">
    <div class="row" style="text-align:center;">
        <h3 style="color:#6495ED;">GOVERNANCE APPLICATION ADMIN LOGIN</h3>
    </div>
    
    
    <div class="row signup">
        <div class="row">
            <h4 style="color:#6495ED;">Welcome Admin, Please Login</h4>
        </div>
        
        
        <form action="" method="post" class=".form-horizontal"> 
           
           <?php echo $error1 ?>
           <?php echo $error2 ?>
            
           <div class="row form-group input_group">
               <label for="" class="col-sm-2" style="color:#6495ED;">Email:</label>
               <div class="col-sm-10">
                  <input type="text" name="admin_email" id="admin_email" class="form-control"> 
               </div>
           </div>
           
           <div class="row form-group input_group">
               <label for="" class="col-sm-2" style="color:#6495ED;">Password:</label>
               <div class="col-sm-10">
                  <input type="password" name="admin_password" id="admin_password" class="form-control"> 
               </div>
           </div>
           
           <div class="row form-group" style="margin: 0px 10px 20px 10px;">
               <div class="col-xs-12">
                  <input type="submit" name="admin_login" id="admin_btn" class="form-control" value="LOGIN"> 
               </div>
           </div>
            
        </form>
        
<!--
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="./user/forgot_password.php">Forgot Password?</a>
            </div>
        </div>
-->
        
    </div>
    
</div>