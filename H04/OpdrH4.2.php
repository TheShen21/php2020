<?php
function delenDoor3($a){
    if($a % 3 == 0){
        $b = "kan";
    }
    else{
        $b = "kan niet";
    }
    echo $a." ".$b." delen door 3";
}
delenDoor3(4);