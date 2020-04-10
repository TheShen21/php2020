<?php

function omzetten($a){
    $c = ($a * 1.8) +32;
    echo $a." Celsius "."*"." 1.8 + 32 = ".$c." Fahrenheit";
}

omzetten(10);