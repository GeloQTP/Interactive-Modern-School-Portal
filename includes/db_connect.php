<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

$db_host = 'localhost'; // variables we need that contains data from our database.
$db_user = 'root';
$db_pass = '';
$db_name = 'laragondatabase';

try {
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) { // catch if there is an error with our mysqli_connect().
    echo '<p style="color:red;">Database Connection Error. Please Try again Later.</p>';
    // echo '<p style="color:red;">Error details: ' . mysqli_connect_error() . '</p>';
    exit();
}
