<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Helm</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus Helm</h1>
        
        <?php if (isset($helm)): ?>
            <p>Apakah Anda yakin ingin menghapus Helm dengan data berikut?</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($helm['nama']); ?></li>
                <li><strong>Merek:</strong> <?= htmlspecialchars($helm['merek']); ?></li>
                <li><strong>Spesifikasi:</strong> <?= htmlspecialchars($helm['spesifikasi']); ?></li>
                <li><strong>Tahun Rilis:</strong> <?= htmlspecialchars($helm['tahun_rilis']); ?></li>
                <li><strong>Gambar:</strong> <?= htmlspecialchars($helm['gambar']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($helm['harga'], 2, ',', '.'); ?></li>
            </ul>
            
            <form action="/admin/daftar-helm/hapus/<?= $helm['id']; ?>" method="Post">
                <?= csrf_field(); ?>
                
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-helm" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data helm tidak ditemukan.</p>
            <a href="/admin/daftar-helm" class="btn btn-secondary">Kembali ke Daftar Helm</a>
        <?php endif; ?>
    </div>
</body>
</html>