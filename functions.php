<?php

$name = 'Victor';
    function sayHi($name){
        echo "hello " . $name;
    }
    sayHi($name);
?>

<html>
    <form action="functions.php">
        <input type="number" name="num1"> + <input type="number" name="num1">
    </form>
</html>

<?php
    function cube($numToCube){
        return $numToCube * $numToCube * $numToCube;
    }
    echo cube(8);
?>
