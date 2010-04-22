
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

	<h2>What's New?</h2>
	
	<div id = 'artist'>
		<h3>Latest Blog</h3>
	

<div id = 'venue'>
<?php
$m = new Mongo();
$db = $m->blog_info;
$collection = $db->blogs;
//$obj = $collection->findOne();

$count = 0;
$newest = 0;
$cursor = $collection->find();
foreach ($cursor as $obj) {
	$time = $obj["date"];
    if($time > $newest) {
	$newest = $time;
	}
$count++;
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
echo $obj["blog"];
$randNum=rand(0,$count-1);
$count=0;
$cursor = $collection->find()->skip($randNum)->limit(1);
	echo "</div>";
	echo "<h3>Featured Blog</h3>";
	echo "<div id='venue'>";
foreach($cursor as $obj)
{
echo $obj["title"];
echo '<br>';
echo '<br>';
echo "Posted by: ";
echo $obj["name"];
echo '<br>';
echo '<br>';
echo $obj["blog"];

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
