<?
// First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.
if ($pagenum == 1)
{
}
else
{
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1'>Start</a> ";
echo " |";
$previous = $pagenum-1;
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'> Forward in Time</a> ";
echo " | ";
}

//This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
if ($pagenum == $last)
{
}
else {
$next = $pagenum+1;
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next'>Back in Time</a> ";
echo " |";
echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last'> End</a> ";
}
?>
<?php
echo '<p>&nbsp;</p>';
?>