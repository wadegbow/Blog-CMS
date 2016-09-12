<?php
require_once("includes/session.php");
require_once("includes/dbconnect.php");
require_once("includes/functions.php");
include("includes/current.php");

//(get_magic_quotes_gpc()) ? 

if($_POST['submit'])
{
$userLogin = $_POST['username'];
$password = $_POST['password'];
$hashed_password = MD5($password);

$query = "SELECT id, username ";
$query .= "FROM members ";
$query .= "WHERE username = '{$userLogin}' ";
$query .= "AND userPass = '{$hashed_password}' ";
$query .= "LIMIT 1";

$getmember = mysql_query($query);

//$getmember = sprintf("SELECT userID, userPass FROM member WHERE userID = '%s' AND userPass = MD5('%s')", $userLogin, $userPass);
	if(mysql_num_rows($getmember) == 1){
	$found_user = mysql_fetch_array($getmember);
	$_SESSION['user_id'] = $found_user['id'];
	$_SESSION['username'] = $found_user['username'];
	
	redirect_to("tools.php");
	}
	else
	{
      echo 'Either your username or password is incorrect.';
	}
}
include("includes/headers.php");
?>

<body>
<div id="header"><span class="header"><a href="index.php">escapePLOD</span></a>from the mind of wade bowers</div>
<div id="container">
  <div id="updates" class="floatLeft">
<p>
<form method="post"><table width="15%" border="0">
  <tr>
    <td width="5%">Username: </td>
    <td width="95%"><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="password" /></td>
  </tr>
</table>
<input type="submit" name="submit" value="Login" />
</form>
</p>
</div>

<?php 
include("includes/right2.php");
include("includes/right1.php");
?>
<?php include("includes/footer.php"); ?>
</body>
</html>