<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container py-4">
    <h2 class="mb-4">Checkout</h2>

    <!-- Order Summary -->
    <div class="card mb-4">
        <div class="card-header bg-dark-red text-white">
            <h5 class="mb-0">Order Summary</h5>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <img src="images/helm2.jpg" class="rounded me-3" width="80" alt="Product Image">
                <div>
                    <h6 class="mb-1">Helm Full Face</h6>
                    <h5 class="text-dark-red mb-0">Rp1.200.000</h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <p class="text-muted mb-1">Subtotal:</p>
                    <h6>Rp1.200.000</h6>
                </div>
                <div class="col-6">
                    <p class="text-muted mb-1">Shipping:</p>
                    <h6>Rp350.000</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- Shipping Address -->
    <div class="card mb-4">
        <div class="card-header bg-dark-red text-white">
            <h5 class="mb-0">Alamat Pengiriman</h5>
        </div>
        <div class="card-body">
            <h6 class="mb-2">Alamat Utama</h6>
            <p class="mb-0">Kasang Kumpeh</p>
        </div>
    </div>

    <!-- Payment Method -->
    <div class="card mb-4">
        <div class="card-header bg-dark-red text-white">
            <h5 class="mb-0">Metode Pembayaran</h5>
        </div>
        <div class="card-body">
            <h6 class="mb-2">Transfer Bank BRI</h6>
            <p class="mb-2">Rahmat Iqbal</p>
            <div class="input-group">
                <input type="text" value="1122334455" class="form-control" readonly>
                <button class="btn btn-dark-red" type="button">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Total & Submit -->
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h6 class="mb-1">Total Pembayaran</h6>
                    <h4 class="text-dark-red mb-0">Rp1.550.000</h4>
                </div>
                <div class="col-md-6">
                    <form action="<?= base_url('submit')?>" method="POST">
                        <button type="submit" class="btn btn-dark-red w-100">
                            Konfirmasi Pesanan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --dark-red: #8B0000;
    }

    .bg-dark-red {
        background-color: var(--dark-red);
    }

    .text-dark-red {
        color: var(--dark-red);
    }

    .btn-dark-red {
        background-color: var(--dark-red);
        color: white;
    }

    .card {
        border-radius: 4px;
        border: 1px solid #dee2e6;
    }

    .card-header {
        border-bottom: 1px solid #dee2e6;
    }

    .input-group {
        border-radius: 4px;
    }
</style>
<?= $this->endSection() ?>