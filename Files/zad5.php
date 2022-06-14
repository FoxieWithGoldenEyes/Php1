<?php

function suma_parzystych($x, $y, $z) {
    if(is_integer($x) && is_integer($y) && is_integer($z))
        return $x + $y + $z;
    else return "b³êdne dane";
}

?>