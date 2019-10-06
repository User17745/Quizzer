<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'quizzer');
    
    $GLOBALS['sqlConnection'] = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($GLOBALS['sqlConnection']->connect_error)
        die("Could not connect to the database: " . $GLOBALS['sqlConnection']->connect_error);
?>