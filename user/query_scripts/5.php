<table class="table table-bordered table-hover">
<thead>
<tr>
<th style="color : #FFD700;">State or Union Territory</th>
<th style="color : #FFD700;">Quality of Legislature</th>
<th style="color : #FFD700;">Fiscal Perfomance Ranks</th>
<th style="color : #FFD700;">Justice law and Order Ranks</th>
</tr>
</thead>
                
<tbody>
<?php
    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    $query = "SELECT A.`State&UT`,B.`qualityoflegislatureranksin2011`,A.`fiscalperfomanceranksin2011`,A.`justicelaw&orderranksin2011` FROM ( SELECT `FiscalPerfomanceRanks`.`State&UT`,`FiscalPerfomanceRanks`.`fiscalperfomanceranksin2011`,`JusticeLaw&OrderRanks`.`justicelaw&orderranksin2011`FROM `FiscalPerfomanceRanks` INNER JOIN `JusticeLaw&OrderRanks`ON `FiscalPerfomanceRanks`.`State&UT`= `JusticeLaw&OrderRanks`.`State&UT`  )AS A INNER JOIN (SELECT `JusticeLaw&OrderRanks`.`State&UT`,`JusticeLaw&OrderRanks`.`justicelaw&orderranksin2011`,`QualityOfLegislatureRanks`.`qualityoflegislatureranksin2011`FROM `JusticeLaw&OrderRanks` INNER JOIN `QualityOfLegislatureRanks`ON `QualityOfLegislatureRanks`.`State&UT`= `JusticeLaw&OrderRanks`.`State&UT` )AS B ON A.`State&UT`= B.`State&UT`

";
    $six = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($six)){
    $state_name = $row['State&UT'];
    $qol=$row['qualityoflegislatureranksin2011'];    
    $fp = $row['fiscalperfomanceranksin2011'];
    $jlo = $row['justicelaw&orderranksin2011'];
    echo "<tr>";
    echo "<td>{$state_name}</td>";
    echo "<td>{$qol}</td>";
    echo "<td>{$fp}</td>";
    echo "<td>{$jlo}</td>";
    echo "</tr>";
    }
?>
</tbody>
</table>