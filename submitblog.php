
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>YSMISM</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">

    <?php include("header.php"); ?>
	
	  
	<div id="main">
	<h3>Thank you for posting.</h3>
<?php
  $id = $_GET['tag'];
  $m = new Mongo();
  $db = $m->blog_info;
  $collection = $db->blogs;
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $body = $_POST['body'] ;
  $date = new MongoDate();

  
	if($id == NULL || $id == "") {
  // Insert two documents (objects) into the db
  $collection->insert(array("name" => "$name", "email" =>
                     "$email", "title" => "$title", "blog" => "$body", "date" => "$date"));					 					 
  
   }else {
   echo "$d\n";
   

	echo "$name\n";
	$collection->update(array("date" => "$id"), array('$set' => array("name" => "$name")));
	
	echo "$email\n";
	$collection->update(array("date" => "$id"), array('$set' => array('email' => "$email")));
	echo "$title\n";
	$collection->update(array("date" => "$id"), array('$set' => array('title' => "$title")));
	echo "$body\n";
	$collection->update(array("date" => "$id"), array('$set' => array('blog' => "$body")));
	echo "$date\n";
	$collection->update(array("date" => "$id"), array('$set' => array('date' => "$date")));

		
//	$cursor = $collection->find();
	
//foreach ($cursor as /*$obj*/$time => $id) {
/*
	$time = $obj["date"];
    if($time == $id) {
	$query = array("date" => $time);
	$cursor = $collection->find($query);	
	$filter = array("date" => $id);
	$names = array("name" => $name);
	$emails = array("email" => $email);
	$titles = array("title" => $title);
	$bodys = array("blog" => $body);
	$collection->update($filter,$names,$titles, $bodys,false,false);

   }
   }*/
   }
   $m->close();
   
?>	
	
	</div>
	
	
   <?php include("sidebar.php"); ?>
</div>
</body>
</html>
