
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
		<h3></h3>
	
<div id = 'venue'>
<?php

$id = $_GET['tag'];
$m = new Mongo();
$db = $m->blog_info;
$collection = $db->blogs;

echo $collection->count();

$query = array( "_id" => $id );


$obj = $collection->findone( array("_id" => $id)  );
var_dump($obj);



/*$newest = 0;
$cursor = $collection->find();
foreach ($cursor as $obj) {
	$time = $obj["date"];
    if($time > $newest) {
	$newest = $time;
	}
}
$query = array("date" => $newest);
$cursor = $collection->find($query);



echo $obj["title"];
echo '<br>';
echo '<br>';
echo "Posted by: ";
echo $obj["name"];
echo '<br>';
echo '<br>';
echo $obj["blog"];*/

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
