<?php
$Pesanan = $_GET['edit'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesanan Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            background-color: #0078DF;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="index.php?edit=<?php echo $Pesanan; ?>" method="post">
            <h1>Edit Pesanan</h1>
            <div class="form-group">
                <label for="Pesanan">Pesanan :</label>
                <input type="text" id="Pesanan" name="Pesanan" value="<?php echo $Pesanan; ?>" required readonly />
            </div>
            <div class="form-group">
                <label for="Jumlah">Jumlah:</label>
                <input type="text" id="Jumlah" name="Jumlah" required />
            </div>
            <div class="form-group">
                <label for="Catatan">Catatan:</label>
                <input type="text" id="Catatan" name="Catatan" required />
            </div>
            <div class="form-group">
                <button type="submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>

</html>
