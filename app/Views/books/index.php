<?= $this->extend('layouts/template') ?>

<?= $this->section('header') ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Daftar Buku</h1>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Buku</h3>

        <div class="card-tools">
            <a href="<?= base_url('create/book') ?>" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Buku
            </a>
        </div>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="50">No.</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Buku 1</td>
                    <td>Penulis 1</td>
                    <td>Penerbit 1</td>
                    <td>2020</td>
                    <td>10</td>
                    <td>
                        <a href="<?= base_url('edit/book/1') ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Buku 2</td>
                    <td>Penulis 2</td>
                    <td>Penerbit 2</td>
                    <td>2021</td>
                    <td>15</td>
                    <td>
                        <a href="<?= base_url('edit/book/2') ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Buku 3</td>
                    <td>Penulis 3</td>
                    <td>Penerbit 3</td>
                    <td>2022</td>
                    <td>20</td>
                    <td>
                        <a href="<?= base_url('edit/book/3') ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endsection() ?>