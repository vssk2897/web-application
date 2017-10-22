<table class="table table-bordered table-hover">
<thead>
<tr>
<th style="color : #FFD700;">State or Union Territory</th>
<th style="color : #FFD700;">Cheif minister</th>
<th style="color : #FFD700;">Quality of Legislature Rankings </th>
<th style="color : #FFD700;">Social Service Delivery Rankings</th>
</tr>
</thead>
                
<tbody>
<?php
    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    $query = "SELECT A.`State&UT`,A.`Cheifminister`,B.`qualityoflegislatureranksin2011`,A.`SocialServiceDeliveryRankin2011` FROM ( SELECT `cheifministers&governers`.`State&UT`,`cheifministers&governers`.`Cheifminister`,`SocialServiceDeliveryRank`.`SocialServiceDeliveryRankin2011`FROM `cheifministers&governers` INNER JOIN `SocialServiceDeliveryRank`ON `SocialServiceDeliveryRank`.`State&UT`= `cheifministers&governers`.`State&UT`  )AS A INNER JOIN (SELECT `SocialServiceDeliveryRank`.`State&UT`,`SocialServiceDeliveryRank`.`SocialServiceDeliveryRankin2011`,`QualityOfLegislatureRanks`.`qualityoflegislatureranksin2011`FROM `SocialServiceDeliveryRank` INNER JOIN `QualityOfLegislatureRanks`ON `QualityOfLegislatureRanks`.`State&UT`= `SocialServiceDeliveryRank`.`State&UT` )AS B ON A.`State&UT`= B.`State&UT`
";
    $six = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($six)){
    $state_name = $row['State&UT'];
    $cheif_minister = $row['Cheifminister'];
    $qol = $row['qualityoflegislatureranksin2011'];
    $ssd = $row['SocialServiceDeliveryRankin2011'];
    echo "<tr>";
    echo "<td>{$state_name}</td>";
    echo "<td>{$cheif_minister}</td>";
    echo "<td>{$qol}</td>";
    echo "<td>{$ssd}</td>";
    echo "</tr>";
    }
?>
</tbody>
</table>