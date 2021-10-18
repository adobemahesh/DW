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
body {
	font-family: Arial, Helvetica, sans-serif;
}
p {
	color: #F00;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP test file</title>
</head>

<body>
<ul>
  <li>This parent file has two PHP includes (header.php and anotherfile.txt)</li>
  <li>anotherfile.txt uses an "include" statement and header.php uses a "require" statement</li>
  <li>anotherfile.txt creates a yellow table</li>
  <li>header.php creates a red table</li>
  <li>The content of these PHP include files do not display in DW's Design view; you only see a yellw PHP shield icon.</li>
  <li>header.php also contains its own include (somefile.txt), which creates a blue table</li>
</ul>
<p>this is a p tag
<p>&nbsp;</p>
</p>
</body>
</html>
