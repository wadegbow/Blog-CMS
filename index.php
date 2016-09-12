<?php
require_once("includes/dbconnect.php");
include("includes/current.php");
include("includes/headers.php");
?>

<body>
<div id="header"><span class="header"><a href="index.php">escapePLOD</span></a>from the mind of wade bowers</div>
<div id="container">
  <div id="updates" class="floatLeft">
  
<?

$pagenum = $_GET['pagenum'];

include("includes/paginate_head.php");

$getnews = mysql_query("select * from news ORDER BY id DESC $max");
while($row=mysql_fetch_array($getnews)){
$id = $row['id'];
$author = $row['author'];
$title = $row['title'];
$date = $row['date'];
$tag = $row['tag'];
$news = $row['news'];

$getcomments = mysql_query("select COUNT(comment) from comments WHERE cid='$id'");
$rowC = mysql_fetch_array($getcomments);

echo '<h1>' . $title . '</h1>';
echo '<h3>Posted By ' . $author . ' on ' . $date. '</h3>';
echo '<p>' . $news . '<p>';
echo '<a href="viewpost.php?id=' . urlencode($id) . '"><h3>Comments ('.$rowC[0].')</h3></a>';

}
echo '<br />';
include("includes/paginate_foot.php");
?>
</div>

<?php 
include("includes/right2.php");
include("includes/right1.php");
?> 
</div>
<?php include("includes/footer.php"); ?> 
</body>
</html>
