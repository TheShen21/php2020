<?php
session_start();
$users = array(
    "Bo" => array("pwd" => "1234", "rol" => "Administrator"),
    "Honman" => array("pwd" => "4321","rol" => "Gebruiker")
);
if(isset($_GET["loguit"])){
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["pwd"] == $_POST['pwd'])
{
$_SESSION["user"] = array("naam" => $_POST["login"], "pwd" => $users[$_POST["login"]]['pwd'], "rol" => $users[$_POST["login"]]['rol']);
$message = "Welkom ".$_SESSION["user"]["naam"]." met de rol ".$_SESSION["user"]["rol"];
}
else{
    $message = "Inloggen";
}

?>
<html>
<body>
<h1><?php echo $message; ?></h1>
<h3>Admin: Bo, wachtwoord: 1234</h3>
<h3>Gebruiker: Honman, wachtwoord: 4321</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="form-group">
    <label for="login">login:</label>
    <input type="text" name="login" value="">
</div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="login.php">Website</a></p>
<p><a href="admin.php">Admin Only</a></p>
<p><a href="indexH7.php?loguit">uitloggen</a></p>
</body>
</html>