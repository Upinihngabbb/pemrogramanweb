<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="col-md-12">
            <div class="page-header mb-4">
                <h2>Tambah Customer Baru</h2>
    </div>

    <form action="add_process.php" method="post">
        <div class="form-group">
            <label>NAMA DEPAN</label>
            <input type="text" name="firstname" class="form-control" required>
        </div>

        <div class="form-group">
            <label>NAMA TERAKHIR</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="form-group">
            <label>EMAIL</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        
        <input type="submit" class="btn btn-primary" name="submit" value="save">
    </form>
    </div>
    </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
    
</body>    
</html>