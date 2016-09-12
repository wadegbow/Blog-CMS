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
					<p>Here you can add tags to the collection.</p>
<?php		
		echo 		'<form action="submit_t.php" method="post">';
    	echo		'<b>Tag</b><br /><input type="text" name="tag" size="40" maxlength="80" value="" />';
    	echo		'<br />';
    	echo		'<br />';
    	echo		'<input type="submit" value="submit" /> <input type="reset" value="reset" />';
    	echo		'</form>';
?>
  </div>

<?php 
include("includes/right2.php");
include("includes/right1.php");
?>
<?php include("includes/footer.php"); ?> 
</body>
</html>