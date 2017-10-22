<table class="table table-bordered table-hover">
<thead>
<tr>
<th style="color : #FFD700;">State or Union Territory</th>
<th style="color : #FFD700;">Cheif minister</th>
<th style="color : #FFD700;">GDP in billion $</th>
<th style="color : #FFD700;">Comparable Economy</th>
<th style="color : #FFD700;">Ease of doing Business Score (100)</th>
</tr>
</thead>
                
<tbody>
<?php
    ob_start();
    $connection = mysqli_connect("localhost", "root", "", "governance");

    if(!$connection){
        die("CONNECTION TO DB FAILED. " . mysqli_error($connection));
    }
    $query = "SELECT A.`State&UT`,B.`Cheifminister`,A.`GDP(in $)`,A.`ComparableEconomy`,A.`Score` FROM ( SELECT `easeofdoingbusiness`.`State&UT`,`GDP&ComparableEconomy`.`GDP(in $)`,`GDP&ComparableEconomy`.`ComparableEconomy`,`easeofdoingbusiness`.`rank`,`easeofdoingbusiness`.`Score` FROM `easeofdoingbusiness` INNER JOIN `GDP&ComparableEconomy` ON `easeofdoingbusiness`.`State&UT`= `GDP&ComparableEconomy`.`State&UT`  )AS A INNER JOIN (SELECT `easeofdoingbusiness`.`State&UT`,`cheifministers&governers`.`Cheifminister`FROM `cheifministers&governers` INNER JOIN `easeofdoingbusiness`ON `cheifministers&governers`.`State&UT`= `easeofdoingbusiness`.`State&UT` )AS B ON A.`State&UT`= B.`State&UT`
";
    $six = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($six)){
    $state_name = $row['State&UT'];
    $cheif_minister = $row['Cheifminister'];
    $gdp = $row['GDP(in $)'];
    $ce = $row['ComparableEconomy'];
    $score= $row['Score'];
    echo "<tr>";
    echo "<td>{$state_name}</td>";
    echo "<td>{$cheif_minister}</td>";
    echo "<td>{$gdp}</td>";
    echo "<td>{$ce}</td>";
    echo "<td>{$score}</td>";
    echo "</tr>";
    }
?>
</tbody>
</table>