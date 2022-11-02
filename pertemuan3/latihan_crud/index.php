<?php

include 'database_conn.php';
$query = "SELECT * FROM customers limit 200";
$result = mysqli_query($db_connect, $query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

     <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="float-start mb-4">
                    <h2>Customer list</h2>
     </div>

     <div class="float-end">
        <a href="add.php" class="btn btn-succes">Tambah Customer Baru</a>
     </div>
     
     <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAMA DEPAN</th>
                <th scope="col">NAMA TERAKHIR</th>
                <th scope="col">NAMA EMAIL</th>
                <th scope="col">BERGABUNG</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        
        <tbody>
            <!-- Fetch data customer dengan array associative -->
            <?php if($result->num_rows > 0) : ?>
                <?php while ($customer_data = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <th scope="row"><?php echo $customer_data['customer_id'] ?></th>
                        <td><?php echo $customer_data['firstname'] ?></td>
                        <td><?php echo $customer_data['lastname'] ?></td>
                        <td><?php echo $customer_data['email'] ?></td>
                        <td><?php $new_date = new DateTime($customer_data['created']);
                        echo $new_date->format('y-m-d'); ?></td>
                    <td>
                        <a href="edit.php?customer_id=<?php echo $customer_data['customer_id']; ?>" class="btn btn-primary">EDIT</a>
                        <a href="delete.php?customer_id=<?php echo $customer_data['customer_id']; ?>" class="btn btn-danger">HAPUS</a>
                    </td>
                    </tr>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="3" rowspan="1" header="">Tidak Ada Data Ditemukan</td>
                        </tr>
                        <?php endif; ?>
                        <?php mysqli_free_result($result); ?>      
        </tbody>
     </table>
     </div>
     </div>
     </div>

     <script src="js/bootstrap.bundle.js"></script>

</body>
</html>