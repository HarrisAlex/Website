<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'minekpbj_dbwriter');
define('DB_PASSWORD', 'ZPd6RZQMFoYc');
define('DB_NAME', 'minekpbj_userLogins');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false)
{
    die("Error: Could not connect. " . mysqli_connect_error());
}
?>