<table class="table table-bordered table-hover">
<thead>
<tr>
<th style="color : #FFD700;">S.No</th>
<th style="color : #FFD700;">State</th>
<th style="color : #FFD700;">Cheifminister</th>
<th style="color : #FFD700;">Governer</th>
</tr>
</thead>
                
<tbody>
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
    echo "<tr>";
    echo "<td style : 'color : #FFD700;'>{$id}</td>";
    echo "<td style : 'color : #FFD700;'>{$state_name}</td>";
    echo "<td style : 'color : #FFD700;'>{$cheif_minister}</td>";
    echo "<td style : 'color : #FFD700;'>{$governer}</td>";
    echo "</tr>";
    }
?>
</tbody>
</table>