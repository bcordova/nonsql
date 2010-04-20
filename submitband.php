
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Add Band</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">

    <?php include("header.php"); ?>
	
	  
	<div id="main">
	<h3>Thank you for posting.</h3>
<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $body = $_POST['body'] ;

  $m = new Mongo();
  $db = $m->blog_info;
  $collection = $db->blogs;

  // Insert two documents (objects) into the db
  $collection->insert(array("name" => "$name", "email" =>
                     "$email", "title" => "$title", "blog" => "$body"));					 					 
  }

   $m->close();
?>	
	
	</div>
	
	
   <?php include("sidebar.php"); ?>
</div>
</body>
</html>
