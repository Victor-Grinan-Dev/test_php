<html>
Students:<br>
Jim <br>
Pam <br>
Oscar <br>
    <form action="asociative_array.php" method="post">
        Enter a student name<input type="text" name="student">
        <input type="submit">
        <br>
        Grades:
    </form>
</html>

<?php 
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grades[$_POST["student"]], "<br>";
?>