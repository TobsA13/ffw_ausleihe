<?php
/**
 * Created by PhpStorm.
 * User: tobias.albert
 * Date: 08.04.2016
 * Time: 10:51
 */

session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header('Location: /login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FF Wörnitz Hilfsmittel Öffentlichkeitsarbeit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<img class="menu-icon" src="img/katalog.jpg">
<img class="menu-icon" src="img/formular.jpg">
<img class="menu-icon" src="img/downloads.jpg">
</body>
</html>