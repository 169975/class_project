<form action="" method="post">
    <input type="text" name="fname" id=""><br>
    <input type="submit"  name="create" value="Create">
</form>

<?php
session_start();

$_SESSION["fname"];

?>
<br>
<a href="page _03.php">Go to page 02</a>