<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'dbwriter');
define('DB_PASSWORD', 'qdPKWQ++JT7YTuF2#5>}');
define('DB_NAME', 'userLogins');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false)
{
    die("Error: Could not connect. " . mysqli_connect_error());
}
?>