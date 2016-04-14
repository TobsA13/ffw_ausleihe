<?php
/**
 * Created by PhpStorm.
 * User: tobias.albert
 * Date: 08.04.2016
 * Time: 10:51
 */

session_start();
if(isset($_SERVER['HTTP_REFERER'])){
    $_SESSION['ref'] = $_SERVER['HTTP_REFERER'];
} else {
    $_SESSION['ref'] = NULL;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FF Wörnitz Hilfsmittel Öffentlichkeitsarbeit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- Sichtbarer Dokumentinhalt im body -->
<h1>Feuerwehr Wörnitz</h1>
<h2>Öffentlichkeitsarbeit Hilfsmittel</h2>
<br><br>
<img src="img/katalog.bmp">
<img src="img/formular.bmp">
</body>
</html>