<?= $this->extend('layouts/template') ?>

<?= $this->section('header') ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Edit Buku</h1>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Edit Buku</h3>
    </div>

    <form action="<?= base_url('update/book/' . $id) ?>" method="post">
        <!-- Form fields will go here -->
         <?= csrf_field() ?>
         <div class="card-body">
            
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul buku" value="<?= $title ?>">
            </div>
            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Masukkan nama penulis" value="<?= $author ?>">
            </div>
            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Masukkan nama penerbit" value="<?= $publisher ?>">
            </div>
            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukkan tahun terbit" value="<?= $year ?>">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" placeholder="Masukkan stok buku" value="<?= $stock ?>">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="updateButton" onclick="return confirm('Apakah anda yakin akan mengupdate data ini?')">Simpan</button>
            </div>
         </div>
    </form>
</div>
<?= $this->endSection() ?>