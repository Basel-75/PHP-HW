<form action="form.php" method="GET">
    Name: <input type="text" name="Fname">
    <br>
    Last: <input type="text" name="Lname">
    <br>
    <input type="submit" >
</form>

<?php

echo $_REQUEST["Fname"];
echo $_REQUEST["Lname"];

?>