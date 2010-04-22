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
	$value = $_POST['venuesearchbox'];
	echo "<h3>You Searched for $value...</h3>";
	$m = new Mongo();
	$db = $m->blog_info;
	$collection = $db->blogs;
	$regex = new MongoRegex("/.*$value.*/");
	$query = array("title" => $regex);

	$cursor = $collection->find($query);
	foreach ($cursor as $obj) {
    echo "<a href='viewblog.php?tag=" . $obj["date"] . "'>" .$obj["title"] . "</a>";
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
