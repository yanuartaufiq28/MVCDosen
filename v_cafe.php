<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Daftar Pesanan Anda di Cafe Kita</h2>
        <a href="v_add.php" class="btn btn-primary my-3">Tambah Pesanan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Pesanan</th>
                    <th>Jumlah</th>
                    <th>Catatan</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Pastikan variabel $proker berisi hasil query
                if (!empty($cafe)) {
                    foreach ($cafe as $row) {
                ?>
                        <tr>
                            <td class="align-middle"><?php echo $row['Pesanan'] ?></td>
                            <td class="align-middle"><?php echo $row['Jumlah'] ?></td>
                            <td class="align-middle"><?php echo $row['Catatan'] ?></td>
                            <td class="align-middle"><a href="v_edit.php?edit=<?php echo $row['Pesanan'] ?>" class="btn btn-warning">Edit</a></td>
                            <td class="align-middle"><a href="index.php?delete=<?php echo $row['Pesanan'] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="5">Tidak ada data Pesanan.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
