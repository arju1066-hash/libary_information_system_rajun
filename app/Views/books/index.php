<?= $this->extend('layouts/template') ?>

<?= $this->section('header') ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1><?php echo $title; ?></h1>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Buku</h3>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        
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
                    <th>Kode Buku</th>
                    <th>ISBN</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; ?>
                <?php foreach($books as $book): ?>
                    <?php $no++; ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $book['title_book'] ?></td>
                        <td><?php echo $book['code_book'] ?></td>
                        <td><?php echo $book['isbn_book'] ?></td>
                        <td><?php echo $book['author_book'] ?></td>
                        <td><?php echo $book['publisher_book'] ?></td>
                        <td><?php echo $book['published_year'] ?></td>
                        <td><?php echo $book['description_book'] ?></td>
                        <td>
                            <a href="<?= base_url('edit/book/' . $book['id_book']) ?>" class="btn btn-info btn-sm">Edit</a>
                            <form action="<?= base_url('delete/book/' . $book['id_book']) ?>" method="post" style="display: inline;">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endsection() ?>