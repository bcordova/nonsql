
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Add Band</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="calendarDateInput.js"></script>
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

  <form method="post" form name=form action="submitband.php" onSubmit="return checkFields();">

<input type=hidden name=subject value="Freedback">

<pre>
Name:    	<input type=text name="name" size=40>

Email:        	<input type=text name="email" size=40>

Blog Title:     <input type=text name="title" size=40>

<textarea rows=10 cols=58 name="body"></textarea>

<input type=submit name="submit" value="Submit Form!">


</pre>
</form>
</div>
<?php include("sidebar.php"); ?>
</div>
 </BODY>
</HTML>
