<?php
/**
 * Created by PhpStorm.
 * User: tobias.albert
 * Date: 02.05.2016
 * Time: 11:15
 */
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header('Location: /login.php');
    exit;
}

include_once "../lib/objects_helper.php";

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    echo "Fehler! Keine ID!"; exit;
}
$o = get_object(intval($_GET['id']));

$html = "<div id='object_div'><h1 class='object_title'>" . $o['name'] . "</h1>";
$html .= "<img class='object_img' src='../img/objects/" . $o['image'] . "' />";
$html .= "</div>";
echo $html;