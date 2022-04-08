<html>
    <form action="checkbox.php" method="post">
    pear: <input type="checkbox" name="fruits[]" value="pear"><br>
    apple: <input type="checkbox" name="fruits[]" value="apple"><br>
    banana: <input type="checkbox" name="fruits[]" value="banana"><br>
    <input type="submit"><br>
    </form>

</html>
<?php 
    $choices = $_POST["fruits"];
?>
<?= $choices[0]?>