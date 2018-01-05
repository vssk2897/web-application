<table class="table table-bordered table-hover">
<thead>
<tr>
<th style="color : #FFD700;">State or Union Territory</th>
<th style="color : #FFD700;">Government Performance index in 2001</th>
<th style="color : #FFD700;">Government Performance index in 2011</th>
<th style="color : #FFD700;">Rank in 2011</th>
</tr>
</thead>
                
<tbody>
<?php
    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    $query = "SELECT * FROM `GPI`";
    $six = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($six)){
    $state_name = $row['State&UT'];
    $gpi2001 = $row['gpiscorein2001'];
    $gpi2011 = $row['gpiscorein2011'];
    $rank= $row['rankin2011'];
    echo "<tr>";
    echo "<td>{$state_name}</td>";
    echo "<td>{$gpi2001}</td>";
    echo "<td>{$gpi2011}</td>";
    echo "<td>{$rank}</td>";
    echo "</tr>";
    }
?>
</tbody>
</table>
