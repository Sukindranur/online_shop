<?= $this->extend('layout/menu') ?>

<?= $this->section('judul') ?>
<h3>Selamat Datang</h3>
<?= $this->endSection() ?>


<?= $this->section('isi') ?>
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-info"></i>Toko Online</h5>
    Selamat Beraktifitas...
    <br>
    <?= $data ?>
</div>
<?= $this->endSection() ?>