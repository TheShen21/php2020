<?php
session_start();

if ($_SESSION["user"] && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>welkom ".$_SESSION["user"]["naam"]." op de web";
    echo "<p><a href='indexH7.php'>login</a></p>";
}
else {
    header('location: indexH7.php');
}