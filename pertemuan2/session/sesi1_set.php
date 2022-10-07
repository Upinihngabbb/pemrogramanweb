<?php
// memulai session
session_start();

// membuat session dengan nama kalian
$_SESSION['nama'] = "LUTHFI HADI NUGRAHA";

// Membuat session dengan absen kalian 
$_SESSION['absen'] = 12;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http_equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan session</title>
    </head>
    <body>
        <?php
        echo "Nama saya " . $_SESSION['nama'] . "<br>". "Nomor absen ". $_SESSION['absen'];
        ?> 
    </body>
    </html>