<?php
/**
 * Created by PhpStorm.
 * User: tobias.albert
 * Date: 28.04.2016
 * Time: 15:50
 */

session_start();
if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
    header('Location: /index.php');
    exit;
}