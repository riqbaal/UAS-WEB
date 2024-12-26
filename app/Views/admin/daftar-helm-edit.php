<?= $this->extend('admin/template') ?>
<?= $this->section('main') ?>
<h2 class="mb-5">Edit Helm</h2>
<form action="<?= base_url('admin/daftar-helm/change') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <input type="hidden" name="id" value="<?= $helm['id']; ?>">
    <input type="hidden" name="gambar_lama" value="<?= $helm['gambar']; ?>">
    
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Helm</label>
        <input type="text" class="form-control w-50" id="nama" 
            placeholder="nama" name="nama" value="<?= $helm['nama']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="merek" class="form-label">Merek</label>
        <input type="text" class="form-control" id="merek" name="merek" value="<?= $helm['merek']; ?>"
            autocomplete="off" required>
    </div>
    
    </div>
    
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar Helm</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
        <small>Gambar saat ini: <?= $helm['gambar']; ?></small>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="<?= $helm['harga']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <a href="<?= base_url('admin/daftar-helm') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
</form>
<?= $this->endSection() ?>