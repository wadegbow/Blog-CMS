<?php
$endY = date("Y") - 4;

$getdates = mysql_query("SELECT DISTINCT dateF, dateY from news ORDER BY dateY DESC, datem DESC");
while($row=mysql_fetch_array($getdates)){
$dateF = $row['dateF'];
$dateY = $row['dateY'];

echo '<a href="viewdate.php?dateF='. urlencode($dateF) .'&dateY='.urlencode($dateY). '">' . $dateF .' '. $dateY .'</a><br />';
}
?>