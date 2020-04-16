<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 1</title>
    <style>
        table, tr, td{
            border:solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php

$dbh = new PDO('mysql:host=localhost;dbname=class;port=3308', 'root', '');
$query ="SELECT * from cursist";
$stmt = $dbh->prepare($query) or die('Error 5');
$stmt->execute() or die ('Error6');

echo '<table>';

while ($array = $stmt->fetch()){
    echo '<tr>';
    echo "<td>".$array['cursistnr']."</td>";
    echo "<td>".$array['naam']."</td>";
    echo "<td>".$array['roepnaam']."</td>";
    echo "<td>".$array['straat']."</td>";
    echo "<td>".$array['postcode']."</td>";
    echo "<td>".$array['plaats']."</td>";
    echo "<td>".$array['geslacht']."</td>";
    echo "<td>".$array['geb_datum']."</td>";

    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>