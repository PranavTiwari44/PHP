<?php

$array = [];

for ($i = 1; $i <= 10; $i++) {
    if ($i < 4){
        $array[$i] = "a";
    }
    elseif (4 <= $i and $i <= 7){
        $array[$i] = "b";
    }
    else {
        $array[$i] = "c";
    }
    // Put your code here
    echo $array;
}
