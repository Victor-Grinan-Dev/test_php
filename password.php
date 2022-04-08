<html>
    <form  action="./password.php" method="post">
        <input type="password" name="password1">
        <input type="submit">
    </form>

    <?php 
        echo $_POST["password1"];
    ?>
</html>