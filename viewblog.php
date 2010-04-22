
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


$collection = $db->blogs;

$cursor = $collection->find();
	
foreach ($cursor as $obj) {

	$time = $obj["date"];
    if($time == $id) {
	$query = array("date" => $time);
	
	$cursor = $collection->find($query);	
	
	$title = $obj["title"];

	$name = $obj["name"];

	$email = $obj["email"];

	$blog =  $obj["blog"];

	}
}

echo '<h3>';
echo $title;
echo '</h3>';
echo '<br>';
echo '<b>';
echo 'Author: ';
echo '</b>';
echo $name;
echo '<br>';
echo '<b>';
echo 'Email: ';
echo '</b>';
echo $email;
echo '<br>';
echo '<br>';
echo $blog;
echo '<br>';

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
