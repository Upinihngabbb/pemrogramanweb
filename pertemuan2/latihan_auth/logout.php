<?php
session_start();
echo "berhasil";
if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script>
          alert("Anda berhasil Logout");
          window.location="login-page.php";
    </script>';
} else {
    header("Location:login-page.php");
    exit();
}