<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 2</title>
</head>
<body>
<h3>Een dier uitkiezen</h3><br>
<form action="OpdrH5.2Ex.php" method="post">
    <select name="dieren" multiple>
        <option value="tomaat">tomaat</option>
        <option value="panda">panda</option>
        <option value="bever">bever</option>
    </select>
    <input type="submit" name="knop">

</form>
<h3>Meerdere dieren uit kiezen met Ctrl</h3>
<form action="OpdrH5.2Ex2.php" method="post">
    <select name="dieren[]" multiple>
        <option value="tomaat">tomaat</option>
        <option value="panda">panda</option>
        <option value="bever">bever</option>
    </select>
    <input type="submit" name="knop">

</form>
</body>
</html>