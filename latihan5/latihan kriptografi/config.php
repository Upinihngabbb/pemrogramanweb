<?php

$db_hostname = 'localhost';
$db_name = 'belajar_kriptografi';
$db_username = 'root';
$db_password = '';

$conn_db = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if(!$conn_db) {
    die("Connection failed : " . mysqli_connect_error());
}