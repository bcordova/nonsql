
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>YSMISM</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <SCRIPT LANGUAGE="JavaScript">



function checkFields() {

re = "/^(\d{4})\/\(\d{1,2})\/\(\d{1,2})/"; 

missinginfo = "";
if (document.form.name.value == "") {
missinginfo += "\n     -  Name";
}
if (document.form.email.value == "") {
missinginfo += "\n     -  Email";
}
if (document.form.title.value == "") {
missinginfo += "\n     -  Title";
}
if(document.form.body.value == "") {
missinginfo += "\n     -  Body";
}

if (missinginfo != "") {
missinginfo ="_____________________________\n" +
"You failed to correctly fill in your:\n" +
missinginfo + "\n_____________________________" +
"\nPlease re-enter and submit again!";
alert(missinginfo);
return false;
}
else return true;
}

</script>
 </HEAD>
<div id="wrap">
 <BODY>
 <?php include("header.php"); ?>
 <div id="main">
<?php
$m = new Mongo();
$db = $m->blog_info;
$collection = $db->blogs;

    $id = $_GET['tag'];
	//$query = array("date" => $id);
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


$m->close();
//'updateband.php?tag=$id'

?>
<form method="post" form name=form <?php echo "action='submitblog.php?tag=$id'" ?> onSubmit="return checkFields();">

<input type=hidden name=to value='you @ your domain . web'>
<input type=hidden name=subject value="Freedback">

<pre>
Name:         <input type=text value= "<?php $name; echo $name; ?>" name="name" size=40>

Email:        <input type=text value = "<?php $email; echo $email; ?>" name="genre" size=40>

Blog Title:   <input type=text value ="<?php $title; echo $title; ?>" name="year" size=40>  

<textarea rows=10 cols=58 name="members"><?php $blog; echo $blog; ?></textarea>

<input type=submit name="submit" value="Submit Form!">


</pre>
</form>
</div>
<?php include("sidebar.php"); ?>
</div>
 </BODY>
</HTML>
