<?php
/**
 * Created by PhpStorm.
 * User: tobias.albert
 * Date: 02.05.2016
 * Time: 10:17
 */

require_once "sql.php";

function get_objects(){
    $db = new sql();
    $query = "SELECT `ID`, `name`, `image` FROM `Objects` WHERE `enabled` = '1'";
    if(!$result = $db->query($query)){
        return false;
    }
    $rows = array();
    while($row = $result->fetch_assoc())
    {
        $rows[] = $row;
    }
    return $rows;
}
function get_object($id){
    $db = new sql();
    $query = "SELECT `ID`, `name`, `image` FROM `Objects` WHERE `enabled` = '1' AND `ID` = " . $id;
    if(!$result = $db->query($query)){
        return false;
    }
    return $result->fetch_assoc();
}

