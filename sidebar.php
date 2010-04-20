
	<div id="sidebar">
	
	<?php
	
	include("db_connect.php");
	
	echo '<p><b>Blog Search:</b></p>';
	echo '<form method="post" action="venueSearch.php">';
	echo '<input type="text" id="searchbox" name="venuesearchbox" />';
	echo '<input type="submit" value="go" name="submit" />';
	echo '</form>';

	
	mysqli_close($db);
	
	?>
