<!DOCTYPE html>
<html>
<body>

<h1>I am Static Header</h1>
<h3 class="abc">
<?php
echo "I am dynamic content from PHP!";
?>

</h3>
<p> Today&apos;s Date is 2014/02/03
  <?php
echo date("Y/m/d");
?>
</p>
</body>
</html>