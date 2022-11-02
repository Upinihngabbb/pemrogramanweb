<?php
include "database_conn.php";
$query = "SELECT * FROM customers WHERE customer_id='" . $_GET["customer_id"] . "'";
$result = mysqli_query($db_connect, $query);
$customer = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
        <div class="page-header mb-4">
            <h2>Edit Customer</h2>
    </div>
A
    <div class="row">
        <div class="col-md-12">
            <form action="edit_process.php" method="post">
                <input type="hidden" name="customer_id" value="<?php echo $_GET["customer_id"]; ?>" class="form-control" required>

            <div class="form-group">
                <label for="exampleInputEmail">NAMA DEPAN</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $customer["firstname"]; ?>" required>
            </div>

            <div class="form-grup">
                <label for="exampleInputEmail">NAMA TERAKHIR</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $customer["lastname"] ?>" required>  
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">EMAIL</label>
                <input type="text" name="email" class="form-control" value="<?php echo $customer["email"] ?>" required> 
            </div>

            <button type="email" class="btn btn-primary" value="submit">SUBMIT</button>
            </form>
    </div>
    </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>

</body>   
</html>