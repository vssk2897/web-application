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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


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

        <li class="list-group-item">
              <a href="../dashboard.php">Dashboard</a>
          </li>
        <li class="dash">
            <a href="../user/logout.php">Logout</a>
        </li>
        
      </ul>
    </div>
    
  </div>
</nav>
 <?php
ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    $query = "SELECT * FROM `cheifministers&governers`";
    $all_cheifministers_governers = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($all_cheifministers_governers)){
    $id = $row['S.No'];
    $state_name = $row['State&UT'];
    $cheif_minister = $row['Cheifminister'];
    $governer = $row['Governer'];
    
echo "<form method='post' action='./update_cheif.php'";
echo "<table  class='table table-bordered table-hover' cellspacing='1' cellpadding='2'>";
echo "<tr>";
echo "<i width='100' style='color : #FFD700;'>State and UT</i>";
echo "<td ><input  name='state&utid' type='text' value='$state_name'></td>";
echo "</tr>";
echo "<tr>";
echo "<i  style='color : #FFD700;style = 'margin-left : 20px; margin-right :20px'>Cheif Minister</i>";
echo "<td><input name='cheifministerid' type='text' value='$cheif_minister'></td>";
echo "</tr>";
echo "<tr>";
echo "<i style='color : #FFD700;'>Governer</i>";
echo "<td><input name='governerid' type='text' value='$governer'></td>";
echo "</tr>";
echo "<tr>";
echo "<td width='100'> </td>";
echo "<td></td>";
echo "</tr>";
echo "<tr>";
echo "<td width='100'> </td>";
echo "<td>";
echo "<input name='update' type='submit' id='update' value='Update'>";
echo "</td>";
echo "</tr>";
echo "<br>";
echo "</table>";
echo "</form>";
    }
?>




</body>
</html>



<?php

if(isset($_POST['update']))
{

    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    

$state_name = $_POST['state&utid'];
$cm = $_POST['cheifministerid'];
$gov = $_POST['governerid'];
$sql = "UPDATE `cheifministers&governers` SET `State&UT` = '$state_name', `Cheifminister` = '$cm', `Governer` = '$gov', WHERE `State&UT` = '$state_name'";

    $retval = mysqli_query($connection, $query);


if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "<div>";
echo "<i style='color : #FFD700;'>Updated data successfully</i> </div>";
}


?>
