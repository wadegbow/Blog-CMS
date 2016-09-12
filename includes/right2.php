<div id="current" class="floatRight">
    <h2>i am <span class="lastWord">Currently</span></h2><p></p>
    <h4>reading:</h4>
		<?  echo '<p><a href="'.$current_read_url.'"><img src="' .$current_read_img. '" /></a></p><p></p>' ?>
		    <h4>listening:</h4>
		<? include("lastfm.php"); ?>
</div>