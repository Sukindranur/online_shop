<?= $this->extend('layout/main') ?>

<?= $this->section('menu') ?>
<li class="nav-item">
    <a href="<?= site_url('layout/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-tachometer-alt"></i>
        <p>
            Home
        </p>
    </a>
</li>
<!-- <li class="nav-header">Admin</li>
<li class="nav-item">
    <a href="<?= site_url('barangmasuk/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-table"></i>
        <p>
            Barang Masuk
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="<?= site_url('driver/index') ?>" class="nav-link">
        <i class="nav-icon fa fa-tasks"></i>
        <p>
            D.O
        </p>
    </a>
</li> -->
<?= $this->endSection(); ?>