<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2 class="mb-5">Pelanggan</h2>

<div class="mb-5">
    <div class="d-flex justify-content-between mb-3">
        <h4>Daftar Pelanggan</h4>
        <a href="<?= base_url('admin/pelanggan/tambah') ?>" class="btn btn-primary">Tambah Pelanggan</a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No Hp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Rahmat Iqbal</td>
                <td>08235160808</td>
                <td>Selincah</td>
                <td>
                    <a href="<?= base_url('admin/pelanggan/hapus') ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Ardhea</td>
                <td>08215601721</td>
                <td>Kasang Kumpeh</td>
                <td>
                    <a href="<?= base_url('admin/pelanggan/hapus') ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            <!-- Tambahkan lebih banyak baris di sini jika diperlukan -->
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>