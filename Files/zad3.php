<?php
$fruits = ["banana", "orange", "strawberry", "raspberry", "cherry"];
$count = count($fruits);
echo 'Pierwszy owoc to: '.$fruits[0];
echo "<br/>";
echo 'Ostatni owoc to: '.$fruits[$count - 1];
echo "<br/>";
sort($fruits);
for($i = 0; $i < $count; $i++) {
    echo $fruits[$i]."<br/>";
}















