<?
////////////////////////////////////////////////////////////
// Code provided by http://www.protectwebform.com 

if($GLOBALS['REQUEST_METHOD'] == 'POST' || count($_POST) > 0) { 

$pwf_message = "The image code you have provided does not match the actual one. Hit the 'back' button of your browser and input the correct code please.";

if(strlen($_POST['protectwebformcode']) > 30) {
		die($pwf_message);
}

$protectwebformresult = 
	@file_get_contents( "http://protectwebform.com/verify01?vui=31396&vp=d8pw54y3s61g&ri=" . 
	urlencode($_SERVER['REMOTE_ADDR']) . "&vs=" . 
	urlencode($_POST['protectwebformcode'])); 

if(preg_match("|<authorization status=\"0\"|", $protectwebformresult)) { 
    echo "Warning. You are not authorithed to use image protection provided by http://www.protectwebform.com. Read http://www.protectwebform.com FAQ for more information"; 

} elseif(!preg_match("|<verification result=\"yes\"/>|", $protectwebformresult)) { 
    die($pwf_message); 
}

}                                                                            

// End of code provided by http://www.protectwebform.com 
////////////////////////////////////////////////////////////
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="5;url=http://blog.escapeplod.net/" />
<title>//////w/bowers//////</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="header"><span class="header"><a href="index.php">escapePLOD</span></a>from the mind of wade bowers</div>
<div id="container">
  <div id="updates" class="floatLeft">
<? 
if (isset($_POST['comment'])) {

	$comment = $_POST['comment'];
	$author = $_POST['cAuthor'];
	$link = $_POST['cLink'];
	$post_id = $_GET['id'];

	require_once("includes/dbconnect.php");

	$comment = mysql_real_escape_string($comment);
	$author = mysql_real_escape_string($author);
	
	$date = date("l") . ', ' . date("F") . ' ' . date("d") . '.';
	$date2 = date("r");
	$addnews =MYSQL_QUERY("INSERT INTO comments (id,cid,author,link,date,comment)". "VALUES ('NULL', '$post_id', '$author', '$link', '$date', '$comment')");
	
	//echo '<p>' . $post_id . '</p>';
	echo '<p>You have added a comment! You will be redirected to the home page...</p>';
}
else {
	echo '<p>I dont think you belong here..</p>'; 
} ?>

</div>

<?php 
include("includes/right2.php");
include("includes/right1.php");
?> 

</div>

<?php include("includes/footer.php"); ?> 

</body>
</html>