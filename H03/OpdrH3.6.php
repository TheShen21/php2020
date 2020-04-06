<?php
$kost = 10;
$leeftijd = 10;
if($leeftijd <= 3){
    $kost = 0;
}
else if ($leeftijd > 3 && $leeftijd <= 12){
    $kost = 5;
}
else if ($leeftijd > 65){
    $kost = 5;
}
else{
    $kost = 10;
}
echo "Leeftijd ".$leeftijd." kost ".$kost." euro<br>";

$leeftijd = 2;
if($leeftijd <= 3){
    $kost = 0;
}
else if ($leeftijd > 3 && $leeftijd <= 12){
    $kost = 5;
}
else if ($leeftijd > 65){
    $kost = 5;
}
else{
    $kost = 10;
}
echo "Leeftijd ".$leeftijd." kost ".$kost." euro<br>";

$leeftijd = 65;
if($leeftijd <= 3){
    $kost = 0;
}
else if ($leeftijd > 3 && $leeftijd <= 12){
    $kost = 5;
}
else if ($leeftijd > 65){
    $kost = 5;
}
else{
    $kost = 10;
}
echo "Leeftijd ".$leeftijd." kost ".$kost." euro<br>";

$leeftijd = 12;
if($leeftijd <= 3){
    $kost = 0;
}
else if ($leeftijd > 3 && $leeftijd <= 12){
    $kost = 5;
}
else if ($leeftijd > 65){
    $kost = 5;
}
else{
    $kost = 10;
}
echo "Leeftijd ".$leeftijd." kost ".$kost." euro";
