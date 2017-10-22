
<?php
    global $connection;
    global $error1, $error2, $error3, $error4, $error5;
    global $info, $fail;

    $f_name = $l_name = $email = $password = "";

    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass_word = $_POST['password'];
        
        $sql_query = mysqli_query($connection, "SELECT email FROM signup WHERE email = '{$email}' ");
        $count = mysqli_num_rows($sql_query);
        $password = $pass_word;
        
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($pass_word)){
            
            if($count > 0){
                $error1 = "<div class='alert alert-danger'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  User With Email Already Exists.
                </div>";
            }else{
                
                $f_name = ucwords(mysqli_real_escape_string($connection, $firstname));
                $l_name = ucwords(mysqli_real_escape_string($connection, $lastname));
                $email = mysqli_real_escape_string($connection, $email);
                $password = mysqli_real_escape_string($connection, $password);
                
                
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error2 = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Email is Invalid.</div>";
                }
                
                if(!preg_match("/^[a-zA-Z ]*$/", $f_name)){
                    $error3 = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Only Letters are Allowed For Firstname</div>";
                }
                
                if(!preg_match("/^[a-zA-Z ]*$/", $l_name)){
                    $error4 = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Only Letters are Allowed For Lastname</div>";
                }
                
                if(!preg_match('/^\S*(?=\S{7,15})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $pass_word)){
                    $error5 = "<div class='alert alert-danger email_alert'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                                Password Must Be Between 7 and 15 Characters and Must Contain At Least One Lowercase Letter One Uppercase Letter and One Digit.</div>";
                }
                
                
                if((preg_match("/^[a-zA-Z ]*$/", $f_name)) && (preg_match("/^[a-zA-Z ]*$/", $l_name)) &&
                   (filter_var($email, FILTER_VALIDATE_EMAIL)) && (preg_match('/^\S*(?=\S{7,15})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $pass_word))){
                    
                                        
                    $sql = "INSERT INTO signup(email, firstname, lastname, password) VALUES('{$email}', '{$f_name}', '{$l_name}', '{$password}') ";
                    $query = mysqli_query($connection, $sql);
                    
                    if(!$query){
                        die("QUERY FAILED " . mysqli_error($connection));
                    }
                    
                                    
                }
                
            }
            
            
        }else{
            if(empty($firstname)){
                $error3 = "<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                            Firstname Field Cannot Be Empty.</div>";
            }
            
            if(empty($lastname)){
                $error4 = "<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                            Lastname Field Cannot Be Empty.</div>";
            }
            
            if(empty($email)){
                $error2 = "<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                            Email Field Cannot Be Empty.</div>";
            }
            
            if(empty($pass_word)){
                $error5 = "<div class='alert alert-danger email_alert'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>
                            Password Field Cannot Be Empty.</div>";
            }
        }
    }


?>