<table class="table table-bordered table-hover">
<thead>
<tr>
<th style="color : #FFD700;">State or Union Territory</th>
<th style="color : #FFD700;">Fiscal Perfomance Ranks</th>
<th style="color : #FFD700;">Social Service Delivery Rank</th>
</tr>
</thead>
                
<tbody>
<?php
    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    $query = "SELECT `FiscalPerfomanceRanks`.`State&UT`,`FiscalPerfomanceRanks`.`fiscalperfomanceranksin2011`,`SocialServiceDeliveryRank`.`SocialServiceDeliveryRankin2011`FROM `FiscalPerfomanceRanks` INNER JOIN `SocialServiceDeliveryRank`ON `SocialServiceDeliveryRank`.`State&UT`= `FiscalPerfomanceRanks`.`State&UT`
";
    $six = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($six)){
    $state_name = $row['State&UT'];
    $fpr = $row['fiscalperfomanceranksin2011'];
    $ssd = $row['SocialServiceDeliveryRankin2011'];
    echo "<tr>";
    echo "<td>{$state_name}</td>";
    echo "<td>{$fpr}</td>";
    echo "<td>{$ssd}</td>";
    echo "</tr>";
    }
?>
</tbody>
</table>