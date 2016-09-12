<?php
require_once("includes/dbconnect.php");
include("includes/current.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>//////w/bowers//////</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header"><span class="header"><a href="index.php">escapePLOD</span></a>from the mind of wade bowers</div>
<div id="container">
  <div id="updates" class="floatLeft">
<?
////////////////////////////////////////////////////////////
// Code provided by http://www.protectwebform.com 

if($GLOBALS['REQUEST_METHOD'] == 'POST' || count($_POST) > 0) { 
$pwf_message = "The image code you have provided does not match the 
actual one. Hit the 'back' button of your browser and input the correct code please.";

if(strlen($_POST['protectwebformcode']) > 30) {
		die($pwf_message);
}

$protectwebformresult = 
	@file_get_contents( "http://protectwebform.com/verify01?vui=31396&vp=d8pw54y3s61g&ri=" . 
	urlencode($_SERVER['REMOTE_ADDR']) . "&vs=" . 
	urlencode($_POST['protectwebformcode'])); 
if(preg_match("|<authorization status=\"0\"|", $protectwebformresult)) { 
    echo "Warning. You are not authorithed to use image protection provided by 
		http://www.protectwebform.com. Read http://www.protectwebform.com 
		FAQ for more information"; 
} elseif(!preg_match("|<verification result=\"yes\"/>|", $protectwebformresult)) { 
    die($pwf_message); 
}
}                                                                            
// End of code provided by http://www.protectwebform.com 
////////////////////////////////////////////////////////////


$post_id = $_GET['id'];

//$lastID = mysql_query("SELECT id FROM news ORDER BY id DESC LIMIT 1");
$lastID = mysql_query("SELECT id FROM news");
$theLastID = mysql_num_rows($lastID);
$getnews = mysql_query("SELECT * FROM news WHERE id='$post_id' ORDER BY id DESC");
$getcomments = mysql_query("SELECT * FROM comments WHERE cid='$post_id' ORDER BY id ASC");


if($post_id > 0 AND $post_id <= $theLastID){
 
while($row=mysql_fetch_array($getnews)){

$author = $row['author'];
$date = $row['date'];
$title = $row['title'];
$news = $row['news'];

echo '<h1>' . $title . '</h1>';
echo '<h3>Posted By ' . $author . ' on ' . $date. '</h3>';
echo $news;
}

while($cRow=mysql_fetch_array($getcomments)){



$cAuthor = $cRow['author'];
$cLink = $cRow['link'];
$cDate = $cRow['date'];
$comment = $cRow['comment'];



echo '<br />';
echo '<h3>Comment posted by <a href="' . $cLink . '">'. $cAuthor .'</a> on ' . $cDate . '</h3>';
echo '<div class="comments">';
echo '<p>' . $comment . '</p>';
echo '</div>';
}

echo '<p></p>';
echo	'<form action="submit_c.php?id=' . $post_id . '" method="post">';
?>

		<p>&nbsp;</p>
    	<b>Your Name:</b><br />
<span id="sprytextfield1">
    	<input type="text" name="cAuthor" size="29" maxlength="80" value="" />
   	<span class="textfieldRequiredMsg">A value is required.</span></span><br />

   		<b>Link:</b><br />
<span id="sprytextfield2">
   		<input type="text" name="cLink" size="20" maxlength="80" value="" />
	<span class="textfieldInvalidFormatMsg">Invalid format.</span>	</span><br />

    	<b>Comment:</b><br />
    	<span id="sprytextarea1">
    	<textarea name="comment" rows="7" cols="40"></textarea>
   	<span class="textareaRequiredMsg">A value is required.</span></span><br />
        
		<a href="http://www.protectwebform.com/" title="Captcha service - protectwebform.com!"><img src="http://www.protectwebform.com/images/ssl_lock.gif" border="0"></a> Enter the code shown in the image:<br /><input type="text" style="vertical-align:top;"  name="protectwebformcode" value=""> <img src="http://protectwebform.com/image/31396/">
		<br />
		<br />
    	<input type="submit" value="submit" />
		<p>&nbsp;</p>
		</form>
<?
} //end first if statement

else{

echo '<p>Page does not exist.</p>';

} //end else statement

?>

  </div>

<?php 
include("includes/right2.php");
include("includes/right1.php");
?> 

</div>
<?php include("includes/footer.php"); ?> 
    <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "url", {isRequired:false});
//-->
</script>
</body>
</html>