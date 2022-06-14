<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>

<?php
    $file = file("sendziowie.txt");
    $count = count($file);
    for($i = 0; $i < $count; $i++){
        echo $file[$i]."<br/>";
    }
?>

</body>
</html>