<form action="post.php" method="post">
  Password: <input type="password" name="password">
  <input type="submit">
</form>
<?php
echo $_POST["password"];
?>
