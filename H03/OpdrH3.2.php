<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>opdracht 2</title>
</head>
<body>
<?php
$bomen = array("img_0050.jpg","lillypilly1.jpg","Maranchery_Biyyam_Kayal_kandal.jpg","weeping-elm.jpg","weeping-elm0091.jpg");
foreach ($bomen as $tree => $waarde){
    echo "<img src = 'img/$waarde'>";
}
?>
</body>
</html>
