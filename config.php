<?php
    $GLOBALS['db_hostname'] = "localhost";
    $GLOBALS['db_username'] = "root";
    $GLOBALS['db_password'] = "";
    $GLOBALS['db_name']  = "quizzer";

    $GLOBALS['sqlConnection'] = mysqli_connect($GLOBALS['db_hostname'], $GLOBALS['db_username'], $GLOBALS['db_password'], $GLOBALS['db_name']);
    if($sqlConnection->connect_error)
        die("Could not connect to the database: " . $sqlConnection->connect_error);

?>