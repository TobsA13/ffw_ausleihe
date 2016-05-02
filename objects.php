<?php
/**
 * Created by PhpStorm.
 * User: tobias.albert
 * Date: 28.04.2016
 * Time: 15:48
 */
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header('Location: /login.php');
    exit;
}

require_once "lib/objects_helper.php";

$objects = get_objects();
$count = count($objects);
$ids = array();
foreach($objects as $object){
    $ids[] = $object['ID'];
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
    <script type="application/javascript">var ids = [<?php echo implode(', ', $ids) ?>];</script>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/objects.js"></script>
</head>
<body>
<a>Zurück</a><h2>Ausleihkatalog</h2>
<div id="navigation"><img id="arrow_backward" src="img/bardward.png" onclick="backward()"><div id="count"><span id="count_acc">1</span> / <?=$count?></div><img id="arrow_forward" src="img/forward.png" onclick="forward()"></div>

<div id="objects_content"><img id="loader" src="img/loader.gif" />
</body>
</html>
