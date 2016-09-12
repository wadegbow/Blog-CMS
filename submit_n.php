<? include("includes/dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>//////w/bowers//////</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<?
if (isset($_POST['news'])) {
	$news = $_POST["news"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$tag = $_POST["tag"];

	$news = mysql_real_escape_string($news);
	$title = mysql_real_escape_string($title);
	$author = mysql_real_escape_string($author);
	$tag = mysql_real_escape_string($tag);


	$date = date("l") . ', ' . date("F") . ' ' . date("d") . '.';
	$dateF = date("F");
	$datem = date("m");
	$dateY = date("Y");
	$dater = date("r");
	$addnews =MYSQL_QUERY("INSERT INTO news (id,title,author,tag,date,dateF,datem,dateY,dater,news)". "
	VALUES ('NULL', '$title', '$author', '$tag', '$date', '$dateF', '$datem', '$dateY',  '$dater', '$news')");
?>

<body>
<div id="header"><span class="header"><a href="index.php">escapePLOD</span></a>from the mind of wade bowers</div>
<div id="container">
  <div id="updates" class="floatLeft">
<?
	echo("You have added news!");
}
else {
	echo("You shouldn't be here..");
	}
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
