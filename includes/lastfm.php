<?php
//User settings -> needs your attention
$user = "ocrayon"; //Your username
$width = 185; //width of the list

//Code you should not worry about
$file = "http://ws.audioscrobbler.com/2.0/user/ocrayon/weeklyartistchart.xml";
$xml = simplexml_load_file("$file");
$total = count($xml->artist);

echo '<p>';
for ($k=0 ; $k<=5; $k++) {
echo '<a href="http://www.last.fm/user/ocrayon">' . $xml->artist[$k]->name . '</a><br />';
}
echo '</p>';
?>