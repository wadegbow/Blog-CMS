<?
//echo '<a href="viewdate.php?id=' .  urlencode($category) . '">' . $category . '<br />';


$gettags = mysql_query("select DISTINCT tag FROM news ORDER BY tag");
while($row=mysql_fetch_array($gettags)){
$category = $row['tag'];

echo '<a href="viewcat.php?category=' .  urlencode($category) . '">' . $category . '</a><br>';
}

//echo '<a href="viewcat.php?category=">All</a><br>';
?>