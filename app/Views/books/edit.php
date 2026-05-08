<?= $this->extend('layouts/template') ?>

<?= $this->section('header') ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h1><?php echo $title; ?></h1>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Edit Buku</h3>
    </div>

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

    <form action="<?= base_url('update/book') ?>" method="post">
        <!-- Form fields will go here -->
         <?= csrf_field() ?>
         <div class="card-body">
            
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul buku" value="<?php echo $detail_buku['title_book'];?>">
            </div>
            <div class="form-group">
                <label>Kode Buku</label>
                <input type="text" name="kode" class="form-control" placeholder="Masukkan kode buku" value="<?php echo $detail_buku['code_book'];?>">
            </div>
            <div class="form-group">
                <label>ISBN</label>
                <input type="text" name="isbn" class="form-control" placeholder="Masukkan ISBN buku" value="<?php echo $detail_buku['isbn_book'];?>">
            </div>
            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Masukkan nama penulis" value="<?php echo $detail_buku['author_book'];?>">
            </div>
            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="form-control" placeholder="Masukkan nama penerbit" value="<?php echo $detail_buku['publisher_book'];?>">
            </div>
            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" placeholder="Masukkan tahun terbit" value="<?php echo $detail_buku['published_year'];?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan buku" value="<?php echo $detail_buku['description_book'];?>">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="updateButton" onclick="return confirm('Apakah anda yakin akan mengupdate data ini?')">Update</button>
            </div>
         </div>
    </form>
</div>
<?= $this->endSection() ?>