	<link rel="stylesheet" type="text/css" href="style.css" />
	<div id="header">
	<a href="index.php" ><img class="header" border=0 src="images/mango_header.jpg" align="middle" width="780"alt ""></a>
	
	
	
	
	</div>
	<table border="0" cellspacing="10" align="center" bgcolor='#ECF1EF' >
	
	<tr>
	
	<td width="200"><?php print( '<a href="addevent.php"><b>New Blog</b></a>' ); ?></td>           
	<td width="200"><?php print( '<a href="addband.php"><b>Edit Blogs</b></a>' ); ?></td>
	<td width="200"><?php print( '<a href="addvenue.php"><b>Delete Blogs</b></a>' ); ?></td> 
	<?php
	if(!isset($_SESSION['user']))
	{
	?>
	<td width="200"><?php print( '<a href="login.php"><b>Login/Register</b></a>' ); ?></td> 
	<?php
	}
	else
	{
	?>
	<td width="200"><?php print( '<a href="logout.php"><b>Logout</b></a>' ); ?></td> 
	<?php
	}
	?>
	</tr>
	</table>
	
	

	</p>
