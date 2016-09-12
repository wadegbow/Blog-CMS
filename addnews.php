<?php
require_once("includes/session.php");
require_once("includes/dbconnect.php");
require_once("includes/functions.php");
include("includes/current.php");
confirm_logged_in();
include("includes/headers.php");
?>

<body>
<div id="header"><span class="header"><a href="index.php">escapePLOD</span></a>from the mind of wade bowers</div>
<div id="container">
  <div id="updates" class="floatLeft">
<?php		
		echo 		'<form action="submit_n.php" method="post">';
    	echo		'<b>Title</b><br /><input type="text" name="title" size="40" maxlength="80" value="" />';
    	echo		'<br />';
    	echo		'<br />';
   		echo		'<b>Author</b><br /><input type="text" name="author" size="40" maxlength="80" value="" />';
    	echo		'<br />';
    	echo		'<br />';
		echo		'<b>Tag</b><br /><input type="text" name="tag" size="40" maxlength="80" value="" />';
    	//echo		'<b>Tags</b><br /><select name="tag">';
		
		//$gettags = mysql_query("select * from tags ORDER BY category");
		//while($row=mysql_fetch_array($gettags)){
		//$tag_id = $row['id'];
		//$category = $row['category'];

		//echo 		'<option value="'.$category.'">'.$category.'</option>';
		//}
		//echo		'</select>';
    	echo		'<br />';
    	echo		'<br />';
    	echo		'<b>News</b><br /><textarea name="news" rows="20" cols="80"></textarea>';
    	echo		'<br />';
    	echo		'<br />';
    	echo		'<input type="submit" value="submit" /> <input type="reset" value="reset" />';
    	echo		'</form>';
		echo		'<br />';
?>
  </div>

<?php 
include("includes/right2.php");
include("includes/right1.php");
?>
<?php include("includes/footer.php"); ?> 
</body>
</html>