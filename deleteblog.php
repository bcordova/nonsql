
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>YSMISM</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<div id="wrap">
<body>

<?php
	include("header.php");

?>	

<div id='main'>
	
	<div id = 'artist'>
		<h3>Select a blog to remove:</h3>
	

<div id = 'venue'>
<?php
$m = new Mongo();
$db = $m->blog_info;
$collection = $db->blogs;
$cursor = $collection->find();
foreach ($cursor as $obj) {
    $header = $obj["title"];
	$id = $obj["_id"];
	echo "<a href='removeconfirm.php?tag=$id'>$header</a>";
	echo '<br>';
}

$m->close();
?>
	</div>
	</div>
	
</div>

<?php
	include("sidebar.php");
	
?>

</div>
</body>
</html>
