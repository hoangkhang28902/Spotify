<?php
    require_once('../../config/config.php');
    // Create a connect to Database MySQL
    $Connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3306);
    // Allow PHP to save unicode (utf8) - database
    mysqli_set_charset($Connect, 'utf8');
    // Check a connect to successfull?
    if ($Connect->connect_error) {
        var_dump($Connect->connect_error);
        die();
    }
