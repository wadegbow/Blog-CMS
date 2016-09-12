<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>//////w/bowers//////</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<?
$site_name = $_POST["name"];
$site_url = $_POST["url"];

include("includes/dbconnect.php");

$addnews =MYSQL_QUERY("INSERT INTO sitesRead (id,name,url)". "VALUES ('NULL', '$site_name', '$site_url')");
?>

<body>
<div id="header"><span class="header"><a href="index.php">escapePLOD</span></a>from the mind of wade bowers</div>
<div id="container">
  <div id="updates" class="floatLeft">
<?
echo '<p>You have added the site ';
echo '<a href="' .  $site_url . '">' . $site_name . '</a></p>'
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
