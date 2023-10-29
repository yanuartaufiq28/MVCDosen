<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pesanan</title>
    <style>
        body {
            font-family: Calibri, sans-serif;
        }

        form {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group button {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            background-color: #0078DF;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="index.php?add" method="post">
        <h1>Masukkan Pesanan baru</h1>
        <div class="form-group">
            <label for="Pesanan">Nama Pesanan:</label>
            <input type="text" id="Pesanan" name="Pesanan" required />
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah:</label>
            <input type="text" id="Jumlah" name="Jumlah" required />
        </div>
        <div class="form-group">
            <label for="Catatan">Catatan:</label>
            <input type="text" id="Catatan" name="Catatan" required />
        </div>
        <button type="submit">Tambah</button>
    </form>
</body>

</html>
