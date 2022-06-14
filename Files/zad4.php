<?php
$data=[12, "napis", 13.8, "produkt", 13];
$count = count($data);
$sum = 0;
for($i = 0; $i < $count;$i++){
    if(is_string($data[$i]))
        echo $data[$i]."<br/>";
    else if(is_numeric($data[$i]))
        $sum += $data[$i];
}
echo $sum;

?>