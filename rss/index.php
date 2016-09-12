<? header('Content-type: text/xml'); ?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
<atom:link href="http://www.escapeplod.net/blog/rss/" rel="self" type="application/rss+xml" />
<title>escapePLOD - Blog of Wade Bowers</title>
<description>Ramblings and reviews.</description>
<link>http://blog.escapeplod.net</link>
<copyright>Copyright Wade Gerald Bowers</copyright>

<?
require("../includes/dbconnect.php");
$getnews = mysql_query("select * from news ORDER BY id DESC LIMIT 10");
while($row=mysql_fetch_array($getnews)){
$id = $row['id'];
$author = $row['author'];
$title = $row['title'];
$date = $row['date'];
$dater = $row['dater'];
$tag = $row['tag'];
$news = $row['news'];
?>
     <item>
        <title> <?=htmlentities(strip_tags($title)); ?></title>
        <description> <?=htmlentities($news);?></description>
        <link>http://www.escapeplod.net/blog/viewpost.php?id=<?=$id;?></link>
        <pubDate> <?echo $dater; ?></pubDate>
     </item>  
<? } ?>  
</channel>
</rss>

