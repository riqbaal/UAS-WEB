<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Toko Helm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <style>
      :root {
        --dark-red: #8B0000;
        --light-red: #ffeeee;
      }
      
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
      }
      
      .container {
        margin-top: 20px;
      }
      
      /* Header Styles */
      h2 {
        font-weight: 700;
        color: var(--dark-red);
      }
      
      /* Sidebar Styles */
      .sidebar {
        background: linear-gradient(145deg, #ffffff, var(--light-red));
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      }
      
      .sidebar ul li {
        margin-bottom: 15px;
      }
      
      .sidebar ul li a {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: #495057;
        font-weight: 500;
        border-radius: 8px;
        transition: all 0.3s ease;
      }
      
      .sidebar ul li a:hover {
        background-color: var(--dark-red);
        color: white;
        transform: translateX(5px);
      }
      
      /* Button Styles */
      .btn-dark-red {
        background-color: var(--dark-red);
        color: white;
        padding: 8px 20px;
        border-radius: 8px;
        transition: all 0.3s ease;
      }
      
      .btn-dark-red:hover {
        background-color: #660000;
        color: white;
        transform: translateY(-2px);
      }
      
      /* Content Area */
      .col-9 {
        padding: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      }
      
      /* Footer Styles */
      footer {
        background: var(--dark-red);
        color: white;
        padding: 20px 0;
        margin-top: 30px;
        border-radius: 15px 15px 0 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row mb-4 align-items-center">
        <div class="col">
          <h2><i class="fas fa-tachometer-alt me-2"></i>Admin Dashboard</h2>
        </div>
        <div class="col text-end">
          <a href="<?= base_url('logout') ?>" class="btn btn-dark-red">
            <i class="fas fa-sign-out-alt me-2"></i>Logout
          </a>
        </div>
      </div>
      
      <div class="row g-4">
        <div class="col-3 sidebar">
          <h5 class="mb-4 text-dark-red">Navigation</h5>
          <ul>
            <li>
              <a href="<?= base_url('admin/dashboard') ?>">
                <i class="fas fa-home me-2"></i>Dashboard
              </a>
            </li>
            <li>
              <a href="<?= base_url('admin/daftar-helm') ?>">
                <i class="fas fa-helmet-safety me-2"></i>Daftar Helm
              </a>
            </li>
            <li>
              <a href="<?= base_url('admin/transaksi') ?>">
                <i class="fas fa-exchange-alt me-2"></i>Transaksi
              </a>
            </li>
            <li>
              <a href="<?= base_url('admin/pelanggan') ?>">
                <i class="fas fa-users me-2"></i>Pelanggan
              </a>
            </li>
          </ul>
        </div>
        <div class="col-9">
          <?= $this->renderSection('main'); ?>
        </div>
      </div>
    </div>

    <footer>
      <div class="container text-center">
        <p class="mb-0">&copy; 2024 Toko Helm Iqbal | Jambi</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>