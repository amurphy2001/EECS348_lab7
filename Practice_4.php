<html>
<body>
<form action="example.php" method="post>
Enter a number:
<input type="number_format" name="number"> <br> <br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
    $n = $_POST=['number'];
    for($i = 1; $i <= $n; ++$i)
        echo $n , "*", $i, "=", $n * $i, \n;
?>