<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Successfully to project1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru
VALUES('','Rudiwiyono', 'Banyuanyar', '06-5-1991', 'FPOIW123', 'Matematika')");
if($query_insert) {
    echo("Error query " . mysqli_error($connection));
}
mysqli_close($connection);
?>