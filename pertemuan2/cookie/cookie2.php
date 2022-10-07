<?php
$cookie_name = "user";
$cookie_value = "luthfi";
setcookie($cookie_name, $cookie_value, time() + 3600, "?");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie 2</title>
</head>
<body>
    <?php
    if(isset($_COOKIE[$cookie_name])) {
        echo "Cookie dengan nama ".$cookie_name." tersedia."."<br>";
        echo "Dengan value : " .$_COOKIE[$cookie_name];
    }else {
        echo "Cookie belum dibuat/telah terhapus";
    }
    ?>
</body>
</html>