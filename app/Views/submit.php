<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-6 text-center">
            <div class="mb-4">
                <i class="fas fa-check-circle text-dark-red" style="font-size: 4rem;"></i>
            </div>
            <h3 class="mb-3">Pesanan Berhasil!</h3>
            <p class="text-muted mb-4">Order #12345 sedang diproses. Terima kasih telah berbelanja.</p>
            <a href="<?= base_url() ?>" class="btn btn-dark-red">
                <i class="fas fa-shopping-bag me-2"></i>Kembali Berbelanja
            </a>
        </div>
    </div>
</div>

<style>
.text-dark-red {
    color: #8B0000;
}
.btn-dark-red {
    background-color: #8B0000;
    color: white;
}
.btn-dark-red:hover {
    background-color: #660000;
    color: white;
}
</style>
<?= $this->endSection() ?>
