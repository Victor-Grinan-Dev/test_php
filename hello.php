<!--http://localhost:4000/main.php-->
<form action="Hello.php" method="get">
  $_GET method can be seen in the url
  Name: <input type="text" name="username" value="enter your name">
  <input type="submit">
</form>
<br>
<?php
echo "Hello ".$_GET["username"]."!<br>Here is a calculator for you.";
?>
<br>
