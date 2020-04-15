<?php
$yes = "true";
$no = "false";
if($_POST['email'] == "piet@worldonline.nl" && $_POST['wachtwoord'] =="doetje123"){
    echo $yes;
}
else if($_POST['email'] == "klaas@carpets.nl" && $_POST['wachtwoord'] =="snoepje777"){
    echo $yes;
}
else if($_POST['email'] == "truushendriks@wegweg.nl" && $_POST['wachtwoord'] =="arkiearkie201"){
    echo $yes;
}
else{
    echo $no;
}
