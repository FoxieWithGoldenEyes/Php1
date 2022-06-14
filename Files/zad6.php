

<form action="zad6.php" method="get">
    <input type="number" name="start" />
    <label for="start">start</label>
    <br /><br />
    <input type="number" name="stop" />
    <label for="stop">stop</label>
    <br /><br />
    <input type="submit" value="Send" />
</form>


<?php
$start = $_GET['start'];
$stop = $_GET['stop'];
for($i=$start; $i <= $stop; $i++)
    echo $i." ";
?>







