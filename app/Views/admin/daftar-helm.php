<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>

<h2 class="mb-5">Daftar Helm</h2>

<div class="mb-3">
    <a href="<?= base_url('admin/daftar-helm/tambah')?>" class="btn btn-primary">Tambah Helm</a>
</div>

<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Helm</th>
                <th scope="col">Merek</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($helms as $helm):?>
            <tr>
                <th scope="row"><?=$helm['id']?></th>
                <td><?= $helm['nama']?></td>
                <td><?= $helm['merek']?></td>
                
                <td>
                    <img src="<?= base_url($helm['gambar'])?>" alt="" style="width: 150px; height: auto;">
                </td>
                <td><?= $helm['harga']?></td>
                <td>
                    <a href="<?= base_url('admin/daftar-helm/edit')?>/<?=$helm['id']?>"class="btn btn-success">Edit</a>
                    <a href="<?= base_url('admin/daftar-helm/hapus')?>/<?=$helm['id']?>"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>

<?= $this->endSection();?>
