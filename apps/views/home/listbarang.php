<a href="<?= BASE_URL. 'index.php?r=home/insertbarang' ?>"class="btn btn-primary">Tambah Barang</a>
<br/><br/>
    <table class="table">
        <thead class = "thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>QTY</th>
            </tr>
        </thead>
        <?php foreach($data as $item) : ?>
        <tr scope="row">
            <td><?= $item['id'] ?></td>
            <td><?= $item['nama'] ?></td>
            <td><span class="badge badge-<?= $item['qty']>50? 'danger': 'primary' ?>"><?= $item['qty'] ?></span></td>
            <td>
                <a href="<?= BASE_URL. 'index.php?r=home/updatebarang/'.$item['id'] ?>" class="badge">Update</a>
                <a href="<?= BASE_URL. 'index.php?r=home/deletebarang/'.$item['id'] ?>" class="badge" onclick="return confirm('Apakah anda yakin untuk menghapus data barang?')">Delete</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
