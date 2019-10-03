<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'quizzer');
    //define('DB_CONN', new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME));
    
    // if(DB_CONN->connect_error)
    //     die("Could not connect to the database: " . DB_CONN->connect_error);

    $GLOBALS['db_hostname'] = "localhost";
    $GLOBALS['db_username'] = "root";
    $GLOBALS['db_password'] = "";
    $GLOBALS['db_name']  = "quizzer";

    $GLOBALS['sqlConnection'] = new mysqli($GLOBALS['db_hostname'], $GLOBALS['db_username'], $GLOBALS['db_password'], $GLOBALS['db_name']);
    if($sqlConnection->connect_error)
        die("Could not connect to the database: " . $sqlConnection->connect_error);

?>