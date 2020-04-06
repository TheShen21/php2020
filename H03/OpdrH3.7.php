<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<?php
$class = "class = 'padding'";
$zwemclub["De spartelkuikens"] = 25;
$zwemclub["De waterbuffels"] = 32;
$zwemclub["Plonsmderin"] = 11;
$zwemclub["Bommetje"] = 23;

foreach ($zwemclub as $club => $aantal){
    echo $club." hebben ".$aantal." leden ";
    echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
    if($aantal >= 25 && $aantal <= 29){
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'><br>";
    }
    elseif ($aantal >=30 && $aantal<= 34){
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'><br>";
    }
    elseif ($aantal >=10 && $aantal<= 14){
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'><br>";
    }
    elseif ($aantal >=20 && $aantal<= 24){
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'>";
        echo "<img  src='img/swim-clip-art-jTxkydbTE.png'><br>";
    }
}
?>
</body>
</html>
