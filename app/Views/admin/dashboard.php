<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<div class="dashboard-container">
    <!-- Dashboard Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h4 mb-0">Dashboard Overview</h2>
        <a href="#" class="btn btn-dark-red btn-sm">
            <i class="fas fa-download me-1"></i>Export
        </a>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <!-- Revenue Card -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-muted">Total Pendapatan</h5>
                    <h3 class="text-dark-red mb-0">Rp850.000.000</h3>
                    <small class="text-success">
                        <i class="fas fa-arrow-up me-1"></i>15% dari bulan lalu
                    </small>
                </div>
            </div>
        </div>

        <!-- Transactions Card -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-muted">Total Transaksi</h5>
                    <h3 class="text-dark-red mb-0">465</h3>
                    <small class="text-success">
                        <i class="fas fa-arrow-up me-1"></i>53 hari ini
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="card">
        <div class="card-header bg-light">
            <h5 class="mb-0">Aktivitas Terkini</h5>
        </div>
        <div class="list-group list-group-flush">
            <div class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1">Transaksi Berhasil</h6>
                        <small class="text-muted">helm half face - Rp700.000</small>
                    </div>
                    <span class="badge bg-success">Success</span>
                </div>
            </div>
            <div class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1">Menunggu Pembayaran</h6>
                        <small class="text-muted">helm retro - Rp500.000</small>
                    </div>
                    <span class="badge bg-warning">Pending</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.dashboard-container {
    padding: 1rem;
}

.card {
    border: 1px solid #dee2e6;
    margin-bottom: 1rem;
}

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
<?= $this->endSection();?>