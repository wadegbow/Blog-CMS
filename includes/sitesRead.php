<?
$getsites = mysql_query("select * from sitesRead ORDER BY name");
while($row=mysql_fetch_array($getsites)){
$site_id = $row['id'];
$site_name = $row['name'];
$site_url = $row['url'];

echo '<a href="' .  $site_url . '">' . $site_name . '</a><br />';
}
?>