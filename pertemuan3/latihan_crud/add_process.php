<?php

// add_process.php
include "database_conn.php";

if(count($_POST) > 0) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $created = $_POST["created"];

    $query = "INSERT INTO customers (firstname, lastname, email, created) VALUES ('$firstname', '$lastname', '$email', '$created')";

    if(mysqli_query($db_connect,$query)) {
        $message = 1;
    }else {
        $message = 4;
    }
}

header("location:index.php?message=" . $message . "");	