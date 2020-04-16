<?php
$dtb = new PDO('mysql:host=localhost;dbname=login;port=3308','root','');
$query ="SELECT * from inloggen";
$stmt = $dtb->prepare($query) or die('Error 5');
$stmt->execute() or die ('Error6');
$array = $stmt->fetch();

    if($_POST['email'] == $array['email'] && $_POST['wachtwoord'] == $array['wachtwoord']){
        echo "Welkom";
    }
    else {
        echo "Sorry, geen toegang";
    }




