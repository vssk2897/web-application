<table class="table table-bordered table-hover">
<thead>
<tr>
<th style="color : #FFD700;">State or Union Territory</th>
<th style="color : #FFD700;">Cheif minister</th>
<th style="color : #FFD700;">Governer</th>
<th style="color : #FFD700;">Justice law and Order Rank</th>
</tr>
</thead>
                
<tbody>
<?php
    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    $query = "SELECT `cheifministers&governers`.`State&UT`,`cheifministers&governers`.`Cheifminister`,`cheifministers&governers`.`Governer`,`JusticeLaw&OrderRanks`.`justicelaw&orderranksin2011`FROM `cheifministers&governers` INNER JOIN `JusticeLaw&OrderRanks`ON `JusticeLaw&OrderRanks`.`State&UT`= `cheifministers&governers`.`State&UT`";
    $six = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($six)){
    $state_name = $row['State&UT'];
    $cheif_minister = $row['Cheifminister'];
    $gov = $row['Governer'];
    $jlo= $row['justicelaw&orderranksin2011'];
    echo "<tr>";
    echo "<td>{$state_name}</td>";
    echo "<td>{$cheif_minister}</td>";
    echo "<td>{$gov}</td>";
    echo "<td>{$jlo}</td>";
    echo "</tr>";
    }
?>
</tbody>
</table>
