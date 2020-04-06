<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 5</title>
<style>
    .green{
        border: green solid 3px;
    }
    .red{
        border: red solid 3px;
    }
</style>
</head>
<body>
<?php
for($teller = 1; $teller < 10; $teller++){

    if($teller % 2 == 1){
      $class = "class= 'green'";
    }
    else{
        $class ="class= 'red'";
    }
echo "<img ".$class." src = 'img/aap".$teller.".jpg'> ";
}
?>
</body>
</html>
