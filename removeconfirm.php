
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
		<h3>Are You Sure You Want To REMOVE this blog?</h3>
	
<div id = 'venue'>
<?php

$id = $_GET['tag'];
$m = new Mongo();
$db = $m->blog_info;
$collection = $db->blogs;
echo "$id";
$query = array('_id' => '4bce030317c528f408000000');
$obj = $collection->findOne($query);
echo $obj["_id"];
echo $obj["title"];
echo '<br>';
echo '<br>';
echo "Posted by: ";
echo $obj["name"];
echo '<br>';
echo '<br>';
echo $obj["blog"];
//$collection->remove({'_id':'4bce030317c528f408000000'});
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
