<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Awesome Music Watch</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<div id="wrap">
<body>

<?php
	include("header.php");

?>	

<div id='main'>
	
	<?php
	$m = new Mongo();
	$db = $m->blog_info;
	$collection = $db->blogs;

	$cursor = $collection->find();
	foreach ($cursor as $obj) {
    echo $obj["title"];
	echo '<br>';
	}

	$m->close();
	?>
	
	
</div>

<?php
	include("sidebar.php");
	
?>


</body>
</div>
</html>
