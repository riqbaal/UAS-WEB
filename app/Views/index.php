<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Helm Iqbal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
      :root {
        --dark-red: #8B0000;
      }
      
      body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
      }
      
      .navbar {
        background-color: var(--dark-red);
        padding: 1rem 0;
      }
      
      .hero-section {
        background-color: white;
        padding: 4rem 0;
        margin-bottom: 3rem;
        border-bottom: 1px solid #dee2e6;
      }
      
      .card {
        border: none;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: transform 0.2s;
      }
      
      .card:hover {
        transform: translateY(-5px);
      }
      
      .price-tag {
        color: var(--dark-red);
        font-size: 1.25rem;
        font-weight: bold;
      }
      
      .btn-dark-red {
        background-color: var(--dark-red);
        color: white;
        border: none;
      }
      
      .btn-dark-red:hover {
        background-color: #660000;
        color: white;
      }
      
      .btn-outline-dark-red {
        border: 1px solid var(--dark-red);
        color: var(--dark-red);
      }
      
      .btn-outline-dark-red:hover {
        background-color: var(--dark-red);
        color: white;
      }
      
      footer {
        background-color: var(--dark-red);
        color: white;
        padding: 2rem 0;
        margin-top: 4rem;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">
          <i class="fas fa-helmet-safety me-2"></i>
          Toko Helm Iqbal
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#products">Produk</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            </li>
            <li class="nav-item ms-2">
              <a href="<?= base_url() ?>chart" class="btn btn-outline-light">
                <i class="fas fa-shopping-cart me-1"></i>
                Cart <span class="badge bg-danger">3</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1 class="display-4 fw-bold mb-4">Temukan Helm <span class="text-dark-red">Impianmu</span></h1>
            <p class="lead mb-4">Koleksi helm berkualitas dengan harga terbaik sejagad Jambi</p>
            <a href="#products" class="btn btn-dark-red btn-lg px-4">
              Lihat Koleksi
            </a>
          </div>
          <div class="col-md-6">
            <div class="p-4">
              <img src="images/helm2.jpg" alt="Hero Helmet" class="img-fluid rounded-3 shadow">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Products Section -->
    <div class="container" id="products">
      <h2 class="text-center mb-5">Koleksi Helm Terbaik</h2>
    
      <div class="row g-4">
       
        <!-- Product Cards -->
        <div class="col-md-3">
          <div class="card h-100">
            <div class="position-absolute top-0 end-0 p-2">
              <span class="badge bg-danger">New</span>
            </div>
            <img src="images/helm1.jpg" class="card-img-top" alt="helm full face" />
            <div class="card-body">
              <h5 class="card-title">helm full face</h5>
              <p class="price-tag mb-3">Rp 900.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-dark-red">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/helm2.jpg" class="card-img-top" alt="helm half face" />
            <div class="card-body">
              <h5 class="card-title">half face</h5>
              <p class="price-tag mb-3">Rp 700.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-dark-red">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card h-100">
            <div class="position-absolute top-0 end-0 p-2">
              <span class="badge bg-success">Sale</span>
            </div>
            <img src="images/helm3.jpg" class="card-img-top" alt="helm retro" />
            <div class="card-body">
              <h5 class="card-title">helm retro</h5>
              <p class="price-tag mb-3">Rp 500.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-dark-red">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>

        
        <div class="col-md-3">
          <div class="card h-100">
            <img src="images/helm4.jpg" class="card-img-top" alt="helm cross" />
            <div class="card-body">
              <h5 class="card-title">helm cross</h5>
              <p class="price-tag mb-3">Rp 1.000.000,-</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href="<?= base_url() ?>chart" class="btn btn-dark-red">
                  <i class="fas fa-cart-plus me-2"></i>Add to Cart
                </a>
                <button class="btn btn-outline-dark-red">
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- Product cards here -->
     ...existing product cards...
      </div>
    </div>
    <div class="row g-4 mb-5">
    <!-- Footer -->
    <footer class="text-center">
      <div class="container">
        <p class="mb-0">©2024 Toko Helm Iqbal. All Rights Reserved.</p>
      </div>
    </footer>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>