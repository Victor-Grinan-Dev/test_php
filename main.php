<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css">
    <title>MyPHP</title>
  </head>
  <body>
    <form action="main.php" method="get">
      Name: <input type="text" name="username" value="enter your name">
      <input type="submit">
    </form>
    <br>
    <?php
    echo "Hello ".$_GET["username"]."!<br>Here is a calculator for you.";
    ?>
    <br>

    <form action="main.php" method="get">
      <input type="number" name="num1" value=0>
      +
      <input type="number" name="num2" value=0>
      <input type="submit" value="show result">
    </form>
    <?php
    echo "Answer: ".$_GET["num1"] + $_GET["num2"];
    ?>
    <br>

  </body>
</html>
