<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<h2 class="mb-5">Tambah Helm</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-helm/create')?>" enctype="multipart/form-data" method="POST">
        <div class="mb-3">
            <label for="nama">Nama Helm</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
            <label for="merek">Merek</label>
            <input type="text" class="form-control" name="merek" id="merek">
        </div>
        
        </div>
        
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-helm')?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>
