
<form method="POST">
  <div class="form-group">
    <?php if(isset($data["id"]) ) : ?>
    <input type="hidden" name="id" value="<?= isset($data['id'])?  $data['id'] : "" ?>">
    <?php endif ?>
    <label for="inputNama">Nama Barang</label>
    <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp" value="<?= isset($data['nama'])?  $data['nama'] : "" ?>">
    <small id="namaHelp" class="form-text text-muted">Isikan Nama Barang</small>

    <label for="inputJumlah">Jumlah</label>
    <input name="qty" type="text" class="form-control" id="inputJumlah" aria-describedby="jumlahHelp" value="<?= isset($data['qty'])?  $data['qty'] : "" ?>">
    <small id="jumlahHelp" class="form-text text-muted">Isikan Jumlah Barang</small>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>