<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.yellowTable {
	background-color: #FF9;
}
.redTable {
	background-color: #F33;
}
.blueTable {
	background-color: #CFF;
}
.brownTable {
	background-color: #963;
}
.greenTable {
	background-color: #0C0;
}
body {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP test file</title>
</head>

<body>
<ul>
  <li>This parent file has four PHP includes: header.php, anotherfile.txt, file3.php and file4.php</li>
  <li>it uses the four different kinds of PHP include statements: include(), include_once(), require(), and require_once()</li>
  <li>anotherfile.txt uses an "include" statement and header.php uses a "require" statement</li>
  <li>anotherfile.txt creates a yellow table</li>
  <li>header.php creates a red table</li>
  <li>the comments have been removed after the PHP include statements to get around a bug 193031 where DW won't show include file contents if there are comments</li>
  <li>The content of these PHP include files do not display in DW's Design view; you only see a yellow PHP shield icon.</li>
  <li>header.php also contains its own include (&quot;somefile.txt&quot;), which creates a blue table</li>
</ul>
<p>
<?php
	require ('header.php');	
?>
<p>&nbsp;</p>
<?php
	include ("anotherfile.txt");
?>
<p>&nbsp;</p>
<?php
	require_once ('file3.php');	
?>
</p>
<p>&nbsp;</p>
<?php
	include_once ('file4.php');	
?>
</body>
</html>
