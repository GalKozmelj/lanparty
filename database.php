<?php

$server = 'localhost';
$user = 'musicn57_root';
$pass = 'Admin123..';
$db_name = 'musicn57_lanparty';

$link = mysqli_connect($server, $user, $pass, $db_name);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($link, "SET NAMES 'utf8'");
?>
