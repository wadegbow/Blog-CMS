<?php

require_once("includes/dbconnect.php");



$current_read = mysql_query("select * from current ORDER BY id=1");

while($current_row=mysql_fetch_array($current_read)){

$current_read_url = $current_row['url'];
$current_read_img = $current_row['img'];

}



$current_listen = mysql_query("select * from current ORDER BY id=2");

while($current_row=mysql_fetch_array($current_listen)){

$current_listen_url = $current_row['url'];

}

?>