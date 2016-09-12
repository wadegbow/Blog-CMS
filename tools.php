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
  <p>Welcome to the toolbox <?php echo $_SESSION['username']; ?>.</p>
  <p>
	<ul>
	<li><a href="addnews.php">Add News</a></li>
	<li><a href="addsites.php">Add Site Links</a></li>
	<li><a href="">Update Current</a></li>
    <br />
	<li><a href="logout.php">Logout</a></li>
	</ul>
  </p>
  </div>

<?php 
include("includes/right2.php");
include("includes/right1.php");
?> 
<?php include("includes/footer.php"); ?> 
</body>
</html>