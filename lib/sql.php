<?php

/**
 * Created by PhpStorm.
 * User: tobias.albert
 * Date: 02.05.2016
 * Time: 10:21
 */
class sql extends mysqli {
    public function __construct($host = NULL, $user = NULL, $pass = NULL, $db = NULL) {
        if(is_null($host)) {
            $config = parse_ini_file('/var/www/ffw/config/config.ini');
            parent::__construct($config['host'], $config['username'], $config['password'], $config['database']);
        } else {
            parent::__construct($host, $user, $pass, $db);
        }


        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        }
    }
}